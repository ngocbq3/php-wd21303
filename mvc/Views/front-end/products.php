<?php include "header.php" ?>

<section class="products">
  <div class="container">
    <h2>Danh sách sản phẩm</h2>

    <div class="product-list">
      <!-- Lặp sản phẩm -->
      <?php if ($products) : ?>
        <?php foreach ($products as $pro) : ?>
          <div class="product-item">
            <img src="images/<?= $pro['image'] ?>" alt="">
            <h3><?= $pro['name'] ?></h3>
            <p>$ <?= $pro['price'] ?></p>
            <a href="index.php?act=detail&id=<?= $pro['id'] ?>" class="btn">
              Xem chi tiết
            </a>
          </div>
        <?php endforeach ?>
      <?php endif ?>

    </div>
  </div>
</section>

<?php include "footer.php" ?>