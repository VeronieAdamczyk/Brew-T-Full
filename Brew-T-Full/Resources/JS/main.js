console.log("linked");

// Mobile drop down menu
function mobileMenu() {
  var dropDown = document.getElementById("ddMenu");
  if (dropDown.style.display === "block") {
    dropDown.style.display = "none";
  } else {
    dropDown.style.display = "block";
  }
}
