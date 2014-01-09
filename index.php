<!doctype html>
<html lang="en">
<head>
  <!--
    Programming by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
  <meta charset="UTF-8">
  <title>Ildar Sagdejev - Web ninja for hire</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <div id="header">
    <h1>Ildar Sagdejev</h1>
    <h2>Web Ninja For Hire</h2>
    <img id="qr-code" src="gfx/qr-code.png" alt="QR Code">
    <div id="menu">
      <div id="about">
        What I do
      </div>
      <div id="hire">
        Hire me!
      </div>
    </div>
  </div>
<?php
$projects["Recent websites"] = array(
  array(
    'name' => 'Julemagne.com',
    'type' => 'Website - Fine art',
    'cover' => 'julemagne.png',
    'url' => 'http://www.julemagne.com/',
    'job' => 'Design and programming',
    'credits' => 'Art and graphics by <a href="http://twitter.com/julemagne">Julie David</a>'
  ),
  array(
    'name' => 'Professional Mortuary',
    'type' => 'Website - Funeral service',
    'cover' => 'pms-nc.png',
    'url' => 'http://www.promortuary.com/',
    'job' => 'Design and programming',
    'credits' => 'Embalming by <a href="http://www.promortuary.com/">William Lum</a>'
  )
);
$projects["Games"] = array(
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
    'job' => 'Programming'
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
    'name' => 'Deuces Wild',
    'type' => 'Game of chance',
    'cover' => 'deuces-wild.png',
    'url' => 'http://www.youtube.com/watch?v=KGXQho0P9_U',
    'job' => 'Programming',
    'credits' => 'Graphics by <a href="http://www.figure8tech.com/">Figure 8 art team</a>'
  )
);
?>
  <div id="content">
    <ul id="links">
      <li>
        <a class="fb" href="http://fb.me/tknomad" target="_blank" title="My public diary">
        </a>
      </li>
      <li>
        <a class="twitter" href="http://twitter.com/tknomad" target="_blank" title="Keep up with me">
        </a>
      </li>
      <li>
        <a class="wikimedia" href="http://commons.wikimedia.org/wiki/User:Specious" target="_blank" title="My contributions to mankind">
        </a>
      </li>
      <li>
        <a class="github" href="http://github.com/specious" target="_blank" title="Look at my open source code">
        </a>
      </li>
      <li>
        <a class="flickr" href="http://www.flickr.com/photos/the-specious" target="_blank" title="Enjoy my photography">
        </a>
      </li>
    </ul>
<?php foreach( $projects as $category => $page ): ?>
    <div class="page">
      <h1><?php echo $category ?></h1>
<?php foreach( $projects[$category] as $p ): ?>
      <div class="project">
        <a href="<?php echo $p['url'] ?>" target="_blank">
          <img class="cover" src="gfx/cover-placeholder.jpg" data-src="gfx/projects/<?php echo $p['cover'] ?>" alt="<?php echo $p['name'] ?>">
          <noscript>
            <img class="cover" src="gfx/projects/<?php echo $p['cover'] ?>" alt="<?php echo $p['name'] ?>">
          </noscript>
        </a>
        <div class="info">
          <p class="name">
            <?php echo $p['name'] . "\n" ?>
          </p>
          <p class="type">
            <?php echo $p['type'] . "\n" ?>
          </p>
          <hr>
          <p class="job">
            &#187; <?php echo $p['job'] ?> &#171;
          </p>
          <p class="credits">
<?php if( $p['credits'] != null ): ?>
            <?php echo $p['credits'] . "\n" ?>
<?php else: ?>
            &nbsp;
<?php endif ?>
          </p>
        </div>
      </div>
<?php endforeach /* project */ ?>
    </div>
<?php endforeach /* page */ ?>
  </div>
  <div id="footer">
    <div id="logos">
      <img src="gfx/logos/jquery.png" alt="jQuery">
      <img src="gfx/logos/html5.png" alt="HTML5">
      <img src="gfx/logos/css3.png" alt="CSS3">
    </div>
    <p id="copyright">
      Designed and programmed by Ildar Sagdejev &copy; 2014
    </p>
  </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/jquery.unveil.js"></script>
  <script src="js/lib/zoomerang.js"></script>
  <script src="js/info.js"></script>
  <script src="js/contact.js"></script>
  <script>
    $(function() {
      $('#about').click( function() {
        infoShow( 'about.html', '#about-content', 420, 212 )
      } )
      $('#hire').click( function() {
        infoShow( 'contact.html', '#contact-content', 267, 323, onContactFormShow )
      } )

      $('#links li').each( function() {
        var link = $(this).children('a')
        var caption = $(this).append('<span class="link-text">' + link.attr('title') + '</span>').children('span')[0]

        link.removeAttr('title').hover( function() {
          $(caption).stop( true ).css( 'opacity', '1' )
        }, function() {
          $(caption).fadeTo( 333, 0 );
        } )
      } )

      //
      // Due to an unfortunate bug in Android 2.2 - 2.3 stock browser,
      // the transform that Zoomerang performs does not render correctly.
      //
      // UC Browser does fine though!
      //
      // https://code.google.com/p/android/issues/detail?id=12451
      //
      if( /Android 2.[23]/.test( navigator.userAgent )
          && !/UCBrowser/.test( navigator.userAgent ) ) {
        $('#qr-code').wrap('<a href="gfx/qr-code.png"/>')
      } else {
        Zoomerang.config( {
          bgColor: '#121212',
          bgOpacity: 0.6
        } ).listen('#qr-code')
      }

      $('.cover').unveil()
    })
  </script>
</body>
</html>