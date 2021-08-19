var tictactoe = (function() {
  var X = 'X',
      O = 'O',
      BLANK = ' ';

  var curPlayer = X,
      moves = 0,
      board = [ BLANK, BLANK, BLANK, BLANK, BLANK, 
                BLANK, BLANK, BLANK, BLANK ];

  var displayMessage = function( message ) {
    $( '.message' ).html( message );
  };

  var switchPlayer = function() {
    curPlayer = ( curPlayer === X ) ? O : X;
    displayMessage( 'Current Player: ' + curPlayer );
  };

  var isValidMove = function( index ) {
    if ( board[ index ] === BLANK ) {
      return true;
    } else {
      displayMessage( 'Select a blank board position' );
      return false;
    }
  };

  var makeMove = function( $square, index ) {
    board[ index ] = curPlayer;
    $square.html( curPlayer );
    moves++;
  };

  var gameOver = function() {
    var winCombinations = [ [0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], 
                            [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6] ],
        winIndex = -1;
    $.each( winCombinations, function( index, winCombination ) {
      if( allEqual( winCombination ) ){
        winIndex = index;
        return false;
      }
    });
    if( winIndex !== -1 ) {
      return winCombinations[ winIndex ];
    } else if ( moves === 9 ) {
      return true;
    } else {
      return false;
    }
  };

  var allEqual = function( indexes ) {
    return ( board[ indexes[0] ] === board[ indexes[1] ] ) &&
           ( board[ indexes[0] ] === board[ indexes[2] ] ) &&
           ( board[ indexes[0] ] !== BLANK );
  };

  var endGame = function( endFormation ) {
    var endMessage;

    if( $.isArray(endFormation) ){
      endMessage = 'Game Over.  Player ' + curPlayer + ' Wins';
      showWinFormation( endFormation );
    } else {
      endMessage = 'Game Over.  Draw Game';
    }
    $( '.message' ).addClass( 'end-message' );
    displayMessage( endMessage );

    
    $('.gameboard').off('click');
    $( '.play-again' ).show().on( 'click', function() {
        location.reload();
    });

  };

  var showWinFormation = function( formation ) {
    $.each( formation, function( index, winPosition ) {
      $( '.square' ).eq( winPosition ).addClass(' winning-square ');
    });
  };

  var play = function( $square ) {
    var index = +$square.attr( 'id' );

    if( isValidMove( index ) ){
      makeMove( $square, index );
      var winningFormation = gameOver();

      ( winningFormation ) ? endGame( winningFormation ) : switchPlayer();
    }
  };

  return { play: play };

})();

$( document ).ready( function() {
  $( '.gameboard' ).on( 'click', '.square', function() {
    tictactoe.play( $(this) );
  });
});
