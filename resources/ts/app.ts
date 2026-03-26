import { createInertiaApp } from "@inertiajs/vue3";
import { createApp, h } from "vue";
import { createI18n } from "vue-i18n";

import fr from "../js/lang/fr.json";
import en from "../js/lang/en.json";

const i18n = createI18n({
    locale: "fr",
    fallbackLocale: "en",
    messages: {
        fr,
        en
    }
});

void createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18n)
            .mount(el);
    }
});
