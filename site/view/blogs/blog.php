<div class="container-xxl py-5">
    <h3 class="display-5 mb-4 mt-4 container text-title " style="font-size:30px;">
        Bài viết
    </h3>
    <div class="container">
        <!-- tittle heading -->
        <div class="row">
            <?php foreach ($blogs as $blog) : ?>
                <div class="col-lg-4 mb_4">
                    <img src="<?= $blog['img'] ?>" class="img" alt="" style="width: 250px; height: 150px">
                </div>
                <div class="col-lg-8 mb_2">
                    <h4><?= $blog['title'] ?></h4>
                    <p class='mb-1'>Tác giả: <?= $blog['author'] ?></p>
                    <!-- <p class="mb-1">
                    <?= $blog['content'] ?>
                    </p> -->
                    <p class='mb-1'>Ngày đăng: <?= $blog['created_at'] ?></p>
                    <div class='mb-1'>
                        <div class='col-2 ban-buttons'>
                            <a class='btn btn-course' href='index.php?page=blog_detail&blog_id=<?= $blog['id'] ?>'>Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>