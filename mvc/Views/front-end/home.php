<?php include "header.php" ?>
<!-- BANNER -->
<section class="banner">
    <img src="images/banner.jpg" alt="">
</section>

<!-- SẢN PHẨM BÁN CHẠY -->
<section class="products">
    <div class="container">

        <h2>Sản phẩm bán chạy</h2>

        <div class="product-list">
            <?php if ($products) : ?>
                <?php foreach ($products as $pro) : ?>
                    <div class="product-item">
                        <img src="images/<?= $pro['image'] ?>" alt="">
                        <h3><?= $pro['name'] ?></h3>
                        <p>$ <?= $pro['price'] ?></p>
                        <a href="product-detail.html" class="btn">
                            Xem chi tiết
                        </a>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>

    </div>
</section>

<?php include "footer.php" ?>