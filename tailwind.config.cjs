import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./src/**/*.{js,ts,jsx,tsx}",
    "./*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.{php,html}",
    "./templates/**/*.{php,html}",
    "./parts/**/*.{php,html}"
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Sora"', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  corePlugins: {
    container: false
  },
  plugins: [],
}