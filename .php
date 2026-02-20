<?php
include("./include/header.php");
$catQuery = "SELECT * FROM category ORDER BY name ASC";
$catResult = mysqli_query($conn, $catQuery);

$categories = [];
while ($row = mysqli_fetch_assoc($catResult)) {
    $categories[] = $row;
}

?>

<style>
    .collection-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 40px;
        color: #F82BA9;
    }

    .collection-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .collection-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .collection-card img {
        height: 220px;
        object-fit: cover;
    }

    .category-name {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 15px;
        background: #fff;
        text-align: center;
    }
</style>

<span class="d-none userId"><?= $_SESSION['user_id'] ?></span>
<main class="main">

    <!-- category area -->
    <div class="category-area pt-30">
        <div class="container">

            <div class="category-slider owl-carousel owl-theme">

                <?php
                $query = "
                        SELECT c.*,COUNT(p.Unique_id) AS total_items
                        FROM category c
                        LEFT JOIN products p ON p.category_id = c.Unique_id
                        GROUP BY c.Unique_id
                        ORDER BY c.name ASC
                    ";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="category-item">
                        <a href="https://theheartchoice.com/product/shop.php?cat=<?php echo $row['Unique_id']; ?>"
                            target="_blank">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="https://theheartchoice.com/Admin/categroy/<?php echo $row['image']; ?>"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                                    <p><?php echo $row['total_items']; ?> Items</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
    <!-- category area end-->


    <!-- hero slider -->
    <div class="hero-section hs-1 mt-30">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="hero-banner">
                        <img src="images/hs-1-banner.jpg" alt="">
                        <div class="banner-content">
                            <p>Start ₹10.99</p>
                            <h3>Special Gifts Box For Your Love</h3>
                            <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero-slider owl-carousel owl-theme">
                        <div class="hero-single" style="background-image: url(images/slider-1.jpg);">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Best
                                                Gift Shop</h6>
                                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                Choose Perfect <span>Gifts</span> From Us
                                            </h1>
                                            <p data-animation="fadeInLeft" data-delay=".75s">
                                                There are many variations of passages orem psum available but the
                                                majority
                                                have suffered.
                                            </p>
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="product/shop.php" class="theme-btn">Shop Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-single" style="background-image: url(images/slider-2.jpg);">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Best
                                                Gift Shop</h6>
                                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                Choose Perfect <span>Gifts</span> From Us
                                            </h1>
                                            <p data-animation="fadeInLeft" data-delay=".75s">
                                                There are many variations of passages orem psum available but the
                                                majority
                                                have suffered.
                                            </p>
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="product/shop.php" class="theme-btn">Shop Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-single" style="background-image: url(images/slider-3.jpg);">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Best
                                                Gift Shop</h6>
                                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                Choose Perfect <span>Gifts</span> From Us
                                            </h1>
                                            <p data-animation="fadeInLeft" data-delay=".75s">
                                                There are many variations of passages orem psum available but the
                                                majority
                                                have suffered.
                                            </p>
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="product/shop.php" class="theme-btn">Shop Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-single" style="background-image: url(images/slider-4.jpg);">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Best
                                                Gift Shop</h6>
                                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                Choose Perfect <span>Gifts</span> From Us
                                            </h1>
                                            <p data-animation="fadeInLeft" data-delay=".75s">
                                                There are many variations of passages orem psum available but the
                                                majority
                                                have suffered.
                                            </p>
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="product/shop.php" class="theme-btn">Shop Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->


    <!-- feature area -->
    <div class="feature-area py-100">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="feature-wrap">
                <div class="row g-0">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Free Delivery</h4>
                                <p>Orders Over ₹120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-sync"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Get Refund</h4>
                                <p>Within 30 Days Returns</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-wallet"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Safe Payment</h4>
                                <p>100% Secure Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4>24/7 Support</h4>
                                <p>Feel Free To Call Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->


    <!-- product-area -->
    <div class="product-area pb-100">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading mb-0 pe-2">
                            <span class="site-title-tagline">Premium Gifts</span>
                            <h2 class="site-title">Experience <span>premium gifts</span> and products</h2>
                            <p>It is a long established fact that a reader will by the readable content of a page
                                when looking the majority have suffered alteration in some form at its layout ure there
                                readable content of a page when looking at its layout
                                anything hidden in the middle.
                            </p>
                            <a href="product/shop.php" class="theme-btn mt-30">Explore More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                        <div class="product-slider2 owl-carousel owl-theme">
                            <?php
                            $query = "
                                        SELECT *
                                        FROM products
                                        WHERE type = 1
                                        ORDER BY Unique_id DESC
                                    ";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="product-item">
                                    <div class="product-img">
                                        <?php if ($row['stock_quantity'] == 'out') { ?>
                                            <span class="type oos">Out Of Stock</span>
                                        <?php } else { ?>
                                            <span class="type new">New</span>
                                        <?php } ?>
                                        <a href="https://theheartchoice.com/product/single_view.php?id=<?php echo $row['Unique_id']; ?>"
                                            target="_blank">
                                            <img src="https://theheartchoice.com/Admin/product/uploads/<?php echo $row['main_image']; ?>"
                                                alt="">
                                        </a>

                                        <!--<div class="product-action-wrap">-->
                                        <!--    <div class="product-action">-->
                                        <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"-->
                                        <!--           title="Quick View"><i class="far fa-eye"></i></a>-->
                                        <!--        <a href="#" title="Add To Wishlist"><i class="far fa-heart"></i></a>-->
                                        <!--        <a href="#" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="product-content">
                                        <div class="product-info">
                                            <h3 class="product-title mt-2">
                                                <a title="<?= htmlspecialchars($row['name']); ?>"
                                                    href="product/single_view.php?id=<?php echo $row['Unique_id']; ?>"
                                                    class="product-name">
                                                    <?php echo htmlspecialchars($row['name']); ?>
                                                </a>
                                            </h3>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <div>

                                                    <div class="product-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>

                                                    <div class="product-price">
                                                        <?php if ($row['price'] > 0) { ?>
                                                            <del>₹<?php echo $row['cost_price']; ?></del>
                                                            <span>₹<?php echo $row['price']; ?></span>
                                                        <?php } else { ?>
                                                            <span>₹<?php echo $row['price']; ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <button type="button" class="product-cart-btn" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->


    <div class="container collection pb-100">
        <h2 class="collection-title">Collection</h2>

        <div class="row g-4">
            <?php
            $query = "
                SELECT *
                FROM category
            ";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $img = (!$row['image']) ? 'https://i.ibb.co/PzzmgvVk/image.png' : './Admin/categroy/' . $row['image'];
                ?>
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card collection-card">
                        <img src="<?= $img ?>" alt="img" class="w-100">
                        <div class="category-name"><?= $name ?></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- small banner -->
    <!--<div class="small-banner pb-100">-->
    <!--    <div class="container wow fadeInUp" data-wow-delay=".25s">-->
    <!--        <div class="row g-4">-->
    <!--            <div class="col-12 col-md-6 col-lg-4">-->
    <!--                <div class="banner-item">-->
    <!--                    <img src="images/mini-banner-1.jpg" alt="">-->
    <!--                    <div class="banner-content">-->
    <!--                        <p>Gift Box</p>-->
    <!--                        <h3>Awesome Gifts Box <br> Collectons</h3>-->
    <!--                        <a href="#">Shop Now</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-md-6 col-lg-4">-->
    <!--                <div class="banner-item">-->
    <!--                    <img src="images/mini-banner-2.jpg" alt="">-->
    <!--                    <div class="banner-content">-->
    <!--                        <p>Occasion Gift</p>-->
    <!--                        <h3>Best Occasion Gifts <br> Collections</h3>-->
    <!--                        <a href="#">Discover Now</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-md-6 col-lg-4">-->
    <!--                <div class="banner-item">-->
    <!--                    <img src="images/mini-banner-3.jpg" alt="">-->
    <!--                    <div class="banner-content">-->
    <!--                        <p>Hot Sale</p>-->
    <!--                        <h3>Combo Sets Gift Box <br> Up To <span>50%</span> Off</h3>-->
    <!--                        <a href="#">Discover Now</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- small banner end -->


    <!-- trending item -->
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading-inline">
                        <h2 class="site-title">Trending Items</h2>
                        <a href="https://theheartchoice.com/product/shop.php">View More <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                <div class="product-slider owl-carousel owl-theme">

                    <?php
                    $query = "
                        SELECT *
                        FROM products
                        WHERE type = 4
                        ORDER BY Unique_id DESC
                    ";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $cost = $row['cost_price'];
                        $price = $row['price'];
                        $discountHtml = "";

                        if ($cost > $price && $cost > 0) {
                            $discount = round((($cost - $price) / $cost) * 100);
                        }
                        $discountHtml = '<span class="text-black text-muted">(' . $discount . '% OFF)</span>';
                        ?>

                        <div class="product-item">
                            <div class="product-img">

                                <?php if ($row['stock_quatity'] == 'out') { ?>
                                    <span class="type oos">Out Of Stock</span>
                                <?php } else { ?>
                                    <span class="type hot">Trending</span>
                                <?php } ?>

                                <a
                                    href="https://theheartchoice.com/product/single_view.php?id=<?php echo $row['Unique_id']; ?>">
                                    <img src="https://theheartchoice.com/Admin/product/uploads/<?php echo $row['main_image']; ?>"
                                        alt="">
                                </a>

                                <!--<div class="product-action-wrap">-->
                                <!--    <div class="product-action">-->
                                <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview" title="Quick View">-->
                                <!--            <i class="far fa-eye"></i>-->
                                <!--        </a>-->
                                <!--        <a href="#" title="Add To Wishlist"><i class="far fa-heart"></i></a>-->
                                <!--        <a href="#" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>

                            <div class="product-content">
                                <div class="product-info">
                                    <h3 class="product-title mt-2">
                                        <a title="<?= htmlspecialchars($row['name']); ?>"
                                            href="product/single_view.php?id=<?php echo $row['Unique_id']; ?>"
                                            class="product-name">
                                            <?php echo htmlspecialchars($row['name']); ?>
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>

                                            <div class="product-price">
                                                <?php if (!empty($row['price']) && $row['price'] > 0) { ?>
                                                    <del>₹<?php echo $row['cost_price']; ?></del>
                                                    <span>₹<?php echo $row['price']; ?></span>
                                                <?php } else { ?>
                                                    <span>₹<?php echo $row['price']; ?></span>
                                                <?php } ?>
                                            </div>
                                            <?= $discountHtml ?>
                                        </div>
                                        <button type="button" data-price="<?= $row['price'] ?>"
                                            data-prd="<?= $row['Unique_id'] ?>" class="product-cart-btn"
                                            title="Add To Cart">
                                            <i class="far fa-shopping-bag"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- trending item end -->


    <!-- video area -->
    <div class="video-area py-100">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <div class="site-heading mb-0 wow fadeInLeft" data-wow-delay=".25s">
                        <span class="site-title-tagline">Latest Video</span>
                        <h2 class="site-title">What makes us <span>different check</span> our video</h2>
                        <p>
                            There are many variations of passages available but the majority have suffered alteration in
                            some form by injected humour randomised words which don't look even slightly you are going
                            to use a passage believable.
                        </p>
                        <a href="product/shop.php" class="theme-btn mt-20">Shop Now <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="video-content wow fadeInRight" data-wow-delay=".25s"
                        style="background-image: url(images/01.jpg);">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="video-wrapper">
                                    <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->


    <!-- popular item -->
    <div class="product-area pb-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="small-banner mt-2 wow fadeInLeft" data-wow-delay=".25s">
                        <div class="banner-item">
                            <img src="images/side-banner.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                            <div class="site-heading-inline item-tab">
                                <h2 class="site-title">Popular Items</h2>
                                <ul class="nav nav-pills" id="item-tab" role="tablist">
                                    <?php foreach ($categories as $index => $cat) { ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link <?= ($index === 0) ? 'active' : ''; ?>"
                                                id="item-tab<?= $cat['Unique_id']; ?>" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-<?= $cat['Unique_id']; ?>" type="button"
                                                role="tab">
                                                <?= htmlspecialchars($cat['name']); ?>
                                            </button>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">

                        <?php foreach ($categories as $index => $cat) { ?>

                            <div class="tab-pane fade <?= ($index === 0) ? 'show active' : ''; ?>"
                                id="pill-item-<?= $cat['Unique_id']; ?>" role="tabpanel">

                                <div class="row g-4">

                                    <?php
                                    $prodQuery = "
                                        SELECT *
                                        FROM products
                                        WHERE type = 5
                                          AND category_id = '{$cat['Unique_id']}'
                                        ORDER BY Unique_id DESC
                                        LIMIT 8
                                    ";
                                    $prodResult = mysqli_query($conn, $prodQuery);

                                    while ($row = mysqli_fetch_assoc($prodResult)) {

                                        ?>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="product-item">
                                                <div class="product-img">

                                                    <?php if ($row['stock_quantity'] == 'out') { ?>
                                                        <span class="type oos">Out Of Stock</span>
                                                    <?php } else { ?>
                                                        <span class="type hot">Popular</span>
                                                    <?php } ?>

                                                    <a
                                                        href="https://theheartchoice.com/product/single_view.php?id=<?= $row['Unique_id']; ?>">
                                                        <img src="https://theheartchoice.com/Admin/product/uploads/<?= $row['main_image']; ?>"
                                                            alt="">
                                                    </a>
                                                </div>

                                                <div class="product-content">
                                                    <h3 class="product-title mt-2">
                                                        <a title="<?= htmlspecialchars($row['name']); ?>"
                                                            href="product/shop.php?id=<?= $row['Unique_id']; ?>">
                                                            <?= htmlspecialchars($row['name']); ?>
                                                        </a>
                                                    </h3>

                                                    <div class="product-price">
                                                        <?php if (!empty($row['price'])) { ?>
                                                            <del>₹<?= $row['cost_price']; ?></del>
                                                            <span>₹<?= $row['price']; ?></span>
                                                        <?php } else { ?>
                                                            <span>₹<?= $row['price']; ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- popular item end -->


    <!-- big banner -->
    <div class="big-banner">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="banner-wrap" style="background-image: url(images/big-banner.jpg);">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="banner-content">
                            <div class="banner-info">
                                <h6>Mega Collections</h6>
                                <h2>Huge Sale Up To <span>40%</span> Off</h2>
                                <p>at our outlet stores</p>
                            </div>
                            <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big banner end -->


    <!-- funfact -->
    <div class="funfact pt-100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="funfact-product wow fadeInLeft" data-wow-delay=".25s">
                        <ul class="nav nav-underline nav-justified mb-3" id="pills-tab-plist" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-plist-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-plist1" type="button" role="tab" aria-controls="pills-plist1"
                                    aria-selected="true">
                                    On Sale
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-plist-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-plist2" type="button" role="tab" aria-controls="pills-plist2"
                                    aria-selected="false">
                                    Best Seller
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-plist-tab3" data-bs-toggle="pill"
                                    data-bs-target="#pills-plist3" type="button" role="tab" aria-controls="pills-plist3"
                                    aria-selected="false">
                                    Top Rated
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent-plist">
                            <div class="tab-pane fade show active" id="pills-plist1">
                                <div class="product-list-box" id="onSale" data-type="2"></div>
                            </div>

                            <div class="tab-pane fade" id="pills-plist2">
                                <div class="product-list-box" id="bestSeller" data-type="3"></div>
                            </div>

                            <div class="tab-pane fade" id="pills-plist3">
                                <div class="product-list-box" id="topRated" data-type="6"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="funfact-content wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading">
                            <span class="site-title-tagline">Our Funfact</span>
                            <h2 class="site-title">We Are <span>Heart Choice, Amaze</span> With Perfect Gift.</h2>
                            <p>
                                There are many variations of passages available but the majority have suffered
                                alteration in some
                                form by injected humour randomised words which don't look even If you are going to use a
                                passage
                                you need to be sure there isn't anything embarrassing hidden in the middle of text
                                slightly making this the first true generator on the you are going to use a passage
                                believable.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-box">
                                    <div class="icon">
                                        <img src="images/sale.svg" alt="">
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-amount">
                                            <span class="counter" data-count="+" data-to="50"
                                                data-speed="3000">50</span>
                                            <span class="counter-sign">k</span>
                                        </div>
                                        <h6 class="title">Total Sales </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-box">
                                    <div class="icon">
                                        <img src="images/rate.svg" alt="">
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-amount">
                                            <span class="counter" data-count="+" data-to="90"
                                                data-speed="3000">90</span>
                                            <span class="counter-sign">k</span>
                                        </div>
                                        <h6 class="title">Happy Clients</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-box">
                                    <div class="icon">
                                        <img src="images/employee.svg" alt="">
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-amount">
                                            <span class="counter" data-count="+" data-to="150"
                                                data-speed="3000">150</span>
                                            <span class="counter-sign">+</span>
                                        </div>
                                        <h6 class="title">Team Workers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- funfact end -->


    <!-- deal area -->
    <div class="deal-area deal-bg deal-negative py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading text-center mb-2">
                        <h2 class="site-title text-white">Best Deals For This Week</h2>
                        <p class="text-white">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                <div class="col-lg-5 mx-auto">
                    <div class="deal-countdown">
                        <div class="countdown" data-countdown="2025/12/30"></div>
                    </div>
                </div>
                <div class="product-slider owl-carousel owl-theme" id="dealProducts">

                </div>

            </div>
        </div>
    </div>
    <!-- deal area end -->


    <!-- about area -->
    <div class="about-area pb-120 mt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="img-1">
                                <img src="images/01_1.jpg" alt="">
                            </div>
                            <img class="img-2" src="images/02.jpg" alt="">
                            <img class="img-3" src="images/03_1.jpg" alt="">
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <img src="images/experience.svg" alt="">
                            </div>
                            <b>30 Years Of <br> Experience</b>
                        </div>
                        <div class="about-shape">
                            <img src="images/01_1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline justify-content-start">
                                <i class="flaticon-drive"></i> About Us
                            </span>
                            <h2 class="site-title">
                                We Provide Best And Quality <span>Gifts Box</span> Product For You
                            </h2>
                        </div>
                        <p>
                            We are standard text ever since the when an unknown printer took a galley of type and
                            scrambled it to make a type
                            specimen book. It has survived not only five but also the leap into electronic remaining
                            essentially by injected humour unchanged.
                        </p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fas fa-check-double"></i> Streamlined Shipping Experience</li>
                                <li><i class="fas fa-check-double"></i> Affordable Modern Design</li>
                                <li><i class="fas fa-check-double"></i> Competitive Price & Easy To Shop</li>
                                <li><i class="fas fa-check-double"></i> We Made Awesome Products</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="theme-btn mt-4">Discover More<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->


    <!-- choose-area -->
    <div class="choose-area bg py-80">
        <div class="container">
            <div class="row g-4 align-items-center wow fadeInDown" data-wow-delay=".25s">
                <div class="col-lg-4">
                    <span class="site-title-tagline">Why Choose Us</span>
                    <h2 class="site-title">We Provide Premium Quality Gifts For You</h2>
                </div>
                <div class="col-lg-4">
                    <div class="choose-img">
                        <img src="images/01_2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <p>There are many variations of passages available but the majority have suffered you are going
                        to use a passage you need to be sure alteration in some form by injected humour randomised
                        words even slightly believable.</p>
                </div>
            </div>
            <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="images/warranty.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Trusted Partner</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="images/price.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Affordable Price</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="choose-item">
                            <div class="choose-icon">
                                <img src="images/delivery.svg" alt="">
                            </div>
                            <div class="choose-info">
                                <h4>Free Shipping</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose-area end-->


    <!-- gallery-area -->
    <div class="gallery-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Gallery</span>
                        <h2 class="site-title">Let's Check Our Photo <span>Gallery</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 popup-gallery">
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/01_3.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/01.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/02_1.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/02.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/03.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/04_1.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/04.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/05_1.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/05.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/06.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/06.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="images/07.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/07.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->


    <!-- testimonial area -->
    <div class="testimonial-area bg ts-bg py-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title">What Our Client <span>Say's</span> About Us</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="images/01_4.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="images/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="images/02_3.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordo Novak</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="images/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="images/03_2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="images/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="images/04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="images/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="images/05.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Heruli Nez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="images/quote.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->


    <!-- newsletter area -->
    <!--<div class="newsletter-area pb-100">-->
    <!--    <div class="container wow fadeInUp" data-wow-delay=".25s">-->
    <!--        <div class="newsletter-wrap">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-6 mx-auto">-->
    <!--                    <div class="newsletter-content">-->
    <!--                        <h3>Get <span>20%</span> Off Discount Coupon</h3>-->
    <!--                        <p>By Subscribe Our Newsletter</p>-->
    <!--                        <div class="subscribe-form">-->
    <!--                            <form action="#">-->
    <!--                                <input type="email" class="form-control" placeholder="Your Email Address">-->
    <!--                                <button class="theme-btn" type="submit">-->
    <!--                                    Subscribe <i class="far fa-paper-plane"></i>-->
    <!--                                </button>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- newsletter area end -->


    <!-- brand area -->
    <div class="brand-area bg pt-50 pb-50">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="site-title">Trusted by over <span>4.5k+</span> companies</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="images/01_2.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="images/02_1.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="images/03_1.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="images/04_1.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="images/05_1.png" alt="">
                </div>
                <div class="brand-item">
                    <img src="images/06_1.png" alt="">
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="theme-btn">View All Brands <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- brand area end -->

</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function () {



        // ==============================
        // 1️⃣ Build Product HTML from JSON
        // ==============================
        function buildProductHTML(product) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                stars += `<i class="${i <= product.rating ? 'fas' : 'far'} fa-star"></i>`;
            }
            let cost = parseFloat(product.cost_price);
            let price = parseFloat(product.price);
            let discountHtml = "";

            if (cost > price && cost > 0) {
                let discount = Math.round(((cost - price) / cost) * 100);
                discountHtml = `<span class="type discount">${discount}% OFF</span>`;
            }

            return `
                <div class="product-item">
                    <div class="product-img">
                        ${product.badge ? `<span class="type ${product.badge_class}">${product.badge}</span>` : ''}
                        <a href="https://theheartchoice.com/product/single_view.php?id=${product.Unique_id}"><img src="https://theheartchoice.com/Admin/product/uploads/${product.main_image}" alt="${product.name}"></a>
                        
                    </div>
                    <div class="product-content">
                        <div class="product-info">
                            <h3 class="product-title mt-2">
                                <a title="${product.name}" href="product/single_view.php" class="product-name">${product.name}</a>
                            </h3>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div>
                                    <div class="product-rate">${stars}</div>
                                    <div class="product-price">
                                        <del>₹${product.cost_price}</del>
                                        <span>₹${product.price}</span>
                                        ${discountHtml}
                                    </div>
                                </div>
                                <button type="button"
                                    class="product-cart-btn"
                                    data-prd="${product.Unique_id}"
                                    data-price="${product.price}">
                                    <i class="far fa-shopping-bag"></i>
                                </button>          
                            </div>

                        </div>
                    </div>
                </div>
            `;
        }

        // ==========================================
        // 2️⃣ Load Sale Products (tabbed content)
        // ==========================================
        function loadSaleProducts(type, target) {
            $.ajax({
                url: "code.php",
                type: "POST",
                data: { sale: true, type: type },
                dataType: 'json',
                success: function (products) {
                    let html = '';
                    products.forEach(product => {
                        html += buildProductHTML(product);
                    });
                    $(target).html(html);
                }
            });
        }

        // ==========================================
        // 3️⃣ Load Deal Products (Owl Carousel)
        // ==========================================
        function loadDealProducts(type, target) {
            $.ajax({
                url: "code.php",
                type: "POST",
                data: { deals: true, type: type },
                dataType: 'json',
                success: function (products) {
                    let html = '';
                    products.forEach(product => {
                        html += buildProductHTML(product);
                    });

                    // Destroy previous Owl if exists
                    if ($(target).hasClass("owl-loaded")) {
                        $(target).trigger('destroy.owl.carousel').removeClass('owl-loaded');
                    }

                    // Inject HTML
                    $(target).html(html);

                    // Initialize Owl Carousel
                    $(target).owlCarousel({
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        responsive: {
                            0: { items: 1 },
                            576: { items: 2 },
                            768: { items: 2 },
                            992: { items: 3 } // 3 products per row
                        }
                    });
                }
            });
        }

        // ==========================================
        // 4️⃣ Initial Load
        // ==========================================
        loadSaleProducts(2, "#onSale .product-list-box");  // Replace 2 with your default Sale type
        loadDealProducts(7, "#dealProducts");             // Replace 7 with your Deals type

        // ==========================================
        // 5️⃣ Tab Click Handler for Sale Products
        // ==========================================
        $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
            let targetId = $(e.target).attr("data-bs-target");
            let box = $(targetId).find(".product-list-box");
            let type = box.data("type");

            if (box.html().trim() === "") {
                loadSaleProducts(type, box);
            }
        });

    });

</script>
<?php
include("./include/footer.php");
?>