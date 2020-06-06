import { p } from './piece.js';
import { drawBoard } from './board.js';
import { scoreElement, bestscore, startButton, saveButton, uparrow, leftarrow, rightarrow, downarrow } from './dom.js';
//control the piece
document.addEventListener("keydown", Control);
function Control(event) {
    if (event.keyCode == 65) {
        p.moveLeft();
        dropStart = Date.now();
    } else if (event.keyCode == 87) {
        p.rotate();
        dropStart = Date.now();
    } else if (event.keyCode == 68) {
        p.moveRight();
        dropStart = Date.now();
    } else if (event.keyCode == 83) {
        p.moveDown();       
    }
}

uparrow.addEventListener("click", function () {
    p.rotate();
    dropStart = Date.now();
})

leftarrow.addEventListener("click", function () {
    p.moveLeft();
    dropStart = Date.now();
})

rightarrow.addEventListener("click", function () {
    p.moveRight();
    dropStart = Date.now();
})

downarrow.addEventListener("click", function () {
    p.moveDown(); 
})

saveButton.addEventListener("click", function () {
    if (bestscore.innerHTML > scoreElement.innerHTML) {
        createCookie("bestScore", bestscore.innerHTML, "10");
        reeload();
    } else if (bestscore.innerHTML === 0) {
        createCookie("bestScore", scoreElement.innerHTML, "10");
        reeload();
    } else if (bestscore.innerHTML < scoreElement.innerHTML) {
        createCookie("bestScore", scoreElement.innerHTML, "10");
        reeload();
    }
})


function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}


function reeload() {
    setTimeout(function () {
        window.location.reload();
    }, 1000);

}


//drop the piece every 1 second
drawBoard();
let dropStart = Date.now();
let gameOver = false;
startButton.addEventListener("click", function () {    
    function drop() {
        let now = Date.now();
        let delta = now - dropStart;
        // console.log(delta);
        if (delta > 1000) {
            p.moveDown();
            dropStart = Date.now();
        }
        if (!gameOver) {
            requestAnimationFrame(drop);
        }

    }    
    p.draw();
    drop();  
})

