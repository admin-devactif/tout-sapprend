<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import { useI18n } from "vue-i18n";

type TeamMember = {
    id: number;
    name: string;
    role: string;
    description: string;
    image_url: string | null;
};

type PageProps = {
    teamMembers: TeamMember[];
};

const page = usePage<PageProps>();
const { t } = useI18n();

const teamMembers = computed(() => page.props.teamMembers ?? []);
</script>

<template>
    <section class="space-y-8">
        <div class="max-w-2xl space-y-3">
            <h2 class="text-3xl font-semibold text-base-content">
                {{ t("team.heading") }}
            </h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <article
                v-for="member in teamMembers"
                :key="member.id"
                class="card bg-base-200 shadow-sm"
            >
                <figure class="bg-base-300">
                    <img
                        v-if="member.image_url"
                        :src="member.image_url"
                        :alt="member.name"
                        class="h-80 w-full object-cover"
                    />

                    <div v-else class="flex w-full justify-center px-6 py-10">
                        <div
                            class="flex h-80 w-full items-center justify-center text-sm text-base-content/60"
                        >
                            {{ t("team.no_photo") }}
                        </div>
                    </div>
                </figure>

                <div class="card-body gap-4">
                    <div class="space-y-2">
                        <span class="badge badge-outline">
                            {{ member.role }}
                        </span>
                        <h3 class="card-title text-2xl">{{ member.name }}</h3>
                        <p class="text-sm leading-6 text-base-content/75">
                            {{ member.description }}
                        </p>
                    </div>

                    <div class="card-actions justify-start">
                        <button class="btn btn-link px-0 no-underline" type="button">
                            {{ t("team.read_more") }}
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </section>
</template>
