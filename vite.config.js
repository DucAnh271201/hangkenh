import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            // '~node_modules': '/node_modules',
            '~font': '/public/assets/fonts'
        },
    },
});
