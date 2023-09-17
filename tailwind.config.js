/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    // Configurar el container para que siempre esté centrado
    container: {
        center: true,
    },
  },
  plugins: [],
}

