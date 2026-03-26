<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import Layout from "./Layout.vue";
import { useI18n } from "vue-i18n";

const { t } = useI18n();
</script>

<template>
    <Layout>
        <Head title="Welcome" />
        <h1 class="text-red-500">{{ t("welcome") }}</h1>
    </Layout>
</template>
