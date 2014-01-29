<!doctype html>
<html lang="en">
<head>
  <!--
    Programming by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
  <meta charset="UTF-8">
  <title>Ildar Sagdejev - Web ninja for hire</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <img id="qr-code" src="gfx/qr-code.png" alt="QR Code">
  <div id="menu">
    <div id="about">
      What I do
    </div>
    <a href="#websites">
      Websites
    </a>
    <a href="#games">
      Games
    </a>
    <a id="hire" href="#contact">
      Hire me!
    </a>
  </div>
  <div id="header">
    <h1>Ildar Sagdejev</h1>
    <h2>Web Ninja For Hire</h2>
  </div>
<?php
$projects["websites"] = array(
  "Recent websites",
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
$projects["games"] = array(
  "Sweepstakes games",
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
    <div id="<?php echo $category ?>" class="page">
      <h1><?php echo array_shift( $projects[$category] ) ?></h1>
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
    <div id="contact" class="page">
      <h1>Hire me!</h1>
      <form action="contact.php" method="post">
        <label>Your name
          <input type="text" id="name" name="name" required>
        </label>
        <label>Your e-mail
          <input type="email" name="email" required>
        </label>
        <div class="group">
          <label class="half left">Budget
            <input type="text" name="budget" placeholder="e.g., $3500">
          </label>
          <label class="half right">Start date
            <select name="start">
              <option value="1">Within 1 month</option>
              <option value="1-2" selected>1 - 2 months</option>
              <option value="2-3">2 - 3 months</option>
              <option value="3+">3+ months</option>
            </select>
          </label>
        </div>
        <div style="clear: both"></div>
        <label>What can I help you with?
          <textarea name="message" required></textarea>
        </label>
        <input type="submit" id="submit" value="Submit">
      </form>
      <div id="success">
        Thanks for your message! I will get back to you soon.
      </div>
    </div>
  </div>
  <div>
    <div id="logos">
      <a href="http://jquery.com/" target="_blank">
        <img src="gfx/logos/jquery.png" alt="jQuery">
      </a>
      <a href="http://html5please.com/" target="_blank">
        <img src="gfx/logos/html5.png" alt="HTML5">
      </a>
      <a href="http://css3please.com/" target="_blank">
        <img src="gfx/logos/css3.png" alt="CSS3">
      </a>
    </div>
    <p id="copyright">
      Designed and programmed by Ildar Sagdejev &copy; 2014
    </p>
  </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/zoomerang.js"></script>
  <script src="js/info.js"></script>
  <script src="js/contact.js"></script>
  <script>
    $(function() {
      function scrollTo( selector, time ) {
        $('html, body').animate( {
          scrollTop: $(selector).offset().top
        }, time || 1000 )
      }

      $('#about').click( function() {
        infoShow( 'about.html', '#about-content', 420, 212 )
      } )
      $('#menu > a').click( function() {
        scrollTo( $(this).attr('href') )
        return false
      } )
      $('#hire').click( function() {
        $('#name').focus()
        return false
      } )

      contactFormEnable( $('#contact') )

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

      //
      // Load cover images last
      //
      $(window).load( function() {
        $('.cover').each( function() {
          var source = this.getAttribute("data-src")
          if (source)
            this.setAttribute( "src", source )
        } )
      } )
    })
  </script>
</body>
</html>