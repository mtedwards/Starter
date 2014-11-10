module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded',
      sourcemap: true
    },
    files: {
      'css/style.css': 'scss/style.scss'
    }
  }
}
