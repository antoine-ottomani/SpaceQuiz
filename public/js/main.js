//! ----------------------------
//!  SLIDER PAGE HOME
//! -----------------------------
const items = document.querySelectorAll(".slide");
const numberSlide = items.length;
const next = document.querySelector(".right");
const previous = document.querySelector(".left");

let count = 0;

next.addEventListener("click", () => {
  items[count].classList.remove("active");

  if (count < numberSlide - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add("active");
});

previous.addEventListener("click", () => {
  items[count].classList.remove("active");

  if (count > 0) {
    count--;
  } else {
    count = numberSlide - 1;
  }

  items[count].classList.add("active");
});
// FAIRE LES TOUCHES DIRECTIONNELLES SLIDER
