var checkbox = document.getElementById("ChangeTheme");

checkbox.addEventListener("change", function() {
  if (checkbox.checked) {
    darkmode();
  } else {
    nodark();
  }
});

function darkmode() {
  document.body.classList.add("dark-mode");
  checkbox.checked = true;
  localStorage.setItem("mode", "dark");
}

function nodark() {
  document.body.classList.remove("dark-mode");
  checkbox.checked = false;
  localStorage.setItem("mode", "light");
}

window.onload = function() {
  var mode = localStorage.getItem("mode");
  if (mode === "dark") {
    darkmode();
  } else {
    nodark();
  }
}