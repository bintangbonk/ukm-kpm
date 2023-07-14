/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    container:{
      center: true,
      padding: "16px",
    },
    extend: {
      color:{
        utama: "#ea580c",
      },
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