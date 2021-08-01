const toggleDarkMode = () => {
  const element = document.body;
  element.classList.toggle("dark-mode");
  const title = document.querySelectorAll(".title");
  if (title.innerHTML === "Light Mode") {
    title.innerHTML = "Dark Mode";
  } else {
    title.innerHTML = "Light Mode";
  }
};
