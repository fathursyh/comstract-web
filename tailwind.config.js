/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      unguTipis: '#DFE2F2',
      ungu: '#7A75B4',
      hijau: '#00A858'
    },
    extend: {},
  },
  safelist: [
    '/^datatable-.*$/'
  ],
  plugins: [
      require('flowbite/plugin')({
        charts: true,
      })
  ],
}

