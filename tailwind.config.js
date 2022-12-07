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
          'phone':            {'max': '599px'},
          'tablet':           {'min': '600px'},
          'tablet-landscape': {'min': '900px'},
          'notebook':         {'min': '1200px'},
          'desktop':          {'min': '1800px'},
      }
  },
  plugins: [],
}
