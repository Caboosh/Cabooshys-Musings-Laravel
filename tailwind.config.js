import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
			xl: { max: "1279px" },
			// => @media (max-width: 1279px) { ... }

			lg: { max: "1023px" },
			// => @media (max-width: 1023px) { ... }

			md: { max: "767px" },
			// => @media (max-width: 767px) { ... }

			sm: { max: "639px" },
			// => @media (max-width: 639px) { ... }
		},
        hljs: {
            custom: {
                base: {
                    background: '#1F2937',
                    color: '#D1D5DB'
                },
                meta: {
                   meta: {
                        color: '#8B5CF6'
                   } 
                },
                general: {
                    comment: {
                        color: '#6B7280',
                        fontStyle: 'italic'
                    },
                    string: {
                        color: '#A78BFA'
                    },
                    number: {
                        color: '#EC4899'
                    }
                }
            }
        },
    },
    safelist: [
        'ring-primary-500',
        {
        pattern: /hljs+/,
        }
    ],
    plugins: [
        require('tailwind-highlightjs'),
    ],
};
