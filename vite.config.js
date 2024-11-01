import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~': '/node_modules'
        }
    },
    build: {
        outDir: 'public/build', // กำหนด output ไปที่ public/build
        manifest: true,
    },
});
