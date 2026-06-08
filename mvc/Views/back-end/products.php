<?php include "sidebar.php" ?>

<!-- MAIN -->
<main class="main">

    <!-- TOPBAR -->
    <header class="topbar">

        <h1>Danh sách sản phẩm</h1>

        <div class="admin-info">
            Xin chào Admin
        </div>

    </header>

    <!-- CONTENT -->
    <section class="content">

        <div class="action">
            <a href="product-create.html" class="btn">
                + Thêm sản phẩm
            </a>
        </div>

        <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $pro) : ?>
                    <tr>
                        <td><?= $pro['id'] ?></td>

                        <td>
                            <img src="images/product.jpg" class="thumb">
                        </td>

                        <td><?= $pro['name'] ?></td>

                        <td><?= $pro['price'] ?> </td>

                        <td><?= $pro['cate_name'] ?></td>

                        <td>
                            <a href="product-edit.html" class="btn-edit">
                                Sửa
                            </a>

                            <button class="btn-delete">
                                Xóa
                            </button>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>

        </table>

    </section>

</main>

<?php include "footer.php" ?>