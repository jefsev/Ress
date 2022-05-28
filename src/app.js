import React from 'react';
import ReactDOM from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/inertia-react';

const root = ReactDOM.createRoot(document.getElementById('app'));

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ App, props }) {
       root.render(<App {...props} />)
    },
});