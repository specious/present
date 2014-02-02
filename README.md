I decided to share the framework that I have developed for showing off my project portfolio.

## Features

* Responsive design
* Requires only PHP on the server (or [serve as static files](#static))
* Don't need a database
* Takes advantage of jQuery but usable without JavaScript
* Generates very clean HTML
* Skinnable

## Try the [Demo](http://specious.github.io/present/)

<a href="http://specious.github.io/present/"><img src="http://specious.github.io/present/screenshot.png" width="480" alt="screenshot">

## Mission

* To create a *lightweight* portfolio/gallery website with contact form

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

MIT