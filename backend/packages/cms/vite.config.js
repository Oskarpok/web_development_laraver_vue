import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import dotenv from 'dotenv';
import { resolve } from 'path';

dotenv.config({ path: resolve('/docker/.env') });

export default defineConfig({
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    origin: 'http://localhost:5173',
    cors: true,
  },
  build: {
    outDir: `../../html/${process.env.PROJECT}/public/build`,
    manifest: true,
    emptyOutDir: true,
  },
  plugins: [
    laravel({
      input: ['resources/css/cms.css', 'resources/js/cms.js'],
      publicDirectory: `../../html/${process.env.PROJECT}/public`,
      refresh: true,
    }),
    tailwindcss(),
  ],
});