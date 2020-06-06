const canvas = document.getElementById("tetris");
const context = canvas.getContext("2d");
const row = 20;
const column = 10;
const squareSize = 20;
const vacant_color = "white"; // color of empty square
const scoreElement = document.getElementById("score");
const bestscore = document.getElementById("bestscore");
const startButton = document.getElementById("start");
const saveButton = document.getElementById("save");
const uparrow = document.getElementById("uparrow");
const leftarrow = document.getElementById("leftarrow");
const rightarrow = document.getElementById("rightarrow");
const downarrow = document.getElementById("downarrow");

export { context, row, column, squareSize, vacant_color, scoreElement, bestscore, startButton, saveButton, uparrow, leftarrow, rightarrow, downarrow};