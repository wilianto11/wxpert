import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            protocol: "ws", // Menggunakan WebSocket jika HMR tidak berjalan dengan baik
            host: "localhost",
        },
    },
});
