$(document).ready(function(e){

$('#next').click(function(e){
    e.preventDefault();
 document.getElementById("main_form").style.display = "none";
 document.getElementById("income").style.display = "block";
 document.getElementById("account").style.display = "none";
   return false;
});
$('#next1').click(function(e){
    e.preventDefault();

 document.getElementById("main_form").style.display = "none";
 document.getElementById("income").style.display = "none";
 document.getElementById("account").style.display = "block";
   return false;
});
$('#priv').click(function(e){
    e.preventDefault();
 document.getElementById("main_form").style.display = "block";
 document.getElementById("income").style.display = "none";
 document.getElementById("account").style.display = "none";
   return false;
});
$('#priv1').click(function(e){
    e.preventDefault();

 document.getElementById("main_form").style.display = "none";
 document.getElementById("income").style.display = "block";
 document.getElementById("account").style.display = "none";
   return false;
});

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function(e) {
	e.preventDefault();
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
  //  if (event.target == modal) {
      //  modal.style.display = "none";
    //}
//}

});
