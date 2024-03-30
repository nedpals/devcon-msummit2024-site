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
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.white'),
            a: {
              color: theme('colors.blue.400'),
              '&:hover': {
                color: theme('colors.blue.600'),
              },
            },
            h1: {
                color: theme('colors.white'),
            },
            h2: {
                color: theme('colors.white'),
            },
            h3: {
                color: theme('colors.white'),
            },
            h4: {
                color: theme('colors.white'),
            },
            strong: {
                color: theme('colors.white'),
            }
          }
        }
      })
    },
  },
  corePlugins: {
    container: false
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}