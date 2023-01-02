/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./public/**/*.{html,css,js}"],
  theme: {
    extend: {
      container: {
        center: true,
        margin: {
          default: "0",
        },
      },
      colors: {
        primary: "#FFF7F5",
        secondary: "#EB996E",
        third: "#FF725E",
        black: "#292930",
        tema: "rbga(var(--warna-tema) / <alpha-value>)",
      },
      padding: {
        standart: "1rem 1.5rem",
      },
      animation: {},
      keyframes: {
        goyang: {
          "0%, 100%": { transform: "rotate(-6deg)" },
          "50%": { transform: "rotate(6deg)" },
        },
      },
      fontFamily: {
        Jost: ["Jost", "sans-serif"],
        Monallesia: ["Monallesia", "sans-serif"],
        Montserrat: ["Montserrat", "sans-serif"],
      },
    },
  },
  plugins: [],
};
