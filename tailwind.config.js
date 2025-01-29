/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{php,js}", "index.html"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
