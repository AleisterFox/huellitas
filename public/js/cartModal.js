const cartModal = document.querySelector(".cart__modal");
const closeModal = document.querySelector(".close__modal");
const keepBuying = document.querySelector(".keep__buying");
const cartModalContainer = document.querySelector(".cart__modal--container");
const addProduct = document.querySelector(".add__product");

addProduct.addEventListener("click", () => {
  cartModalContainer.style.animation = "none";
  cartModal.style.display = "block";
  setTimeout(() => {
    window.scrollTo({
      top: 0,
    });
  }, 100);
  document.documentElement.style.overflowY = "hidden";
});

closeModal.addEventListener("click", closeModalFn);

keepBuying.addEventListener("click", closeModalFn);


function closeModalFn() {
    cartModalContainer.style.animation = "bounceOutUp 500ms";
  setTimeout(() => {
    cartModal.style.display = "none";
  }, 490);
  document.documentElement.style.overflowY = "scroll";
}