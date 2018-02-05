function placeHero(x, y) {
    x = Math.max(0, Math.min(x, 350)); // make sure that x is between 0 and 350
    y = Math.max(0, Math.min(y, 350));
    var hero = document.getElementById('hero');
    hero.style.left = x + 'px';
    hero.style.top = y + 'px';
    hero_x = x;
    hero_y = y;
}

var hero_x; // current hero x coordinate
var hero_y; // current hero y coordinate

placeHero(150, 150);

document.addEventListener('keyup', function(ev) {
    // console.log(ev);
    if(ev.keyCode == 37) {
        placeHero(hero_x - 50, hero_y);
    } else if(ev.keyCode == 38) {
        placeHero(hero_x, hero_y - 50);
    } else if(ev.keyCode == 39) {
        placeHero(hero_x + 50, hero_y);
    } else if(ev.keyCode == 40) {
        placeHero(hero_x, hero_y + 50);
    }
});