function update(progress){

}

function draw() {

}
let y = 0;
function loop(timestamp) {
    var progress = timestamp - lastRender;
    
    update(progress);
    draw();

    lastRender = timestamp;
    //window.requestAnimationFrame(loop);

    console.log(y);
    y++;
}

var lastRender = 0;
var fps = 30;
//window.requestAnimationFrame(loop);


function startloop(){
    setInterval(loop, 1000/fps);
}


let x = 0;

function addone(){
    x++;
    console.log(x);
}