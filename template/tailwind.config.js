/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.php",
    "./src/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
};
