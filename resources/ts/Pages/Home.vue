<script setup lang="ts">
import { Head } from "@inertiajs/vue3";

import handsHome from "../assets/home/hands-home.jpg";
import Layout from "./Layout.vue";

</script>

<template>
    <Layout>
        <Head title="Tout s'apprend - Accueil" />
        <section class="relative pb-10 pt-4 lg:pb-20">
            <div class="relative max-w-[1500px]">
                <img
                    :src="handsHome"
                    alt="Des mains posées les unes sur les autres"
                    class="h-[320px] w-full max-w-[720px] object-cover shadow-[0_14px_40px_rgba(90,67,56,0.08)] sm:h-[420px] lg:h-[500px] lg:w-[720px]" />

                <div
                    class="relative z-10 mt-6 bg-[#fbf3e4] px-8 py-10 text-center shadow-[0_18px_48px_rgba(90,67,56,0.08)] sm:px-12 lg:-mt-[235px] lg:ml-[560px] lg:w-[930px] lg:px-16 lg:py-12">
                    <p
                        class="text-2xl font-light italic leading-[1.5] text-[var(--brand-ink)] sm:text-3xl lg:text-[3rem]">
                        « Tous les enfants ont du génie, le tout est de le faire
                        apparaître »
                    </p>

                    <p
                        class="mt-5 text-right text-xl font-light italic text-[var(--brand-ink)] sm:text-2xl">
                        -Charlie Chaplin
                    </p>

                    <p
                        class="mx-auto mt-10 max-w-[760px] text-left text-lg font-light italic leading-[1.8] text-[color:rgba(103,84,74,0.92)] sm:text-xl">
                        L'équipe d'intervenants s'engage avec bienveillance à
                        répondre aux besoins spécifiques de chaque enfant.
                        Animés par la conviction que chacun porte en lui un
                        potentiel unique, ils adaptent leurs actions pour le
                        faire émerger. Leur mission est de créer les conditions
                        favorables à l'épanouissement de chacun.
                    </p>
                </div>
            </div>
        </section>
    </Layout>
</template>
