# Tout s'apprend

The project description

# Development

## Installation

1. Install Docker on your machine.  
   https://learn.microsoft.com/en-us/windows/wsl/setup/environment

1. For file uploads with MinIO to work correctly, both your browser and the Laravel container must be able to resolve the MinIO URL. The best solution is to add an entry to your Windows hosts file:

    1. Open Notepad as Administrator
    1. Open `C:\Windows\System32\drivers\etc\hosts`
    1. Add the following line: `127.0.0.1  minio`

1. Copy the file **.env.example** to **.env** and change appropriate values

1. Start VS Code and run Dev Containers by selecting from the Command Palette(F1) the following command: `Open Folder in Container...`.

1. Install the composer packages  
   `composer install`
1. Install the npm packages  
   `npm install`
1. Migrate the database  
   `php artisan migrate`
1. Set up Filament Shield (roles & permissions)  
   ```bash
   php artisan shield:setup
   php artisan shield:generate --all
   ```
1. Seed the database  
   `php artisan db:seed`
1. Run in dev mode  
   `npm run dev`
1. Before pushing to dev, you can test the pipeline by doing  
   `composer test`

## Laravel Boost (AI / MCP)

This project includes [Laravel Boost](https://laravel.com/docs/12.x/boost) for AI-assisted development. To enable it in Cursor:

1. Open the Command Palette (`Ctrl+Shift+P` or `Cmd+Shift+P`)
2. Type `/open MCP Settings` and press Enter
3. Toggle **laravel-boost** on

The MCP server configuration is already included in `.cursor/mcp.json`. You only need to toggle it on once -- Cursor will remember the setting.

## Debug

1. VScode debug configuration:  
    `{
     "name": "Listen for XDebug",
     "type": "php",
     "request": "launch",
     "port": 9003,
     "pathMappings": {
         "/var/www/html": "${workspaceFolder}"
     },
     "hostname": "localhost",
     "xdebugSettings": {
         "max_data": 65535,
         "show_hidden": 1,
         "max_children": 100,
         "max_depth": 5
     }
 }
`

2. to debug tests, execute `export XDEBUG_SESSION=1` in console

3. If xdebug is broken for an obscure reason:
    1. execute `grep nameserver /etc/resolv.conf` in UBUNTU (not the container)
    2. add `SAIL_XDEBUG_CONFIG="-client_host=[the ip from previous step]"`
