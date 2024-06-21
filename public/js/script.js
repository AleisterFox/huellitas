const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 769) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        burguerButton.classList.remove("fa-bars");
        burguerButton.classList.add("fa-x");
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
        burguerButton.classList.remove("fa-x");
        burguerButton.classList.add("fa-bars");
      }
    });
  }
});

const successModal = document.querySelector(".success-modal");
const closeSuccessModal = document.querySelector(".close-success-modal");

closeSuccessModal.addEventListener("click", () => {
  successModal.style.display = "none";
  document.documentElement.style.overflowY = "scroll";
});

document.addEventListener("DOMContentLoaded", function () {
  const forms = document.querySelectorAll("form");
  forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      successModal.style.display = "flex";
      setTimeout(() => {
        window.scrollTo({
          top: 0,
        });
      }, 100);
      document.documentElement.style.overflowY = "hidden";
    });
  });
});


