function changeColor(button) {
    // Lấy tất cả các nút có lớp .color-change-pick-size-button
    var buttons = document.querySelectorAll(".color-change-pick-size-button");

    // Loại bỏ lớp .active khỏi tất cả các nút
    buttons.forEach(function(btn) {
        btn.classList.remove("active");
    });

    // Thêm lớp .active cho nút đã được nhấp vào
    button.classList.add("active");
}