const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './storage/framework/views/*.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
        screen: {
            'tablet': '640px',
            'laptop': '1024px',
            'desktop': '1280px',
        }
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/ui')],
}
