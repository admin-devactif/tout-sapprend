<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

import Layout from "./Layout.vue";

const { t } = useI18n();
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.intervention')" />

        <h1>Intervention Éducative</h1>
    </Layout>
</template>
