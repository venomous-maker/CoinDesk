import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';
import '../css/app.css';
import './bootstrap';

import { createApp } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { getImportedAsset } from './utils/assets';
import { Ziggy } from './ziggy';

window.getImportedAsset = getImportedAsset;

const app = createApp({});

// Dynamically import all components from the components folder
const components = import.meta.glob('./Components/**/*.vue', {
    eager: true,
}) as Record<string, { default: any }>;
// console.log(Object.keys(components).length);
Object.keys(components).forEach((fileName) => {
    const componentName = fileName
        .split('/')
        .pop()
        ?.replace(/\.\w+$/, ''); // Get the component name without file extension

    if (componentName) {
        // Optionally, extract folder name if needed
        const folderName = fileName.split('/').slice(-2, -1)[0];
        // console.log(`${folderName} - ${fileName}`);
        // Register the component globally
        app.component(componentName, components[fileName].default);
    }
});

// // Mount the app
app.use(ZiggyVue, Ziggy).mount('#app');
