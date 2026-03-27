<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Facades\Storage;

/**
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string $description
 * @property string|null $photo_path
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember query()
 *
 * @mixin \Eloquent
 */
class TeamMember extends BaseModel
{
    private const STORAGE_DISK = 's3';

    public const NAME = 'name';

    public const ROLE = 'role';

    public const DESCRIPTION = 'description';

    public const PHOTO_PATH = 'photo_path';

    protected $table = 'team_members';

    protected static function booted(): void
    {
        static::updated(function (self $teamMember): void {
            if (! $teamMember->wasChanged(self::PHOTO_PATH)) {
                return;
            }

            $originalPhotoPath = $teamMember->getOriginal(self::PHOTO_PATH);

            if (blank($originalPhotoPath) || ($originalPhotoPath === $teamMember->photo_path)) {
                return;
            }

            Storage::disk(self::STORAGE_DISK)->delete($originalPhotoPath);
        });

        static::deleted(function (self $teamMember): void {
            if (blank($teamMember->photo_path)) {
                return;
            }

            Storage::disk(self::STORAGE_DISK)->delete($teamMember->photo_path);
        });
    }

    public function getPhotoUrl(): ?string
    {
        if (blank($this->photo_path)) {
            return null;
        }

        return Storage::disk(self::STORAGE_DISK)->url($this->photo_path);
    }
}
