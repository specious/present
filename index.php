<!doctype html>
<html lang="en">
<head>
  <!--
    Programming by Ildar Sagdejev (Twitter: @tknomad)
  -->
  <meta charset="UTF-8">
  <title>Ildar Sagdejev - Web ninja</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/superslides.css">
</head>
<body>
  <div id="header">
    <h1>Ildar Sagdejev</h1>
    <h2>Web ninja</h2>
    <a href="#contact">
      <div id="hire">
        Hire me!
      </div>
    </a>
  </div>
  <ul id="links">
    <li>
      <a class="flickr" href="http://www.flickr.com/photos/the-specious" target="_blank" title="Photography">
      </a>
    </li>
    <li>
      <a class="fb" href="http://fb.me/tknomad" target="_blank" title="Life">
      </a>
    </li>
    <li>
      <a class="twitter" href="http://twitter.com/tknomad" target="_blank" title="News">
      </a>
    </li>
    <li>
      <a class="github" href="http://github.com/specious" target="_blank" title="Code">
      </a>
    </li>
    <li>
      <a class="wikimedia" href="http://commons.wikimedia.org/wiki/User:Specious" target="_blank" title="Contributions to mankind">
      </a>
    </li>
  </ul>
<?php
$projects = array(
  array(
    'name' => 'Wheel Deal',
    'type' => 'Game of chance',
    'cover' => 'wheel-deal.png',
    'url' => 'http://www.youtube.com/watch?v=-F8m-aYZBkg',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  array(
    'name' => 'Lucky\'s Loot',
    'type' => 'Game of chance',
    'cover' => 'lucky-loot.png',
    'url' => 'http://www.youtube.com/watch?v=ubT1trmd7Ts',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  array(
    'name' => 'Crazy Eights',
    'type' => 'Game of chance',
    'cover' => 'crazy-eights.png',
    'url' => 'http://www.youtube.com/watch?v=6lfZUDqg9FY',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  array(
    'name' => 'Lucky Lager',
    'type' => 'Game of chance',
    'cover' => 'lucky-lager.png',
    'url' => 'http://www.youtube.com/watch?v=pUSbuGbLMhk',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  array(
    'name' => 'Iceball Keno',
    'type' => 'Game of chance',
    'cover' => 'iceball-keno.png',
    'url' => 'http://www.youtube.com/watch?v=zGuukS-Jex0',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="mailto:amyrlin@gmail.com">Jeana Routh</a>'
  ),
  array(
    'name' => 'American Pride',
    'type' => 'Game of chance',
    'cover' => 'pride.png',
    'url' => 'http://www.youtube.com/watch?v=shgkRHHSdW0',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  array(
    'name' => 'Julemagne.com',
    'type' => 'Website - Fine art',
    'cover' => 'julemagne.png',
    'url' => 'http://www.julemagne.com/',
    'job' => 'Design and programming',
    'credits' => 'Art and graphics by <a href="http://twitter.com/julemagne">Julie David</a>'
  ),
  array(
    'name' => 'Professional Mortuary of NC',
    'type' => 'Website - Funeral service',
    'cover' => 'pms-nc.png',
    'url' => 'http://www.promortuary.com/',
    'job' => 'Design and programming',
    'credits' => 'Embalming by William Lum'
  ),
  array(
    'name' => 'Deuces Wild',
    'type' => 'Game of chance',
    'cover' => 'deuces-wild.png',
    'url' => 'http://www.youtube.com/watch?v=KGXQho0P9_U',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  ),
  // array(
  //   'name' => '',
  //   'type' => '',
  //   'cover' => '',
  //   'url' => 'http://',
  //   'job' => '',
  //   'credits' => ''
  // ),
)
?>
  <div id="content">
    <div id="slides">
      <ul class="slides-container">
<?php foreach( $projects as $p ): ?>
        <li>
          <div class="project">
            <p class="name">
              <?php echo $p['name'] . "\n" ?>
            </p>
            <a href="<?php echo $p['url'] ?>" target="_blank">
              <img class="cover" src="gfx/projects/<?php echo $p['cover'] ?>" alt="<?php echo $p['name'] ?>">
            </a>
            <div class="info">
              <p class="type">
                <?php echo $p['type'] . "\n" ?>
              </p>
              <hr>
              <p class="job">
                &#187; <?php echo $p['job'] ?> &#171;
              </p>
<?php if( $p['credits'] != null ): ?>
              <p class="credits">
                <?php echo $p['credits'] . "\n" ?>
              </p>
<?php endif ?>
            </div>
          </div>
        </li>
<?php endforeach ?>
      </ul>
    </div>
  </div>
  <div class="nav" id="nav-left">
    <span>&lt;</span>
  </div>
  <div class="nav" id="nav-right">
    <span>&gt;</span>
  </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/jquery.superslides.js"></script>
  <script src="js/info.js"></script>
  <script src="js/contact.js"></script>
  <script>
    function keysInit() {
      $(document).keydown(function(e) {
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('#slides').superslides('animate', 'prev')
            break

          /* right arrow */
          case 39:
            $('#slides').superslides('animate', 'next')
            break

          /* esc */
          case 27:
            infoWindowClose()
        }
      })
    }

    $(function() {
      $('#slides img').addClass( 'preserve' )
      $('#slides').superslides({
        slide_speed: 420,
        pagination: true,
        scrollable: true,
        play: 12000
        // More options here: https://github.com/nicinabox/superslides
      })

      $('#nav-left').click( function() {
        $('#slides').superslides('animate', 'prev')
      } )
      $('#nav-right').click( function() {
        $('#slides').superslides('animate', 'next')
      } )

      keysInit()
    })
  </script>
</body>
</html>