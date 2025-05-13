import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
  optimizeDeps: {
    exclude: ['@huement/cosmicwave']
  },
  server: {
    host: '0.0.0.0',
    hmr: { host: 'debdock.local' },
    proxy: {
      '/0.0.0.0': 'http://debdock.local'
    }
  },
  resolve: {
    alias: {
      '~': path.resolve(__dirname, 'node_modules'),
      '~font': path.resolve(__dirname, 'resources/fonts'),
      '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
    }
  },
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/bs5.js',
        'resources/js/app.js'
      ],
      refresh: true
    })
  ]
})
