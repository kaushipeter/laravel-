import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', 'serif'], // Added for luxury feel
            },
            colors: {
                gold: {
                    DEFAULT: '#D4AF37',
                    50: '#FBF7E6',
                    100: '#F7EFCD',
                    200: '#EFDF9B',
                    300: '#E7CF69',
                    400: '#DFC037',
                    500: '#D4AF37', // Base Gold
                    600: '#AA8C2C',
                    700: '#806921',
                    800: '#554616',
                    900: '#2B230B',
                },
                charcoal: {
                    DEFAULT: '#36454F',
                    900: '#1A1A1A', // Deep Charcoal
                },
                'soft-white': '#FAFAFA',
            },
        },
    },

    plugins: [forms],
};
