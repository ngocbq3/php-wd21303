<?php include "sidebar.php" ?>

<!-- MAIN -->
<main class="main">
    <header class="topbar">
        <h1>Thêm sản phẩm</h1>
    </header>

    <section class="content">
        <form class="form">
            <div class="form-group">
                <label>Tên sản phẩm</label>

                <input type="text" />
            </div>

            <div class="form-group">
                <label>Giá sản phẩm</label>

                <input type="number" />
            </div>

            <div class="form-group">
                <label>Danh mục</label>

                <select>
                    <option>Thời trang</option>
                    <option>Điện thoại</option>
                </select>
            </div>

            <div class="form-group">
                <label>Hình ảnh</label>

                <input type="file" />
            </div>

            <div class="form-group">
                <label>Mô tả</label>

                <textarea rows="5"></textarea>
            </div>

            <button class="btn">Cập nhật sản phẩm</button>
        </form>
    </section>
</main>

<?php include "footer.php" ?>