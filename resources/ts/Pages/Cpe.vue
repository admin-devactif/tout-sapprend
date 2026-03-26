<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

import Layout from "./Layout.vue";

const { t } = useI18n();
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.cpe')" />

        <h1>CPE et Milieux de Garde</h1>
    </Layout>
</template>
