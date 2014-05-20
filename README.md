This is a minimal and completely skinnable framework to share your creative portfolio on the web written in PHP, HTML, Stylus and JavaScript.

## Features

* Responsive
* Requires only PHP on the server (you can serve index page as a [static file](#static))
* No database required
* Takes advantage of jQuery (but still usable with no JavaScript)
* Very clean HTML
* Zoomable avatar via [Zoomerang.js](http://yyx990803.github.io/zoomerang/)
* Entirely skinnable

## Try the [Demo](http://specious.github.io/present/)

<a href="http://specious.github.io/present/">
  <img src="http://specious.github.io/present/screenshot.png" width="480" alt="screenshot">
</a>

## Mission

* To create a lightweight responsive portfolio/gallery website with contact form

## Installation

You will need:

* [Stylus](http://learnboost.github.io/stylus/)

Instructions:

* Rename **config-example.php** to **config.php**
* Edit config.php (it is pretty much self-explanatory)
* Edit about.html
* Compile CSS with Stylus: `stylus skins/*/*.styl`
* Host on a PHP server

*Hint:* if you have PHP 5.4 or later you can test by running in the root directory: `php -S 0.0.0.0:8888`

Advanced:

* [Change](http://xiconeditor.com/) favicon.ico
* <a name="static"></a>Render static page with `php index.php > index.html` to serve quicker and without PHP!

## License

[MIT](http://opensource.org/licenses/MIT)