import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js', 
                'resources/js/ph-address-selector.js',
                'resources/js/sample.js',
                'resources/js/form.js',
                'resources/js/Enrollment_ValidationP1.js',
            ],
            refresh: true,
        }),
    ],
});
