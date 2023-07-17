/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
  ],
  darkMode: 'class',
  theme: {
    colors:{
      'batik' : '#ea580c',
      'almet' : '#1d4ed8',
    },
    container:{
      center: true,
      padding: "16px",
    },
    extend: {
      screens:{
        "2xl" : "1320px"
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("tw-elements/dist/plugin.cjs")
  ],
}