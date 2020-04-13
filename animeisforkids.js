// a key map of allowed keys
var allowedKeys = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down',
  65: 'a',
    66: 'b',
    71: 'g',
    73: 'i',
    78: 'n',
    80: 'p',
    82: 'r',
    83: 's',
  87: 'w'
};

// the 'official' Konami Code sequence
var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];

var unlockTheBoys = ['r', 'i', 'p', 'w', 'i', 'n', 'g', 's'];

// a variable to remember the 'position' the user has reached so far.
var konamiCodePosition = 0;
var theBoysPosition = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
  // get the value of the key code from the key map
  var key = allowedKeys[e.keyCode];
  // get the value of the required key from the konami code
    var requiredKey = konamiCode[konamiCodePosition];

  // compare the key with the required key
  if (key == requiredKey) {

    // move to the next key in the konami code sequence
    konamiCodePosition++;

    // if the last key is reached, activate cheats
    if (konamiCodePosition == konamiCode.length) {
      activateCheats();
      konamiCodePosition = 0;
    }
  } else {
    konamiCodePosition = 0;
    }

    var requiredKeyTheBoys = unlockTheBoys[theBoysPosition];
    if (key == requiredKeyTheBoys) {
        theBoysPosition++;
        if (theBoysPosition == unlockTheBoys.length) {
            activateTheBoys();
            theBoysPosition = 0;
        }
    } else {
        theBoysPosition = 0;
    }
});

function activateCheats() {
	document.body.insertAdjacentHTML('beforeEnd', '<iframe id="video1" width="1920" height="980" src="https://www.youtube.com/embed/OdZrFtIGzfU?start=11&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}


function activateTheBoys() {
    document.body.insertAdjacentHTML('beforeEnd', '<p id="TheBoysKey"></p>');
}
