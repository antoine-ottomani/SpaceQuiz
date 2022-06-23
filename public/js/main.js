//! ----------------------------
//!  SLIDER PAGE HOME
//! -----------------------------
const items = document.querySelectorAll(".slide");
const numberSlide = items.length;
const next = document.querySelector(".right");
const previous = document.querySelector(".left");

let count = 0;

function nextSlide() {
  items[count].classList.remove("active");

  if (count < numberSlide - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add("active");
}

next.addEventListener("click", nextSlide);

function previousSlide() {
  items[count].classList.remove("active");

  if (count > 0) {
    count--;
  } else {
    count = numberSlide - 1;
  }

  items[count].classList.add("active");
}

previous.addEventListener("click", previousSlide);
// FAIRE LES TOUCHES DIRECTIONNELLES SLIDER

//! ----------------------------
//!       PREVIEW QUIZ
//! -----------------------------
