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

const primaryLinks: NavigationLink[] = [
    { href: "/", label: t("navigation.home") },
    { href: "/orthopedagogie", label: t("navigation.orthopedagogie") },
    { href: "/intervention", label: t("navigation.intervention") },
    { href: "/stimulation", label: t("navigation.stimulation") },
    { href: "/cpe", label: t("navigation.cpe") }
];

const secondaryLinks: NavigationLink[] = [
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

            <div class="relative mx-auto max-w-7xl px-2 py-1 sm:px-4 lg:px-6">
                <div class="navbar justify-between px-0 lg:hidden">
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
                                    v-for="(link, index) in [
                                        ...primaryLinks,
                                        ...secondaryLinks
                                    ]"
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

                <div class="hidden items-center gap-6 py-1 lg:flex">
                    <Link href="/" class="flex-none">
                        <img
                            :src="logo"
                            alt="Tout s'apprend"
                            class="size-28 rounded-full p-1" />
                    </Link>

                    <div class="flex-1">
                        <div
                            class="menu menu-horizontal w-full gap-3 bg-transparent p-0">
                            <div
                                v-for="(link, index) in primaryLinks"
                                :key="index"
                                class="flex flex-1">
                                <Link
                                    :href="link.href"
                                    class="btn btn-outline min-h-12 w-full rounded-full border-orange-300 bg-white/70 px-4 py-3 text-center text-md uppercase font-bold tracking-widest text-orange-400 shadow-none hover:bg-orange-50">
                                    <span
                                        class="leading-tight whitespace-normal">
                                        {{ link.label }}
                                    </span>
                                </Link>
                            </div>
                        </div>

                        <div
                            class="menu menu-horizontal mt-3 w-full gap-3 bg-transparent p-0">
                            <div
                                v-for="(link, index) in secondaryLinks"
                                :key="index"
                                class="flex flex-1">
                                <Link
                                    :href="link.href"
                                    class="btn btn-outline min-h-12 w-full rounded-full border-orange-300 bg-white/70 px-4 py-3 text-center text-md uppercase font-bold tracking-widest text-orange-400 shadow-none hover:bg-orange-50">
                                    <span
                                        class="leading-tight whitespace-normal">
                                        {{ link.label }}
                                    </span>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
