# Bare Bones WordPress Theme with Grunt

Simple semi-blank starter WordPress theme with [Grunt](https://gruntjs.com/).  `Grunt.js` comes configured with [Sass](https://github.com/gruntjs/grunt-contrib-sass), [PostCSS](https://github.com/nDmitry/grunt-postcss), [Concat](https://github.com/gruntjs/grunt-contrib-concat), and [Babel](https://babeljs.io/).


## Instructions

Clone this repo into your local `wp-content/themes` folder.

Change directories to the `bare-bones` theme folder, then run `npm install`.

Then just run `grunt watch` and start coding.

### JS

Prefix your JS files with an underscore and save them in the `js/` folder (`_header.js` and `_footer.js` are already there as examples).  Concat will first combine all js files starting with an underscore to `js/app.js` and then Babel will compile down into `js/build/app.min.js`.  So make sure you don't direclty edit `js/app.js`.

### CSS/Sass

Save all your .scss files in `css/scss/`.