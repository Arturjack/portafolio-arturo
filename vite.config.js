import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: 'portafolio-arturo.cdmx.gob.mx',
        port: 5173,
        https: false,
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/scss/app.scss', 'resources/scss/reconocimiento.scss'
        ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
