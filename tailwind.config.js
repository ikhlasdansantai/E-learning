/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./**/*.{html,css,js,php}"],
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
      gridTemplateColumns: {
        // Simple 16 column grid
        16: "repeat(16, minmax(0, 1fr))",
        sidebar: "15rem, 100%",
        // Complex site-specific column configuration
        footer: "200px minmax(900px, 1fr) 100px",
      },
    },
  },
  plugins: [],
};
