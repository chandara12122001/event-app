module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      backgroundImage: {
        // 'hero': "url('https://traconference.eu/wp-content/uploads/2021/08/pexels-luis-quintero-2833037-scaled-e1629113060469.jpg')",
        'hero': "url('/public/storage/hero.png')",
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
