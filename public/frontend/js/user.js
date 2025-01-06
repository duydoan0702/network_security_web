const searchIconContainer = document.querySelector(".search-icon-container");
const searchInput = document.querySelector(".search-input input");
const searchIcon = document.querySelector(".search-icon");
const navLinks = document.querySelector(".nav-links");
const icons = document.querySelector(".icons");

// Mở/Thu gọn thanh tìm kiếm khi click vào biểu tượng tìm kiếm
searchIconContainer.addEventListener("click", (e) => {
  e.stopPropagation(); // Ngừng hành động click truyền tiếp

  const isExpanded = searchIconContainer.classList.contains("expanded");

  // Nếu thanh tìm kiếm chưa mở rộng, mở rộng thanh tìm kiếm
  if (!isExpanded) {
    searchIconContainer.classList.add("expanded");
    searchInput.style.width = "100%";
    searchInput.style.opacity = "1";
    searchInput.style.visibility = "visible";
    navLinks.classList.add("move-left");
    icons.classList.add("move-right");
    searchInput.focus();
  } else {
    // Nếu thanh tìm kiếm đã mở rộng, thu gọn lại
    searchIconContainer.classList.remove("expanded");
    searchInput.style.width = "0";
    searchInput.style.opacity = "0";
    searchInput.style.visibility = "hidden";
    navLinks.classList.remove("move-left");
    icons.classList.remove("move-right");
    searchInput.blur();
  }
});

// Đóng thanh tìm kiếm khi click ra ngoài
document.addEventListener("click", (event) => {
  if (!searchIconContainer.contains(event.target)) {
    searchIconContainer.classList.remove("expanded");
    searchInput.style.width = "0";
    searchInput.style.opacity = "0";
    searchInput.style.visibility = "hidden";
    navLinks.classList.remove("move-left");
    icons.classList.remove("move-right");
    searchInput.blur();
  }
});

// Đảm bảo thanh tìm kiếm đóng khi nhấn Enter
searchInput.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    // Thực hiện tìm kiếm
    console.log("Tìm kiếm: " + searchInput.value);
    searchIconContainer.classList.remove("expanded");
    searchInput.style.width = "0";
    searchInput.style.opacity = "0";
    searchInput.style.visibility = "hidden";
    navLinks.classList.remove("move-left");
    icons.classList.remove("move-right");
    searchInput.blur();
  }
});

document.querySelectorAll(".icon-container").forEach((container) => {
  container.addEventListener("mouseenter", () => {
    container.querySelector(".dropdown-content").style.opacity = "1";
    container.querySelector(".dropdown-content").style.visibility = "visible";
  });
  container.addEventListener("mouseleave", () => {
    container.querySelector(".dropdown-content").style.opacity = "0";
    container.querySelector(".dropdown-content").style.visibility = "hidden";
  });
});

// JavaScript để cuộn trang lên trên một cách mượt mà
document.querySelector(".nav-links a").addEventListener("click", function (e) {
  e.preventDefault(); // Ngừng hành động mặc định của liên kết
  const targetId = this.getAttribute("href").substring(1); // Lấy id của phần muốn cuộn đến
  const targetElement = document.getElementById(targetId);

  window.scrollTo({
    top: targetElement.offsetTop, // Cuộn đến vị trí của phần tử
    behavior: "smooth", // Hiệu ứng cuộn mượt mà
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach((item) => {
    item.addEventListener("click", () => {
      // Đóng tất cả các mục khác
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.classList.remove("active");
          otherItem.querySelector('.accordion-content').style.display = 'none';
        }
      });

      // Toggle trạng thái mở/đóng của mục được nhấp
      const content = item.querySelector('.accordion-content');
      const isActive = item.classList.contains("active");
      
      if (isActive) {
        item.classList.remove("active");
        content.style.display = 'none';
      } else {
        item.classList.add("active");
        content.style.display = 'block';
      }
    });
  });
});


document.addEventListener("DOMContentLoaded", () => {
  const accordionItems = document.querySelectorAll(".accordion-item");
  const dynamicImage = document.getElementById("dynamic-image");

  accordionItems.forEach((item) => {
    item.addEventListener("click", () => {
      // Nếu mục đã mở thì không làm gì
      if (item.classList.contains("active")) return;

      // // Đóng tất cả các mục khác
      // accordionItems.forEach((otherItem) => {
      //   otherItem.classList.remove("active");
      //   const title = otherItem.querySelector("h2");
      //   if (title) title.innerText = `${title.innerText.trim()} `; // Thêm ký tự ">"
      // });

      // Mở mục hiện tại
      item.classList.add("active");
      const title = item.querySelector("h2");
      if (title) title.innerText = title.innerText.replace("  ", ">");

      // Cập nhật ảnh
      const newImage = item.getAttribute("data-image");
      dynamicImage.classList.add("hidden"); // Ẩn ảnh hiện tại
      setTimeout(() => {
        dynamicImage.src = newImage; // Đổi ảnh mới
        dynamicImage.classList.remove("hidden"); // Hiển thị ảnh mới
      }, 300); // Thời gian trùng với transition CSS
    });
  });
});

// Đổi ảnh động khi nhấp vào từng mục
document.querySelectorAll('.accordion-item').forEach((item) => {
  item.addEventListener('click', function () {
    // Xóa trạng thái active khỏi các mục khác
    document.querySelectorAll('.accordion-item').forEach((el) => el.classList.remove('active'));
    // Thêm trạng thái active cho mục hiện tại
    this.classList.add('active');

    // Đổi ảnh động
    const newImage = this.getAttribute('data-image');
    document.getElementById('dynamic-image').src = newImage;

    // Kiểm soát nội dung ">" trong tiêu đề
    document.querySelectorAll('.accordion-item h2').forEach((title) => {
      title.textContent = title.textContent.replace(/ >+$/, ''); // Xóa dấu ">" dư thừa
    });

    // Thêm dấu ">" duy nhất vào tiêu đề mục hiện tại
    const title = this.querySelector('h2');
    if (title) {
      title.textContent += ' >';
    }
  });
});

