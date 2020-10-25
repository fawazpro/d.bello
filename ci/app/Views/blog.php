<!-- <h2 class="font-w3ls-style text-white">Testimonials</h2> -->
</div>
	<!-- main -->

	<!-- Content -->
    <div class="py-5" id="projects">
        <div class="container py-xl-5 py-lg-3">
            <!-- heading title -->
            <div class="mb-lg-5 mb-4 text-center">
                <h3 class="title-wthree mb-2">
                    Blog</h3>
                <p class="sub-tittle-2">Articles, News & Information</p>
            </div>
            <div class="row">
                <?php foreach ($blogs as $key => $blog):?>
                <div class="col-12 col-md-4 mb-3">
                    <a class="card" href="details?id=<?=$blog['id'] ?>">
                        <img class="card-img-top" src="<?= $blog['img'] ?>" alt="">
                        <div class="mt-2 ml-2" style="position: absolute; left:0; right: 1">
                            <p class="h4"><span class="badge badge-pill badge-danger"><?= $blog['category'] ?></span></p>
                        </div>
                        <div class="mt-3 mr-2" style="position: absolute; left: 1; right:0;;">
                            <p class="h6"><span class="text-white badge-pill bg-dark px-3">Updated: <?= date('F, o', time($blog['updated'])) ?></span></p>
                        </div>
                        <div class="card-body px-3 py-2">
                            <h4 class="card-title text-dark py-0 my-0"><?= $blog['title'] ?></h4>
                            <p><?= substr($blog['excerpt'],0,200).'...' ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
	<!--//Content-->
