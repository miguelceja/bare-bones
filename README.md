# Bare Bones WordPress Theme with Grunt

Simple semi-blank starter WordPress theme with [Grunt](https://gruntjs.com/).  `Grunt.js` comes configured with [Sass](https://github.com/gruntjs/grunt-contrib-sass), [PostCSS](https://github.com/nDmitry/grunt-postcss), [Concat](https://github.com/gruntjs/grunt-contrib-concat), and [Babel](https://babeljs.io/).


## Instructions

Clone this repo into your Wordpress root folder on your local dev.  Change the folder name from `bare-bones` to `wp-content`.

Change directories to the `wp-content` folder, then run `npm install`.

If you want to change the name of the theme from `bare-bones` to something else, just make sure to do a find and replace in Grunt.js from `bare-bones` to the new name (so all the file paths get updated).  And of course, change the name in `style.css` so the new name is reflected in the WP admin.

Then just run `grunt watch` and start coding.

### JS

Prefix your JS files with an underscore and save them in the `js/` folder (`_header.js` and `_footer.js` are already there as examples).  Concat will first combine all JS files starting with an underscore to `js/app.js` and then Babel will compile down into `js/build/app.min.js`.  So make sure you don't direclty edit `js/app.js`.

### CSS/Sass

Save all your .scss files in `css/scss/`.  No need to do any vendor prefixing since PostCSS will take care of that for you.  If you add a new .scss file, make sure you add the file to `css/main.scss`.

### Custom Post Types

This theme includes the [Fieldmanager](http://fieldmanager.org/) plugin to create robust post types. That code lives in the `lib/` folder. There is a "Project Cards" post type included as an example.  To create a new post type:

- Register your new post type in `lib/post-types.php` inside the `bb_register_post_types` function.  See "Project Cards" example.
- Create a new PHP file in `lib/` and prefix it with "content-", so something like `content-postname.php`, and link the file in `lib/fields.php`.  Doesn't have to be prefixed, but it'll help you stay organized.
- Refer to the [Fieldmanager](http://fieldmanager.org/) docs on how to create new fields in your new `content-postname.php`.