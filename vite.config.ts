import { defineConfig } from 'vite'
import { v4wp } from '@kucrut/vite-for-wp'
import { wp_scripts } from "@kucrut/vite-for-wp/plugins";

export default defineConfig({
    plugins: [
        v4wp({
            input: 'resources/js/main.ts',
            outDir: 'resources/dist'
        }),
        wp_scripts(),
    ]
})