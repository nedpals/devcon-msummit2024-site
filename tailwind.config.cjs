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
              color: 'rgb(113, 180, 6)',
              '&:hover': {
                color: 'rgb(113, 180, 6)',
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
            },
            blockquote: {
                color: theme('colors.white'),
                paddingInlineStart: 0,
                borderRadius: theme('borderRadius.lg'),
                margin: 0,
                padding: theme('spacing.3') + ' ' + theme('spacing.6'),
                background: 'rgba(255, 255, 255, 0.04)',
                border: 0,
                position: 'relative',
                fontStyle: 'normal',
                '&:before': {
                    content: '""',
                    position: 'absolute',
                    inset: 0,
                    padding: '2px',
                    borderRadius: theme('borderRadius.lg'),
                    background: 'linear-gradient(to bottom, rgb(255,221,0), rgba(113, 180, 6, 0.78) 22.5%, rgba(113, 180, 6, 0))',
                    mask: 'linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0)',
                    maskComposite: 'exclude',
                    '-webkit-mask': 'linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0)',
                    '-webkit-mask-composite': 'xor',
                },
                '&:after': {
                    content: '""',
                    position: 'absolute',
                    inset: 0,
                    width: '100%',
                    height: '100%',
                    backgroundRepeat: 'no-repeat',
                    backgroundPosition: '2% 0%',
                    backgroundImage: 'url(../assets/gridicons_quote.png)',
                },
            }
          }
        },
        lg: {
            css: {
                blockquote: {
                    paddingInlineStart: 0,
                    padding: theme('spacing.6') + ' ' + theme('spacing.12'),
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