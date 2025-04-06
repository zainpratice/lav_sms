const mix = require('laravel-mix');
const path = require('path'); // ✅ Add this line

// Vue 3 specific configuration
mix.js('resources/js/app.js', 'public/js')
   .vue({
       version: 3,
       runtimeOnly: false, // Enable template compilation
       extractStyles: true // Extract CSS from components
   })
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
       resolve: {
           alias: {
               vue$: 'vue/dist/vue.esm-bundler.js', // Required for Vue 3
               '@': path.resolve('resources/js') // Optional but recommended
           }
       },
       stats: {
           children: true // Show all warnings
       }
   })
   .version(); // Enable cache busting
