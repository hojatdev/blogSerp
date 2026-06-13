/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    '!./node_modules/**',
  ],
  theme: {
    extend: {
      fontFamily: { sans: ['Inter', 'sans-serif'] },
      boxShadow: { soft: '0 18px 50px -28px rgba(15, 23, 42, 0.35)' },
    },
  },
  plugins: [],
};
