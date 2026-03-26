<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

import Layout from "./Layout.vue";

const { t } = useI18n({ useScope: "global" });
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.contact')" />

        <h1>Nous Joindre</h1>
    </Layout>
</template>
