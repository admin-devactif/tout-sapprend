<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

import Layout from "./Layout.vue";

const { t } = useI18n({ useScope: "global" });
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.appointment')" />

        <h1>Prendre Rendez-vous</h1>
    </Layout>
</template>
