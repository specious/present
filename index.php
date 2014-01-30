<!doctype html>
<html lang="en">
<?php require( 'config.php' ); ?>
<head>
  <!--
    Programming by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
  <meta charset="UTF-8">
  <title><?php echo $author ?> - <?php echo $epithet ?></title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <img id="qr-code" src="gfx/qr-code.png" alt="QR Code">
  <div id="menu">
    <div id="about">
      What I do
    </div>
<?php foreach( $projects as $category => $page ): ?>
    <a href="#<?php echo $category ?>">
      <?php echo ucfirst( $category ) . "\n" ?>
    </a>
<?php endforeach ?>
    <a id="hire" href="#contact">
      <?php echo $contact['title'] . "\n" ?>
    </a>
  </div>
  <div id="header">
    <h1><?php echo $author ?></h1>
    <h2><?php echo ucwords( $epithet ) ?></h2>
  </div>
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
      <h1><?php echo $contact['title'] ?></h1>
      <form action="contact.php" method="post">
        <label>Your name
          <input type="text" id="name" name="name" required>
        </label>
        <label>Your e-mail
          <input type="email" name="email" required>
        </label>
        <div class="group">
          <label>Budget
            <input type="text" name="budget" placeholder="e.g., $3500">
          </label>
          <label>Start date
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
      <?php echo $footer . "\n" ?>
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
      // Lazy load images
      //
      function loadImages( selector ) {
        $(selector).each( function() {
          var src = this.getAttribute( "data-src" )

          if( src ) {
            this.setAttribute( "src", src )
            this.removeAttribute( "data-src" )
          }
        } )
      }

      // First page first
      loadImages( ".page:first .cover" )

      $(window).load( function() {
        loadImages( ".cover" )
      } )
    })
  </script>
</body>
</html>