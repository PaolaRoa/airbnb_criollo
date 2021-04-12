const pw = document.getElementById("signup-password");
const confPw_v = document.getElementById("signup-password_v");
const check = document.getElementById("show");
const check_v = document.getElementById("show_v");

check.addEventListener("click", () => showHidePw());
check_v.addEventListener("click", () => showHidePw_V());

function showHidePw_V() {
  if (confPw_v.getAttribute("type") == "password") {
    confPw_v.setAttribute("type", "text");
  } else {
    confPw_v.setAttribute("type", "password");
  }
}

function showHidePw() {
  if (pw.getAttribute("type") == "password") {
    pw.setAttribute("type", "text");
  } else {
    pw.setAttribute("type", "password");
  }
}
