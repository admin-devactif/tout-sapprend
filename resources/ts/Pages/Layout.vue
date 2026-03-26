<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

import headerBackground from "../assets/shared/header-background.jpg";
import logo from "../assets/shared/LOGO_toutsapprend.png";

type NavigationLink = {
    label: string;
    href: string;
};

type SocialLink = NavigationLink & {
    iconClass: string;
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

const socialLinks: SocialLink[] = [
    {
        href: "https://www.facebook.com/toutsapprend.serviceseducatifs",
        label: "Facebook",
        iconClass: "fa-brands fa-facebook-f"
    },
    {
        href: "https://www.instagram.com/tout.sapprend/",
        label: "Instagram",
        iconClass: "fa-brands fa-instagram"
    },
    {
        href: "https://www.linkedin.com/company/tout-sapprend/",
        label: "LinkedIn",
        iconClass: "fa-brands fa-linkedin-in"
    }
];
</script>

<template>
    <main class="min-h-screen bg-white text-[var(--brand-ink)]">
        <header
            class="sticky top-0 z-50 overflow-hidden border-b border-[var(--brand-outline-soft)] bg-white">
            <div
                class="relative mx-auto max-w-[1600px] px-4 py-2 sm:px-6 lg:px-10">
                <div class="relative">
                    <div
                        class="header-surface absolute inset-0"
                        :style="{
                            backgroundImage: `url(${headerBackground})`
                        }"></div>

                    <div
                        class="relative flex w-full items-center justify-between gap-3 lg:hidden">
                        <Link
                            href="/"
                            class="flex max-w-[118px] shrink-0 sm:max-w-[132px]"
                            @click="isMobileMenuOpen = false">
                            <img
                                :src="logo"
                                alt="Tout s'apprend"
                                class="h-auto w-full bg-transparent" />
                        </Link>

                        <button
                            type="button"
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border border-[var(--brand-outline)] bg-white/70 text-[var(--brand-accent)] shadow-[0_8px_24px_rgba(188,124,96,0.08)] transition-colors duration-200 hover:bg-[rgba(245,116,84,0.12)]"
                            :aria-expanded="isMobileMenuOpen"
                            aria-label="Ouvrir le menu"
                            @click="isMobileMenuOpen = !isMobileMenuOpen">
                            <span class="flex flex-col gap-1.5">
                                <span
                                    class="block h-[1.5px] w-5 bg-current"></span>
                                <span
                                    class="block h-[1.5px] w-5 bg-current"></span>
                                <span
                                    class="block h-[1.5px] w-5 bg-current"></span>
                            </span>
                        </button>
                    </div>

                    <div
                        class="relative hidden lg:flex lg:items-center lg:gap-5">
                        <Link href="/" class="lg:w-[165px] lg:flex-none">
                            <img
                                :src="logo"
                                alt="Tout s'apprend"
                                class="h-auto w-full bg-transparent" />
                        </Link>

                        <div class="flex-1">
                            <nav
                                class="flex flex-wrap items-center justify-center gap-2.5 lg:flex-nowrap lg:justify-start">
                                <component
                                    v-for="link in primaryLinks"
                                    :key="link.label"
                                    :is="link.href ? Link : 'span'"
                                    :href="link.href"
                                    class="header-pill flex h-[3rem] min-w-[18rem] items-center justify-center px-4 py-2 text-center text-[0.92rem] font-light tracking-[0.1em] text-[var(--brand-accent)] transition duration-200 sm:text-[0.95rem] lg:min-w-0 lg:flex-1 lg:px-3 lg:text-[0.88rem] xl:px-4 xl:text-[0.92rem]"
                                    :class="{
                                        'cursor-default opacity-75': !link.href
                                    }">
                                    <span class="line-clamp-2">
                                        {{ link.label }}
                                    </span>
                                </component>
                            </nav>

                            <div class="mt-2 grid gap-2 lg:grid-cols-2">
                                <component
                                    v-for="link in secondaryLinks"
                                    :key="link.label"
                                    :is="link.href ? Link : 'span'"
                                    :href="link.href"
                                    class="header-pill flex h-[3rem] items-center justify-center px-6 py-2 text-center text-[0.92rem] font-light tracking-[0.1em] text-[var(--brand-accent)] transition duration-200 sm:text-[0.95rem]"
                                    :class="{
                                        'cursor-default opacity-75': !link.href
                                    }">
                                    {{ link.label }}
                                </component>
                            </div>
                        </div>
                    </div>
                </div>

                <Transition
                    enter-active-class="transition duration-500 ease-in-out"
                    enter-from-class="-translate-y-2 opacity-0"
                    enter-to-class="translate-y-0 opacity-100"
                    leave-active-class="transition duration-220 ease-in-out"
                    leave-from-class="translate-y-0 opacity-100"
                    leave-to-class="-translate-y-1 opacity-0">
                    <div
                        v-if="isMobileMenuOpen"
                        class="mt-3 rounded-[1.75rem] border border-[var(--brand-outline-soft)] bg-white/90 p-4 shadow-[0_14px_32px_rgba(188,124,96,0.08)] backdrop-blur-sm lg:hidden">
                        <nav class="grid gap-2">
                            <component
                                v-for="link in primaryLinks"
                                :key="`mobile-${link.label}`"
                                :is="link.href ? Link : 'span'"
                                :href="link.href"
                                class="header-pill flex min-h-[2.9rem] items-center justify-center px-4 py-2 text-center text-[0.92rem] font-light tracking-[0.1em] text-[var(--brand-accent)] transition-colors duration-200"
                                :class="{
                                    'cursor-default opacity-75': !link.href
                                }"
                                @click="
                                    link.href
                                        ? (isMobileMenuOpen = false)
                                        : undefined
                                ">
                                {{ link.label }}
                            </component>
                        </nav>

                        <div class="mt-2 grid gap-2">
                            <component
                                v-for="link in secondaryLinks"
                                :key="`mobile-secondary-${link.label}`"
                                :is="link.href ? Link : 'span'"
                                :href="link.href"
                                class="header-pill flex min-h-[2.9rem] items-center justify-center px-4 py-2 text-center text-[0.92rem] font-light tracking-[0.1em] text-[var(--brand-accent)] transition-colors duration-200"
                                :class="{
                                    'cursor-default opacity-75': !link.href
                                }"
                                @click="
                                    link.href
                                        ? (isMobileMenuOpen = false)
                                        : undefined
                                ">
                                {{ link.label }}
                            </component>
                        </div>
                    </div>
                </Transition>
            </div>
        </header>

        <article
            class="mx-auto w-full max-w-[1440px] px-4 py-10 sm:px-6 lg:px-10 lg:py-16">
            <slot />
        </article>

        <footer class="border-t border-[rgba(103,84,74,0.08)] bg-[#eef7f7]">
            <div
                class="mx-auto flex max-w-[1440px] flex-col items-center px-4 py-8 text-center sm:px-6 lg:px-10">
                <div class="flex items-center gap-4">
                    <a
                        v-for="link in socialLinks"
                        :key="link.label"
                        :href="link.href"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-[var(--brand-ink)] transition hover:text-[var(--brand-accent)]"
                        :aria-label="link.label">
                        <i :class="[link.iconClass, 'text-[1.5rem]']" aria-hidden="true"></i>
                    </a>
                </div>

                <p
                    class="mt-4 text-[1.05rem] font-medium italic tracking-[0.03em] text-[var(--brand-ink)]">
                    Politique de confidentialité
                </p>

                <div
                    class="mt-3 space-y-1 text-sm text-[color:rgba(103,84,74,0.88)] sm:text-base">
                    <p>&copy; 2026 par ...</p>
                    <p>
                        <a
                            href="mailto:info@serviceseducatifs.ca"
                            class="transition hover:text-[var(--brand-accent)]">
                            info@serviceseducatifs.ca
                        </a>
                    </p>
                    <p>
                        <a
                            href="tel:4508814432"
                            class="transition hover:text-[var(--brand-accent)]">
                            450-881-4432
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </main>
</template>
