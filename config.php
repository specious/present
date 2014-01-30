<?php

$author  = 'Ildar Sagdejev';
$epithet = 'Web ninja for hire';
$footer  = "Designed and programmed by {$author} &copy; 2014";

$contact = array(
  'title' => 'Hire me!',
  'email' => array(
    'from' => 'tknomad.com <noreply@tknomad.com>',
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
  'fb' => array(
    'href' => 'http://fb.me/tknomad',
    'title' => 'Read my public diary'
  ),
  'twitter' => array(
    'href' => 'http://twitter.com/tknomad',
    'title' => 'Keep up with me'
  ),
  'wikimedia' => array(
    'href' => 'http://commons.wikimedia.org/wiki/User:Specious',
    'title' => 'Behold my contributions to mankind'
  ),
  'github' => array(
    'href' => 'http://github.com/specious',
    'title' => 'Entertain yourself with my open source code'
  ),
  'flickr' => array(
    'href' => 'http://www.flickr.com/photos/the-specious',
    'title' => 'Enjoy my photography'
  )
);

$projects['websites'] = array(
  'Recent websites',
  array(
    'name' => 'Julemagne.com',
    'type' => 'Website - Fine art',
    'cover' => 'julemagne.png',
    'url' => 'http://www.julemagne.com/',
    'job' => 'Design and programming',
    'credits' => 'Art and graphics by <a href="http://twitter.com/julemagne" target="_blank">Julie David</a>'
  ),
  array(
    'name' => 'Professional Mortuary',
    'type' => 'Website - Funeral service',
    'cover' => 'pms-nc.png',
    'url' => 'http://www.promortuary.com/',
    'job' => 'Design and programming',
    'credits' => 'Embalming by <a href="http://www.promortuary.com/" target="_blank">William Lum</a>'
  )
);

$projects['games'] = array(
  'Sweepstakes games',
  array(
    'name' => 'Wheel Deal',
    'type' => 'Game of chance',
    'cover' => 'wheel-deal.png',
    'url' => 'gfx/projects/wheel-deal.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  ),
  array(
    'name' => 'Lucky\'s Loot',
    'type' => 'Game of chance',
    'cover' => 'lucky-loot.png',
    'url' => 'gfx/projects/lucky-loot.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  ),
  array(
    'name' => 'Crazy Eights',
    'type' => 'Game of chance',
    'cover' => 'crazy-eights.png',
    'url' => 'gfx/projects/crazy-eights.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  ),
  array(
    'name' => 'Lucky Lager',
    'type' => 'Game of chance',
    'cover' => 'lucky-lager.png',
    'url' => 'gfx/projects/lucky-lager.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  ),
  array(
    'name' => 'Iceball Keno',
    'type' => 'Game of chance',
    'cover' => 'iceball-keno.png',
    'url' => 'gfx/projects/iceball-keno.png',
    'job' => 'Programming'
  ),
  array(
    'name' => 'American Pride',
    'type' => 'Game of chance',
    'cover' => 'pride.png',
    'url' => 'gfx/projects/pride.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  ),
  array(
    'name' => 'Deuces Wild',
    'type' => 'Game of chance',
    'cover' => 'deuces-wild.png',
    'url' => 'gfx/projects/deuces-wild.png',
    'job' => 'Programming',
    'credits' => 'Graphics by Figure 8 Technologies'
  )
);

?>