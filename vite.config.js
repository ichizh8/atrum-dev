import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: parseInt(process.env.VITE_PORT) || 5101,
        hmr: {
            host: process.env.VITE_HOST || 'localhost',
        },
        cors: {
            // origin: process.env.VITE_APP_URL || 'http://localhost',
            origin: '*',
            credentials: true
        }
    },
});