const quantityInput = document.getElementById("quantityInput");

quantityInput.addEventListener("change", function () {
  const currentQuantity = parseInt(quantityInput.value);
  if (currentQuantity < 1) {
    quantityInput.value = 1;
  }
});