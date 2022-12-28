var hamburgerContainer = document.getElementsByClassName("hamburger-container");
console.log(hamburgerContainer);
hamburgerContainer[0].addEventListener("click", function() {
    this.classList.toggle("change-hamburger");
    console.log("Changed");
});