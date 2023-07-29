//var to store interval id
let intervalID;

let y = 0;

function loop(timestamp) {
    console.log(y);
    y++;
}

let lastRender = 0;
let fps = 30;

function startloop(){
    if(!intervalID){
        intervalID = setInterval(loop, 1000/fps);
    }
}

function stoploop(){
    clearInterval(intervalID);
    intervalID = null;
}


let x = 0;

function addone(){
    x++;
    console.log(x);
}

/*

send cookies with ajax request that says to update database with new data, then avoids conn

*/