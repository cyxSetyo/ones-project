/* --Modal Create-- */
function openMdCreate(){
  var modal = document.getElementById("mdCreate");
  modal.style.display = "block";
}

function closeMd(){
  var modal = document.getElementById("mdCreate");
  modal.style.display = "none";
}

window.onclick = function(event){
  var modal = document.getElementById("mdCreate");
  if(event.target == modal){
    modal.style.display = "none";
  }
}