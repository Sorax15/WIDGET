/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
      fontFamily: {

      },
      screens: {
          'sm': '576px',
          // => @media (min-width: 576px)
          'md': '960px',
          // => @media (min-width: 960px)
          'lg': '1440px',
          // => @media (min-width: 1440px)
          'xl': '1920px',
          // => @media (min-width: 1920px)
      }
  },
  plugins: [],
}
