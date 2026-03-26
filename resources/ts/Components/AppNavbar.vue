<script setup lang="ts">
import { faBars, faEnvelope, faPhone } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

import logo from "../../assets/shared/LOGO_toutsapprend.png";

type NavigationLink = {
    href: string;
    label: string;
};

const primaryLinks: NavigationLink[] = [
    { href: "/", label: "ACCUEIL" },
    { href: "/orthopedagogie", label: "ORTHOPÉDAGOGIE" },
    { href: "/intervention", label: "INTERVENTION ÉDUCATIVE" },
    { href: "/stimulation", label: "STIMULATION DU LANGAGE" },
    { href: "/cpe", label: "CPE ET MILIEUX DE GARDE" }
];

const secondaryLinks: NavigationLink[] = [
    { href: "/contact", label: "NOUS JOINDRE" },
    { href: "/appointment", label: "PRENDRE RENDEZ-VOUS" }
];

const isMobileMenuOpen = ref(false);
</script>

<template>
    <div class="navbar bg-base-100 shadow">
        <div class="container mx-auto block">
            <div class="navbar justify-between lg:hidden">
                <Link href="/" class="btn btn-ghost normal-case">
                    <img :src="logo" alt="Tout s'apprend" class="h-12 w-12 rounded-full" />
                    <span>Tout s'apprend</span>
                </Link>

                <button
                    type="button"
                    class="btn btn-circle btn-ghost"
                    aria-label="Ouvrir le menu"
                    @click="isMobileMenuOpen = !isMobileMenuOpen">
                    <FontAwesomeIcon :icon="faBars" />
                </button>
            </div>

            <div class="navbar hidden lg:flex">
                <div class="navbar-start">
                    <Link href="/" class="shrink-0">
                        <img :src="logo" alt="Tout s'apprend" class="h-16 w-16 rounded-full" />
                    </Link>
                </div>

                <div class="navbar-center flex-1">
                    <div class="w-full">
                        <ul class="menu menu-horizontal w-full justify-center gap-2">
                            <li v-for="link in primaryLinks" :key="link.label">
                                <Link :href="link.href" class="btn btn-outline">
                                    {{ link.label }}
                                </Link>
                            </li>
                        </ul>

                        <ul class="menu menu-horizontal mt-2 w-full justify-center gap-2">
                            <li v-for="link in secondaryLinks" :key="link.label">
                                <Link :href="link.href" class="btn btn-outline">
                                    {{ link.label }}
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div v-if="isMobileMenuOpen" class="pb-4 lg:hidden">
                <div class="card bg-base-100 shadow">
                    <div class="card-body">
                        <ul class="menu gap-2">
                            <li
                                v-for="link in [...primaryLinks, ...secondaryLinks]"
                                :key="`mobile-${link.label}`">
                                <Link :href="link.href" class="btn btn-outline" @click="isMobileMenuOpen = false">
                                    {{ link.label }}
                                </Link>
                            </li>
                        </ul>

                        <div class="flex flex-col gap-2">
                            <a href="mailto:info@serviceseducatifs.ca" class="link link-hover inline-flex items-center gap-2">
                                <FontAwesomeIcon :icon="faEnvelope" />
                                <span>info@serviceseducatifs.ca</span>
                            </a>
                            <a href="tel:4508814432" class="link link-hover inline-flex items-center gap-2">
                                <FontAwesomeIcon :icon="faPhone" />
                                <span>450-881-4432</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
