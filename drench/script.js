var divs = [], // multidimensional array of divs
    colors = [], // multidimensional array of colors
    all_colors = ['red', 'green', 'blue', 'yellow', 'orange'];


function randomizeColors() {
    for(var x = 0; x < 14; x++) {
        colors[x] = [];

        for(var y = 0; y < 14; y++) {
            all_colors = shuffle(all_colors);

            var current_color = all_colors[0];

            colors[x][y] = current_color;
        }
    }
}

/**
 * draw the entire board based on the current data
 */
function drawBoard() {
    var board = $('#board');
    board.empty();
    for(var y = 0; y < 14; y++) {
        // y = 0
        for(var x = 0; x < 14; x++) {
            // x = 0

            // x == 0
            // y == 0
            var square = $('<div class="square"></div>');
            square.html(x + ':' + y);
            square.appendTo(board);

            square.css('background-color', colors[x][y]);
        }

    }
}

function drench(color) {
    var current_color = colors[0][0];

    if(color == current_color) { return; }

    drenchSquare(0, 0, current_color, color);

    drawBoard();
}

function drenchSquare(x, y, from_color, to_color) {
    if(x >= 0 && x <= 13 && y >= 0 && y <= 13 
        && colors[x][y] == from_color) 
    {
        colors[x][y] = to_color;

        drenchSquare(x+1, y, from_color, to_color);
        drenchSquare(x-1, y, from_color, to_color);
        drenchSquare(x, y+1, from_color, to_color);
        drenchSquare(x, y-1, from_color, to_color);
    }

}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
  
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
}