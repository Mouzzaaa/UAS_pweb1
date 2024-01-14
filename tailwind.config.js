/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#5B7065",
        secondary: "#04202C",
        tertiary: "#304040",
      },
      fontFamily: {
        fontPrimary: "'Mochiy Pop P One', sans-serif;",
      },
    },
  },
  plugins: [],
};
