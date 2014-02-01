<?php

$skin = 'rouge';

$author  = 'Awesome, Dude!';
$epithet = 'This is what I do';
$footer  = "Designed and programmed by {$author} &copy; 2014";
$comment = 'Programming by Ildar Sagdejev ( http://twitter.com/tknomad )';

$about = array(
  'link' => 'About'
);

$contact = array(
  'title' => 'Hire me!',
  'email' => array(
    'from' => 'example.com <noreply@example.com>',
    'to' => 'specious@gmail.com'
  ),
  'suggest' => array(
    'budget' => 'e.g., $3500'
  ),
  'start' => array(
    '1' => 'Within 1 month',
    '1-2' => '1 - 2 months',
    '2-3' => '2 - 3 months',
    '3+' => '3+ months'
  ),
  'start_default' => '1-2'
);

$avatar = array(
  'image' => 'gfx/qr-code.png',
  'title' => 'QR Code'
);

$links = array(
  'Facebook' => array(
    'href' => 'http://fb.me/tknomad',
    'image' => 'fb.png',
    'title' => 'Read my public diary'
  ),
  'Twitter' => array(
    'href' => 'http://twitter.com/tknomad',
    'image' => 'twitter.png',
    'title' => 'Keep up with me'
  ),
  'Wikimedia' => array(
    'href' => 'http://commons.wikimedia.org/wiki/User:Specious',
    'image' => 'wikipedia.png',
    'title' => 'Behold my contributions to mankind'
  ),
  'GitHub' => array(
    'href' => 'http://github.com/specious',
    'image' => 'terminal.png',
    'title' => 'Entertain yourself with my open source code'
  ),
  'Flickr' => array(
    'href' => 'http://www.flickr.com/photos/the-specious',
    'image' => 'camera.png',
    'title' => 'Enjoy my photography'
  )
);

$logos = array(
  'jQuery' => array(
    'image' => 'jquery.png',
    'href' => 'http://jquery.com/'
  ),
  'HTML5' => array(
    'image' => 'html5.png',
    'href' => 'http://html5please.com/'
  ),
  'CSS3' => array(
    'image' => 'css3.png',
    'href' => 'http://css3please.com/'
  )
);

//
// Pages
//

$gallery['photos'] = array(
  'Photography',
  array(
    'name' => 'White Shepherd',
    'type' => 'People and Animals',
    'thumb' => 'white-dog.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/5416294249/',
    'sub1' => 'White German Shepherd',
    'sub2' => 'Canon EOS Rebel XTi'
  ),
  array(
    'name' => 'Pitbull',
    'type' => 'People and Animals',
    'thumb' => 'pitbull.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/6813093772/',
    'sub1' => 'Pitbull on Ellebre Creek Trail',
    'sub2' => 'Canon EOS Rebel XTi'
  ),
  array(
    'name' => 'Chimichanga',
    'type' => 'Food',
    'thumb' => 'chimi.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/5414440478/',
    'sub1' => 'Chimichanga with Guacamole',
    'sub2' => 'Canon EOS Rebel XTi'
  ),
  array(
    'name' => 'Norfolk Southern',
    'type' => 'Transport',
    'thumb' => 'train.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/5415537575/',
    'sub1' => 'Freight Train',
    'sub2' => 'Canon EOS Rebel XTi'
  ),
  array(
    'name' => 'Wild Mushroom',
    'type' => 'Nature',
    'thumb' => 'mushroom.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/5413834061/',
    'sub1' => 'Cardioid',
    'sub2' => 'Canon EOS Rebel XTi'
  ),
  array(
    'name' => 'Swamped by Pigeons',
    'type' => 'People and Animals',
    'thumb' => 'pigeons.jpg',
    'url' => 'http://www.flickr.com/photos/the-specious/5415563709/',
    'sub1' => 'Dam Square, Amsterdam',
    'sub2' => 'Canon EOS Rebel XTi'
  )
);
$gallery['websites'] = array(
  'Websites',
  array(
    'name' => 'Julemagne.com',
    'type' => 'Website - Fine art',
    'thumb' => 'julemagne.png',
    'url' => 'http://www.julemagne.com/',
    'sub1' => 'Design and programming',
    'sub2' => 'Art and graphics by <a href="http://twitter.com/julemagne" target="_blank">Julie David</a>'
  ),
  array(
    'name' => 'Professional Mortuary',
    'type' => 'Website - Funeral service',
    'thumb' => 'pms-nc.png',
    'url' => 'http://www.promortuary.com/',
    'sub1' => 'Design and programming',
    'sub2' => 'Embalming by <a href="http://www.promortuary.com/" target="_blank">William Lum</a>'
  )
);

?>