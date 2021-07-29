const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        backgroundImage: theme => ({
            'headerImage': "url('/storage/images/desktop/background-header.png')",
            'empty-image': "url('/storage/images/desktop/illustration-empty.svg')",
          }),
        backgroundColor: theme => ({
            ...theme('colors'),
                'feedbackButton': '#AD1FEA',
                'topBar': '#373F68',
            })
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
