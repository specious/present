<!doctype html>
<html lang="en">
<?php require( 'config.php' ); ?>
<head>
<?php if( $comment ): ?>
  <!--
    <?php echo $comment . "\n" ?>
  -->
<?php endif ?>
  <meta charset="UTF-8">
  <title><?php echo $author ?> - <?php echo $epithet ?></title>
  <link rel="stylesheet" href="skins/<?php echo $skin ?>/main.css">
</head>
<body>
  <img id="avatar" src="<?php echo $avatar['image'] ?>" alt="<?php echo $avatar['title'] ?>">
  <div id="menu">
<?php if( $about ): ?>
    <div id="about">
      <?php echo $about['link'] . "\n" ?>
    </div>
<?php endif ?>
<?php foreach( $gallery as $category => $page ): ?>
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
<?php if( $links ): ?>
  <ul id="links">
<?php foreach( $links as $name => $link ): ?>
    <li>
      <a href="<?php echo $link['href'] ?>" target="_blank" title="<?php echo $link['title'] ?>">
        <img src="gfx/link-icons/<?php echo $link['image'] ?>" alt="<?php echo $name ?>">
      </a>
    </li>
<?php endforeach ?>
  </ul>
<?php endif ?>
  <div id="content">
<?php foreach( $gallery as $category => $page ): ?>
    <div id="<?php echo $category ?>" class="page">
      <h1><?php echo array_shift( $page ) ?></h1>
<?php foreach( $page as $p ): ?>
      <div class="project">
        <a href="<?php echo $p['url'] ?>" target="_blank">
          <img class="cover" src="gfx/cover-placeholder.jpg" data-src="gfx/gallery/<?php echo $category . '/' . $p['thumb'] ?>" alt="<?php echo $p['name'] ?>">
          <noscript>
            <img class="cover" src="gfx/gallery/<?php echo $category . '/' . $p['thumb'] ?>" alt="<?php echo $p['name'] ?>">
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
          <p class="sub1">
            &#187; <?php echo $p['sub1'] ?> &#171;
          </p>
          <p class="sub2">
<?php if( $p['sub2'] != null ): ?>
            <?php echo $p['sub2'] . "\n" ?>
<?php else: ?>
            &nbsp;
<?php endif ?>
          </p>
        </div>
      </div>
<?php endforeach /* gallery item */ ?>
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
            <input type="text" name="budget"<?php if( $contact['suggest']['budget'] ) echo "placeholder=\"{$contact['suggest']['budget']}\"" ?>>
          </label>
          <label>Start date
            <select name="start">
<?php foreach( $contact['start'] as $key => $value ): ?>
              <option value="<?php echo $key ?>"<?php if( $key === $contact['start_default'] ) echo ' selected' ?>><?php echo $value ?></option>
<?php endforeach ?>
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
<?php if( $logos ): ?>
    <div id="logos">
<?php foreach( $logos as $name => $attr ): ?>
      <a href="<?php echo $attr['href'] ?>" target="_blank">
        <img src="gfx/logos/<?php echo $attr['image'] ?>" alt="<?php echo $name ?>">
      </a>
<?php endforeach ?>
    </div>
<?php endif ?>
    <p id="copyright">
      <?php echo $footer . "\n" ?>
    </p>
  </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/zoomerang.js"></script>
  <script src="js/infowin.js"></script>
  <script src="js/contact.js"></script>
  <script>
    $(function() {
      function scrollTo( selector, time ) {
        $('html, body').animate( {
          scrollTop: $(selector).offset().top
        }, time || 1000 )
      }

<?php if( $about ): ?>
      $('#about').click( function() {
        infoShow( 'about.html', '#about-content', 420 )
      } )
<?php endif ?>
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
        $('#avatar').wrap('<a href="<?php echo $avatar['image'] ?>"/>')
      } else {
        Zoomerang.config( {
          bgColor: '#121212',
          bgOpacity: 0.6
        } ).listen('#avatar')
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