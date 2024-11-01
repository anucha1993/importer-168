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
        outDir: 'public/build', // ตั้งค่า output directory ให้เป็น public/build
        manifest: true, // เปิดการใช้งาน manifest
        rollupOptions: {
            input: {
                app: 'resources/js/app.js', // ตั้งค่าไฟล์หลัก
            },
        },
    },
});
