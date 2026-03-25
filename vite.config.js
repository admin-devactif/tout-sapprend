import tailwindcss from "@tailwindcss/vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    server: {
        watch: {
            usePolling: true,
        }
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/filament/app/theme.css",
                "resources/ts/app.ts"
            ],
            refresh: [
                "bootstrap/**/*.php",
                "config/**/*.php",
                "database/**/*.php",
                "lang/**/*.php",
                "app/**/*.php",
                "operations/**/*.php",
                "resources/**/*.php",
                "resources/**/*.ts",
                "resources/**/*.ts",
                "resources/**/*.css",
                "resources/**/*.vue",
                "routes/**/*.php"
            ]
        }),
        tailwindcss(),
        vue()
    ]
});
