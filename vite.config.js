import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  base: '/at-group/',
  plugins: [vue()],
  server: {
    host: true,
    port: 3000,
  },
});

