/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        // Permitir un grid de 16 columnas
        gridTemplateColumns: {
            // Simple 16 column grid
            '16': 'repeat(16, minmax(0, 1fr))',

            // Complex site-specific column configuration
            'footer': '200px minmax(900px, 1fr) 100px',
        }
    },
    // Configurar el container para que siempre esté centrado
    container: {
        center: true,
    },
  },
  plugins: [],
}

