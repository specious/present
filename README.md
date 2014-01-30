I decided to share the framework that I have developed for showing off my project portfolio.

## Features

* Responsive design
* Requires only PHP on the server
* Don't need a database
* Takes advantage of jQuery but usable without JavaScript
* Generates very clean HTML
* Skinnable

## Mission

* To create a *lightweight* portfolio/gallery website with contact form

## Installation

You will need:

* [Stylus](http://learnboost.github.io/stylus/)

Instructions:

* Rename **config-example.php** to **config.php**
* Edit config.php (it is pretty much self-explanatory)
* Compile CSS with Stylus: `stylus skins/*/*.styl`
* Host on a PHP server

*Hint:* if you have PHP 5.4 or later you can test by running in the root directory: `php -S 0.0.0.0:8888`

## License

MIT