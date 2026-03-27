<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";
import TeamShowcase from "../Components/TeamShowcase.vue";
import Layout from "./Layout.vue";

const { t } = useI18n();
</script>

<template>
    <Layout>
        <Head :title="t('page_titles.home')" />
        <section class="space-y-6 py-8">
            <TeamShowcase />
        </section>
    </Layout>
</template>
