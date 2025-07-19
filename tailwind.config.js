/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", 'index.html', "index.php"],
  theme: {
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    fontFamily: {
      poppins: "Poppins",
    },
    extend: {
      colors: {
        'primary': '#ec6230',
        'primary-hover': '#e63d00',
      }
    },
  },
  plugins: [],
}