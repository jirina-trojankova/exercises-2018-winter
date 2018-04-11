var squares = [], // multidimensional array of divs
    colors = [], // multidimensional array of colors
    all_colors = ['red', 'green', 'blue', 'yellow', 'orange'],
    delay_step = 150,
    to_check = [];


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

function drawBoard() {
    var board = $('#board');
    board.empty();
    for(var x = 0; x < 14; x++) {
        squares[x] = [];

        for(var y = 0; y < 14; y++) {
            var square = $('<div class="square"></div>');
            // square.html(x + ':' + y);
            square.appendTo(board);
            square.css('background-color', colors[x][y]);

            squares[x][y] = square;
        }
    }
}

function updateSquareColor(x, y, delay) {
    console.log(x, y, 'delay: ', delay);
    setTimeout(function() {
        squares[x][y].css('background-color', colors[x][y]);
        squares[x][y].toggleClass('changed');
    }, delay);
}

function drench(color) {
    changes = [];

    var current_color = colors[0][0];

    if(color == current_color) { return; }

    to_check = [];
    var next = {
        x: 0,
        y: 0,
        delay: 0
    };
    do {
        
        drenchSquare(next.x, next.y, current_color, color, next.delay);

        next = to_check.shift();

    } while(next);
}

function drenchSquare(x, y, from_color, to_color, delay) {
    if(x >= 0 && x <= 13 && y >= 0 && y <= 13
        && colors[x][y] == from_color)
    {
        colors[x][y] = to_color;
        updateSquareColor(x, y, delay);
        
        to_check.push({ x: x+1, y: y, delay: delay + delay_step });
        to_check.push({ x: x-1, y: y, delay: delay + delay_step });
        to_check.push({ x: x, y: y+1, delay: delay + delay_step });
        to_check.push({ x: x, y: y-1, delay: delay + delay_step });
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