<?php include "header.php" ?>

<section class="detail">
  <div class="container detail-wrap">
    <div class="detail-image">
      <img src="images/product-1.jpg" alt="" />
    </div>

    <div class="detail-content">
      <h1><?= $product['name'] ?></h1>

      <p class="price"> $<?= $product['price'] ?></p>

      <p>
        <?= $product['description'] ?>
      </p>

      <button class="btn">Thêm vào giỏ hàng</button>
    </div>
  </div>
</section>

<!-- SẢN PHẨM CÙNG LOẠI -->
<section class="products">
  <div class="container">
    <h2>Sản phẩm cùng loại</h2>

    <div class="product-list">

      <?php foreach ($productInCategory as $pro): ?>
        <div class="product-item">
          <img src="images/product-1.jpg" alt="" />
          <h3><?= $pro['name'] ?></h3>
          <p>$ <?= $pro['price'] ?></p>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</section>

<?php include "footer.php" ?>