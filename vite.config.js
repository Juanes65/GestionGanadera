import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/principal.css',
                'resources/css/imagenes.css',
                'resources/css/menus.css',
                'resources/css/LoginAndRegister.css'
            ],
            refresh: true,
        }),
    ],
});
