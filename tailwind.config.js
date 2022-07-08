const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'theme-orange': '#fbf2e7',
                'theme-orange-100': '#ebc5a3',
                'theme-orange-200': '#e5b284',
                'theme-orange-300': '#e9a674',
                'theme-orange-400': '#e9a674',
                'theme-orange-500': '#db7945',
                'theme-brown': '#675d51',
                'theme-black': '#000',
            },
        },

    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
