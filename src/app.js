import React from 'react';
import { createRoot } from 'react-dom/client'
import { createInertiaApp } from '@inertiajs/inertia-react';

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        const root = createRoot(el);
        root.render(<App {...props} />)
    },
});