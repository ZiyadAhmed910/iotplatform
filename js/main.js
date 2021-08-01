var state = "LOW";
var switchstate = "ON";
document.getElementById("theme-toggle").addEventListener("click", (e) => {
  const checked = e.target.checked;
  document.body.setAttribute("theme", checked ? "dark" : "light");
  document.getElementsByClassName('login')[0].setAttribute("theme", checked ? "dark" : "light");
  document.getElementsByClassName('login-form')[0].setAttribute("theme", checked ? "dark" : "light");
  document.getElementsByClassName('wrapper')[0].setAttribute("theme", checked ? "dark" : "light");
  document.getElementsByClassName('login-decoration')[0].setAttribute("theme", checked ? "dark" : "light");
    document.getElementsByClassName('action')[0].setAttribute("theme", checked ? "dark" : "light");
  if (state == "LOW") {
    state = "HIGH";
    switchstate = "OFF";
  } else {
    state = "LOW";
    switchstate = "ON";
  }
  console.log(state);
  var div = document.getElementById("mytext");
  div.innerHTML = switchstate;
});
