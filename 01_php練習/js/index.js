// ビューモアがおされたときshowをつける
const viewMoreButton = document.querySelector(".product_more");
const productItems = document.querySelectorAll(".product_item");

viewMoreButton.addEventListener("click", () => {
  productItems.forEach((item) => item.classList.add("show"));
  viewMoreButton.style.display = "none"; // ボタンを非表示にする
});
