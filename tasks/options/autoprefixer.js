module.exports = {
  options: {
    browsers: ['last 2 version', '> 5%', 'ie 8', 'ie 9']
  },
  multiple_files: {
    expand: true,
    flatten: true,
    src: 'css/style.css',
    dest: 'css/prefixed/'
  }
}