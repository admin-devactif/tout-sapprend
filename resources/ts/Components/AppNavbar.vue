<script setup lang="ts">
import { faBars, faEnvelope, faPhone } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Link } from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

import headerBackground from "../../assets/header/header-background.jpg";
import logo from "../../assets/shared/LOGO_toutsapprend.png";

type NavigationLink = {
    href: string;
    label: string;
};

const { t } = useI18n();

const links: NavigationLink[] = [
    { href: "/", label: t("navigation.home") },
    { href: "/orthopedagogie", label: t("navigation.orthopedagogie") },
    { href: "/intervention", label: t("navigation.intervention") },
    { href: "/stimulation", label: t("navigation.stimulation") },
    { href: "/cpe", label: t("navigation.cpe") },
    { href: "/contact", label: t("navigation.contact") },
    { href: "/appointment", label: t("navigation.appointment") }
];
</script>

<template>
    <div class="border-b border-orange-100 bg-white">
        <div class="relative overflow-visible">
            <div
                class="absolute inset-0 bg-cover bg-center opacity-80"
                :style="{ backgroundImage: `url(${headerBackground})` }"></div>
            <div class="absolute inset-0 bg-white/45"></div>

            <div class="relative mx-auto px-2 py-1 sm:px-4 lg:px-6">
                <div class="navbar justify-between px-0 min-[1833px]:hidden">
                    <Link
                        href="/"
                        class="btn btn-ghost border-0 h-auto gap-3 px-0 normal-case bg-transparent shadow-none">
                        <img
                            :src="logo"
                            alt="Tout s'apprend"
                            class="size-20 rounded-full p-1" />
                    </Link>

                    <div class="dropdown dropdown-end">
                        <div
                            tabindex="0"
                            role="button"
                            class="btn btn-circle btn-outline border-orange-300 bg-white/80 text-orange-400 shadow-sm hover:bg-orange-50">
                            <FontAwesomeIcon :icon="faBars" class="text-lg" />
                        </div>

                        <div
                            tabindex="0"
                            class="dropdown-content right-0 z-50 mt-3 w-80 max-w-[calc(100vw-1rem)] rounded-3xl border border-orange-100 bg-white/95 p-4 shadow-lg backdrop-blur-sm">
                            <ul
                                class="menu w-full items-center gap-3 rounded-box bg-transparent p-0">
                                <li
                                    v-for="(link, index) in links"
                                    :key="index"
                                    class="flex w-full justify-center">
                                    <Link
                                        :href="link.href"
                                        class="btn btn-outline min-h-12 w-full justify-center rounded-full border-orange-300 bg-white px-4 py-3 text-center text-base uppercase tracking-wide text-orange-400 shadow-none hover:bg-orange-50">
                                        {{ link.label }}
                                    </Link>
                                </li>
                            </ul>

                            <div
                                class="mt-4 flex flex-col items-center gap-2 text-sm text-stone-500">
                                <a
                                    href="mailto:info@serviceseducatifs.ca"
                                    class="link link-hover inline-flex items-center gap-2 no-underline hover:text-orange-400">
                                    <FontAwesomeIcon :icon="faEnvelope" />
                                    <span>info@serviceseducatifs.ca</span>
                                </a>
                                <a
                                    href="tel:4508814432"
                                    class="link link-hover inline-flex items-center gap-2 no-underline hover:text-orange-400">
                                    <FontAwesomeIcon :icon="faPhone" />
                                    <span>450-881-4432</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden grid-cols-3 items-center gap-4 py-1 min-[1833px]:grid">
                    <div class="flex justify-start">
                        <Link href="/" class="flex-none">
                            <img
                                :src="logo"
                                alt="Tout s'apprend"
                                class="size-28 rounded-full p-1" />
                        </Link>
                    </div>

                    <div class="flex justify-center">
                        <ul
                            class="menu menu-horizontal flex-nowrap items-center justify-center gap-2 bg-transparent p-0">
                            <li v-for="(link, index) in links" :key="index">
                                <Link
                                    :href="link.href"
                                    class="btn btn-outline min-h-10 rounded-full border-orange-300 bg-white/70 px-3 py-2 text-center text-sm uppercase font-bold tracking-wide text-orange-400 shadow-none hover:bg-orange-50">
                                    <span class="leading-tight whitespace-nowrap">
                                        {{ link.label }}
                                    </span>
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col items-end justify-center gap-2 text-md text-stone-500">
                        <a
                            href="mailto:info@serviceseducatifs.ca"
                            class="link link-hover inline-flex items-center justify-end gap-2 no-underline hover:text-orange-400">
                            <FontAwesomeIcon :icon="faEnvelope" />
                            <span>info@serviceseducatifs.ca</span>
                        </a>
                        <a
                            href="tel:4508814432"
                            class="link link-hover inline-flex items-center justify-end gap-2 no-underline hover:text-orange-400">
                            <FontAwesomeIcon :icon="faPhone" />
                            <span>450-881-4432</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
