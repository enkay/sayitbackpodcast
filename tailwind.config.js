module.exports = {
	purge: [
		'./resources/**/*.blade.php',
		'./resources/**/*.js',
		'./resources/**/*.vue',
	],
  darkMode: false, // or 'media' or 'class'
  theme: {
		fontFamily: {
			'sans': ['Open Sans', 'Helvetica', 'Roboto', 'Arial', 'sans-serif'],
		},
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
