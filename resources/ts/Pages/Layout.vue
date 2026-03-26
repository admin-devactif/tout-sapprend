<script setup lang="ts">
import AppNavbar from "../Components/AppNavbar.vue";
</script>

<template>
    <main class="min-h-screen bg-base-100">
        <header>
            <AppNavbar />
        </header>
        <article class="container mx-auto p-4">
            <slot />
        </article>
    </main>
</template>
