<?php include "sidebar.php" ?>

<!-- MAIN -->
<main class="main">
  <header class="topbar">
    <h1>Thêm sản phẩm</h1>
  </header>

  <section class="content">
    <form class="form" action="index.php?act=admin&ctl=product-store" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Tên sản phẩm</label>

        <input type="text" name="name" />
      </div>

      <div class="form-group">
        <label>Giá sản phẩm</label>

        <input type="number" name="price" />
      </div>

      <div class="form-group">
        <label>Số lượng</label>

        <input type="number" name="quantity" />
      </div>

      <div class="form-group">
        <label>Danh mục</label>

        <select name="category_id">
          <?php foreach ($categories as $cate) : ?>
            <option value="<?= $cate['id'] ?>">
              <?= $cate['name'] ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <label>Hình ảnh</label>
         
        <input type="file" name="image" />
      </div>

      <div class="form-group">
        <label>Mô tả</label>

        <textarea rows="5" name="description"></textarea>
      </div>

      <button class="btn">Thêm sản phẩm</button>
    </form>
  </section>
</main>

<?php include "footer.php" ?>