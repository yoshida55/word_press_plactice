// ビューモアがおされたときshowをつける

// もっと見るボタンを取得
const viewMoreButton = document.querySelector(".product_more");
// 戻るボタンを取得
const productBuck = document.querySelectorAll(".product_back");
const productItems = document.querySelectorAll(".product_item");

// もっと見るボタンが押された場合
viewMoreButton.addEventListener("click", () => {
  if (productItems.length > 4) {
    productItems.forEach((item) => item.classList.add("show"));
    viewMoreButton.style.display = "none"; // ボタンを非表示にする
  }
});

// 戻るボタンがクリックされたときの処理
productBuck.forEach((button) => {
  button.addEventListener("click", () => {
    productItems.forEach((item) => item.classList.remove("show"));
    viewMoreButton.style.display = "block"; // ボタンを再表示する
  });
});
