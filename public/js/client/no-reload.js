// Lấy tất cả các thẻ <a> có class "no-reload"
var noReloadLinks = document.querySelectorAll(".no-reload");

// Lặp qua từng thẻ <a> và gắn sự kiện click cho mỗi thẻ
noReloadLinks.forEach(function(link) {
  link.addEventListener("click", function(event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
    // Thêm mã JavaScript hoặc thực hiện các hành động bạn muốn ở đây
  });
});