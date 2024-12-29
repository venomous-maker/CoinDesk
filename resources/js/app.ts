import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { getImportedAsset } from './utils/assets';

window.getImportedAsset = getImportedAsset;
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const app = createApp({});

// Dynamically import all components from the components folder
const components = import.meta.glob('./Components/**/*.vue', {
    eager: true,
}) as Record<string, { default: any }>;
console.log(Object.keys(components).length);
Object.keys(components).forEach((fileName) => {
    const componentName = fileName
        .split('/')
        .pop()
        ?.replace(/\.\w+$/, ''); // Get the component name without file extension

    if (componentName) {
        // Optionally, extract folder name if needed
        const folderName = fileName.split('/').slice(-2, -1)[0];
        console.log(`${folderName} - ${componentName}`);
        // Register the component globally
        app.component(componentName, components[fileName].default);
    }
});

// Mount the app
app.mount('#app');
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) }).use(plugin);

        app.use(ZiggyVue).mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
