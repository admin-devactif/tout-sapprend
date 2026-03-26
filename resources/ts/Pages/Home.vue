<script setup lang="ts">
import { faFacebookF } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";
import Layout from "./Layout.vue";

const { t } = useI18n();
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.home')" />
        <h1 class="text-red-500">{{ t("welcome") }}</h1>
        <FontAwesomeIcon :icon="faFacebookF" />
    </Layout>
</template>
