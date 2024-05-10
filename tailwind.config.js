/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: {"50":"#FFF2D7","100":"#FFF2D7","200":"#FFF2D7","300":"#FFE0B5","400":"#FFE0B5","500":"#FFE0B5","600":"#F8C794","700":"#F8C794","800":"#F8C794","900":"#D8AE7E","950":"#D8AE7E"}
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

// dbccab