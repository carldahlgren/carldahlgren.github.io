
document.getElementById("skrivbtn").addEventListener('click',showandhide);

function showandhide(){
  // debugger;
    var x = document.getElementById("skapainlägg");
    if(x==null){
      var x = document.getElementById("writecomment")
    }
    if (x.style.display !== 'block' ) {
      x.style.display = "block";
      
    } else {
      x.style.display = "none";
    }
} 

// var inlägg= document.getElementById("forfade");
// inlägg.addEventListener('mouseover', fadein);
// // inlägg.addEventListener('mouseout', fadeout);

// function fadein(){
//   debugger;
//   var x = document.getElementById("forfade");
//   x.style.backgroundColor==="#c2c1c1";

// }

// function fadeout(){
//   var x = document.getElementById("forfade");
//   x.style.backgroundColor=="#e0e0e0";
// }