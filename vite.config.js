import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: 'ressources/js/app.js',
            refresh: true,
        }),
    ],
});
