import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                modernist: ['SKModernist', ...defaultTheme.fontFamily.sans],
            },
            tracking: {
                'tighter': '-0.005em',
            },
            fontSize: {
                'sm': [
                    '1rem',
                    { lineHeight: '1.5' }
                ],
                'base': [
                    '1.125rem',
                    { lineHeight: '1.5' }
                ],
                'md': [
                    '1.25rem',
                    { lineHeight: '1.3' }
                ],
                'lg': [
                    '1.5rem',
                    { lineHeight: '1.4' }
                ],
                'xl': [
                    '1.75rem',
                    { lineHeight: '1.3' }
                ],
                '2xl': [
                    '2.75rem',
                    { lineHeight: '1.1' }
                ],
                '3xl': [
                    '5.5rem',
                    { lineHeight: '1.1' }
                ],

                // mobile
                'base-sm': [
                    '1rem',
                    { lineHeight: '1.5' }
                ],
                'md-sm': [
                    '1rem',
                    { lineHeight: '1.3' }
                ],
                'lg-sm': [
                    '1.125rem',
                    { lineHeight: '1.4' }
                ],
                'xl-sm': [
                    '1.25rem',
                    { lineHeight: '1.3' }
                ],
                '2xl-sm': [
                    '1.625rem',
                    { lineHeight: '1.1' }
                ],
                '3xl-sm': [
                    '2.5rem',
                    { lineHeight: '1.1' }
                ],
            },

            screens: {
                'xl': '1576px',
                'lg': '1440px',
                'md': '1280px',
                'smd': '960px',
                'sm': '768px',
                'xs': '480px',
                'xxs': '360px',
            },
        },
    },
    plugins: [],
};
