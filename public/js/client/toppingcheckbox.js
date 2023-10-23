// Lấy tất cả các input checkbox
var checkboxes = document.querySelectorAll("input[type='toppingcheckbox']");

// Lặp qua từng checkbox và thêm sự kiện change cho mỗi checkbox
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener("change", function() {
    if (this.checked) {
      this.nextElementSibling.classList.add("checked");
    } else {
      this.nextElementSibling.classList.remove("checked");
    }
  });
});