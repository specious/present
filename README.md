# Presént

Responsive portfolio gallery with contact form. Written in PHP, HTML, Stylus and JavaScript.

## Features

* Responsive design
* Skin support
* Requires nothing but PHP on the server (index page can be rendered once and served as a [static file](#static))
* Does not require a database
* Takes advantage of jQuery (still usable without JavaScript)
* Well formatted HTML
* Zoomable avatar using [Zoomerang](http://yyx990803.github.io/zoomerang/)

## [Demo](http://specious.github.io/present/) or it didn't happen

<a href="http://specious.github.io/present/">
  <img src="http://specious.github.io/present/screenshot.png" width="480" alt="screenshot">
</a>

## Installation

You will need:

* [Stylus](http://stylus-lang.com/) with [nib](https://tj.github.io/nib/) extensions

Getting started:

* Rename **config-example.php** to **config.php**
* Edit config.php
* Edit about.html
* Compile styles to CSS: `stylus -u nib skins/*/*.styl`
* Host on a PHP server

If you have PHP 5.4 or later you can start a local server by running: `php -S 0.0.0.0:8888`

Advanced:

* [Change](http://xiconeditor.com/) favicon.ico
* <a name="static"></a>Render a static page with `php index.php > index.html` to serve more quickly without invoking the PHP interpreter

## License

[MIT](http://opensource.org/licenses/MIT)