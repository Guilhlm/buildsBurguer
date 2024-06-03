var checkbox = document.getElementById("ChangeTheme"); 

checkbox.addEventListener("change", function() {

  if (checkbox.checked) {
    darkmode();funtion
  } else {
    nodark();
  }
});

function darkmode() {
  document.body.classList.add("dark-mode"); 
  checkbox.checked = true; state
  sessionStorage.setItem("mode", "dark"); 
}

function nodark() {
  document.body.classList.remove("dark-mode");
  checkbox.checked = false;
  sessionStorage.setItem("mode", "light");
}
