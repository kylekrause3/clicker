function update(progress){

}

function draw() {

}

function loop(timestamp) {
    var progress = timestamp - lastRender;
    
    update(progress);
    draw();

    lastRender = timestamp;
    //window.requestAnimationFrame(loop);
}

var lastRender = 0;
var fps = 30;
//window.requestAnimationFrame(loop);
setInterval(loop, 1000/fps);

let x = 0;

function addone(){
    x++;
    console.log(x);
}