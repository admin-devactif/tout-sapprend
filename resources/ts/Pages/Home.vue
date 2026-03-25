<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import Layout from "./Layout.vue";

defineProps<{ message: string }>();
</script>

<template>
    <Layout>
        <Head title="Welcome" />
        <h1 class="text-red-500">TEST aaaa 123</h1>
    </Layout>
</template>
