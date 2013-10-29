//
// Modal info window
//

function infoWindowOpen( w, h ) {
  var win = $('#info-window');

  //
  // Create the info window if it hasn't been yet
  //
  if( win.length === 0 ) {
    win = $('<div id="info-window"><div class="content"></div><a class="close" title="Close">[X]</a></div>').appendTo('body');
    win.find('.close').click( infoWindowClose );
  } else {
    // Enable arrow keys in case they were disabled by the contact form showing
    arrowKeysEnabled = true;
  }

  var closeButton = win.find( '.close' ).css( 'display', 'none' );

  //
  // Appear the info window in a fancy fashion
  //
  var content = win.find( '.content' );
  content.children('div').hide();
  content.css( 'bottom', win.css( 'padding-bottom') );
  win.css( {
    'position': 'absolute',
    'width': '0',
    'height': '0',
    'top': '18%',
    'left': '50%',
    'margin-left': '0',
    'opacity': '1',
    'display': 'block',
    'z-index': '5'
  } );
  win.stop( true ).animate(
    { width: w + 'px', 'margin-left': '-' + (w*0.5) + 'px' }, 600,
    function() {
      win.animate( { height: h + 'px' }, 600, function() {
        closeButton.fadeIn( 200 );
      } );
  } );
}

var infoWindowBusy = false;

function infoWindowClose() {
  if( !infoWindowBusy ) {
    arrowKeysEnabled = true;
    $('#info-window').stop( true ).fadeOut( 400 );
  }
}

function infoShow( file, contentId, w, h, onDone ) {
  infoWindowOpen( w, h );
  var content = $(contentId);

  function showContent() {
    content.stop( true ).fadeIn( 1200 );

    if( typeof onDone === 'function' )
      onDone( content );
  }

  if( content.length !== 0 ) {
    showContent();
  } else {
    //
    // Load the content, stat!
    //
    $.get( file, function( data ) {
      content = $('#info-window .content').append( data ).find( contentId );
      content.css('display', 'none');
      showContent();
    } );
  }
}