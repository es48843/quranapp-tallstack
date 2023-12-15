import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              'gray-750': '#28323E',
              'primary': '#52AE69',
              'primary-soft': '#DCF3ED',
              'bg-light': '#ECF0F3',
              'secondary': '#EAC075',
            },
            transitionProperty: {
                width: "width",
            }
        },
    },

    plugins: [
        require('flowbite/plugin'),
        forms
    ],
    darkMode: 'class',
};
