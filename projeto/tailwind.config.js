module.exports = {
  content: [
    'resources/views/*.*',
    'resources/views/*/*.*',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
