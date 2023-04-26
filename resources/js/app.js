import './bootstrap';
import '../css/app.css';
import '../css/style.css';
import '../css/transitions.css';

import '../scss/app.scss';
import * as bootstrap from 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';

import.meta.glob([
    '../images/**',
]);

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Directives from '@/Directives';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Directives)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
