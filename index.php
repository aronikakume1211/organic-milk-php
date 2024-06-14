<?php
session_start();
include_once('model/ProductModel.php');
$productModel = new ProductModel();
$productResults = $productModel->getProduts();

// var_dump($productResults);
// $cartData = $_SESSION['cart'];
// var_dump(count($cartData));

?>
<?php include_once('view/header.php') ?>


<!-- Hero Section Start -->
<section class="hero_container_fluid" style="">
    <div class="hero_container">
        <h1>Fresh Organic</h1>
        <h2>A2 Milk</h2>
        <h3>Now Available</h3>
        <div class="title_underline"></div>
        <p>Special Launch Price For One Month</p>

        <div class="price_offer_container">
            <div class="price_container">
                <span>₹</span>
                <p>499</p>
            </div>
            <div class="offer_text">
                <p>
                    1 Liter / Day <br>
                    for <strong>30 Days</strong>
                </p>
                <span class="underline"></span>
            </div>
        </div>

        <a href="#" class="hero_shop_now">Shop Now</a>
    </div>
</section>

<!-- Hero Section End -->


<!-- Features Start -->
<section class="features_container_fluid">
    <div class="features_container">
        <ul class="features_lists">
            <li>
                <img src="assets/images/features/Group_1.png" alt="">
                <p>Trained Organic Farmers</p>
            </li>
            <li>
                <img src="assets/images/features/Group_2.png" alt="">
                <p>Chemical-free soil
                    and Organic Fodder</p>
            </li>
            <li>
                <img src="assets/images/features/Group_3.png" alt="">
                <p>Use of organic manure</p>
            </li>
            <li>
                <img src="assets/images/features/Group_4.png" alt="">
                <p>Specially-curated
                    balanced diets for cows</p>
            </li>
            <li>
                <img src="assets/images/features/Group_5.png" alt="">
                <p>Happy, healthy cows</p>
            </li>
            <li>
                <img src="assets/images/features/Group_6.png" alt="">
                <p>Contactless milking and
                    packaging processes
                    & distribution</p>
            </li>
            <li>
                <img src="assets/images/features/Group_7.png" alt="">
                <p>Chilled to 4° celsius
                    upon milking</p>
            </li>
            <li>
                <img src="assets/images/features/Group_8.png" alt="">
                <p>Free from Antibiotics
                    and Adulteration</p>
            </li>
            <li>
                <img src="assets/images/features/Group_9.png" alt="">
                <p>Delivered Fresh Everyday</p>
            </li>
            <li>
                <img src="assets/images/features/Group_10.png" alt="">
                <p>Assured 7 AM Doorstep
                    Milk and Grocery Delivery</p>
            </li>
        </ul>

    </div>
</section>
<!-- Features End -->

<!-- Products List  Start -->


<ul class="custom_woocommerce_products d-flex flex-wrap gap-40 justify-between">

    <?php while ($row = mysqli_fetch_row($productResults)) : ?>
        <?php
        $product_id = $row['id'];
        $image = $row[1];
        $product_title = $row[2];
        $excerpt = $row[3];
        $regular_price = $row[4];
        $sale_price = $row[5];
        var_dump($product_id);
        ?>

        <!-- <li class="custom_woocommerce_product">
            <ul class="bulk_saving_banner">
                <li>
                    ₹20 Launch Offer
                </li>
            </ul>
            <div class="product_image_container">
                <img src="<?php echo $image; ?>" alt="<?php echo $product_title; ?>">
            </div>
            <div class="product_contents">
                <div>

                    <h3 class="custom_product_title"><?php echo $product_title; ?></h3>
                    <div class="product_short_description">
                        
                        <?php echo $excerpt; ?>

                    </div>
                    <div class="hr"></div>
                    <p class="delivery_is_free">Delivery is free</p>
                    <div class="price_container">
                        <p class="save_price">Save ₹<?php echo $sale_price - $regular_price; ?></p>
                        <p class="prices"><?php echo $sale_price; ?></p>

                    </div>
                </div>
                <div class="buy-now-btn-block">
                    <a class="buy-now-button" data-product-id="<?php echo $product_id; ?>" disablebtn="true">
                        <span>Buy Now</span>
                        <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                    </a>
                </div>

            </div>
        </li> -->

    <?php endwhile; ?>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>
    <li class="custom_woocommerce_product">
        <ul class="bulk_saving_banner">
            <li>
                ₹20 Launch Offer
                <!-- <p>
                                </p> -->
            </li>
        </ul>
        <div class="product_image_container">
            <img src="assets/images/features/cow-ghee-removebg-preview.png" alt="">
        </div>
        <div class="product_contents">
            <div>

                <h3 class="custom_product_title">2 Dozen Fresh Organic Large eggs (24oct)</h3>
                <div class="product_short_description">
                    <ul>
                        <li>Fresh & Organic Direct from the Farm</li>
                        <li>100% Pure, Chemical-free, and Farm-fresh</li>
                        <li>No Added Water, Powder, or Thickneres</li>
                        <li>Delivered Fresh Within 2 Hours of Milking</li>
                    </ul>

                </div>
                <div class="hr"></div>
                <p class="delivery_is_free">Delivery is free</p>
                <div class="price_container">
                    <p class="save_price">Save ₹12</p>
                    <p class="prices"><span><span class="product_currency">₹</span>23</span><span class="regular">₹43</span></p>

                </div>
            </div>
            <div class="buy-now-btn-block">
                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                    <span>Buy Now</span>
                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                </a>
            </div>

        </div>
    </li>

</ul>

<!-- Product List End -->

<!-- Desi Goodness Start -->
<section class="goodness_container_fluid">
    <div class="goodness_container">
        <h2>Desi Goodness</h2>
        <p>The true indian Milk</p>

        <div class="cow_features_container">
            <div class="cow_left_features">
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_1.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>No Use of growth hormone injections,
                        antibiotics or GMOs
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="86" height="88" viewBox="0 0 86 88" fill="none">
                        <path d="M0 3.5L7.99555 11.8309L11.2126 0.74112L0 3.5ZM8.35278 6.96421C30.1743 13.5519 45.5305 20.4599 57.1439 32.2338C68.7563 44.0067 76.7319 60.754 83.5314 87.2486L85.4686 86.7514C78.634 60.12 70.5441 42.9712 58.5678 30.8293C46.5924 18.6883 30.8366 11.6627 8.9308 5.04956L8.35278 6.96421Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/up_1.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_2.svg" alt="feature one" width="53" height="43">
                    </div>
                    <p>Managed pastures and
                        free-ranging cows</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="137" height="50" viewBox="0 0 137 50" fill="none">
                        <path d="M0.5 7.5L11.1133 12.0487L9.74596 0.582948L0.5 7.5ZM9.54359 7.42851C35.8134 4.60999 58.0666 5.18998 78.3238 11.384C98.5645 17.5729 116.892 29.3914 135.267 49.1803L136.733 47.8194C118.163 27.8212 99.545 15.7813 78.9086 9.47138C58.2887 3.16649 35.7329 2.60715 9.33023 5.43992L9.54359 7.42851Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_2.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_3.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>We use
                        environmentally- friendly
                        glass milk bottles</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="122" height="28" viewBox="0 0 122 28" fill="none">
                        <path d="M0.5 8.50032L11.5716 11.7794L8.87557 0.551536L0.5 8.50032ZM9.46415 7.37612C30.4403 2.68257 48.0463 1.4066 65.3916 4.41886C82.7389 7.43147 99.9013 14.7465 119.968 27.3469L121.032 25.6531C100.826 12.9656 83.4174 5.51937 65.7338 2.44835C48.0482 -0.623012 30.1634 0.695072 9.02743 5.42439L9.46415 7.37612Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_3.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_4.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>Zero adulteration</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="43" viewBox="0 0 74 43" fill="none">
                        <path d="M0 39L8.68219 31.3873L10.9339 42.7127L0 39ZM8.62196 36.2662C27.9529 32.299 39.2965 28.9855 48.0122 23.9295C56.7048 18.887 62.8576 12.0688 71.716 0.879295L73.284 2.1207C64.4143 13.3245 58.0626 20.4115 49.0157 25.6595C39.992 30.8942 28.3611 34.2569 9.02404 38.2254L8.62196 36.2662Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/up_1.png" alt="" class="mobile_only">
                </div>
            </div>

            <img src="assets/images/features/cow-feature.jpg" alt="" class="center_cow">

            <div class="cow_right_features">
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_5.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>No Use of growth hormone injections,
                        antibiotics or GMOs</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="92" viewBox="0 0 108 92" fill="none">
                        <path d="M108 5L98.8584 12.0545L97.3199 0.610415L108 5ZM99.2379 7.18676C77.0337 10.6643 56.6787 17.7462 39.9052 30.8991C23.1434 44.0428 9.88628 63.305 1.96213 91.2727L0.0378723 90.7275C8.06201 62.4069 21.5343 42.763 38.6711 29.3253C55.796 15.8968 76.5084 8.72217 98.9284 5.21085L99.2379 7.18676Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_1.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_6.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>Managed pastures and
                        free-ranging cows</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="145" height="54" viewBox="0 0 145 54" fill="none">
                        <path d="M144.5 8.00001L133.702 12.0916L135.558 0.694647L144.5 8.00001ZM135.469 7.5428C104.764 3.02605 81.4393 4.8534 60.7669 12.6272C40.08 20.4066 21.9527 34.1759 1.69429 53.7194L0.30571 52.28C20.6402 32.6631 39.0006 18.6757 60.063 10.7552C81.1399 2.82925 104.826 1.01364 135.76 5.56409L135.469 7.5428Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_2.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_7.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>We use
                        environmentally- friendly
                        glass milk bottles</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="99" height="25" viewBox="0 0 99 25" fill="none">
                        <path d="M98.5 9.04823L87.2185 11.5101L90.7272 0.509093L98.5 9.04823ZM89.6493 7.2746C49.5294 -4.32141 18.7613 4.02974 2.27396 24.1809L0.726044 22.9144C17.8921 1.93375 49.6152 -6.37845 90.2047 5.35325L89.6493 7.2746Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_3.png" alt="" class="mobile_only">
                </div>
                <div class="side_feature_box">
                    <div>
                        <img src="assets/images/features/feature_8.png" alt="feature one" width="53" height="43">
                    </div>
                    <p>Zero adulteration</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="101" height="43" viewBox="0 0 101 43" fill="none">
                        <path d="M100.5 37L90.4772 42.7338L90.523 31.1869L100.5 37ZM91.4921 37.9643C69.5861 37.7672 53.1465 36.6355 39.0539 31.5581C24.915 26.464 13.2242 17.433 0.715714 1.6204L2.28429 0.379597C14.6312 15.988 26.0364 24.7422 39.7318 29.6765C53.4737 34.6275 69.6069 35.7674 91.5101 35.9643L91.4921 37.9643Z" fill="#004008" />
                    </svg>
                    <img src="assets/images/features/mobiles/down_4.png" alt="" class="mobile_only">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Desi Goodness End -->

<!-- Our Story Section -->
<section class="our_story_container_fluid">
    <div class="our_story_container">
        <h3>Test The Goodness</h3>
        <h2>The evidence for your trust</h2>
        <p class="first_para">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
            dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
            rambled it to make a type specimen book. It has survived not only five centuries, but also the leap into e
            lectronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the re
            lease of Letraset sheets containing Lorem Ipsum passages, and
            more recently with desk
            top publishing software like Aldus PageMaker including versions of Lorem I
        </p>

        <div class="our_story_contents d-flex">
            <div class="our_story_content">
                <p>
                    <strong>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                        dustry's standard dummy text ever since the 1500s, when an unknown printer t
                    </strong>
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                    dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
                    rambled it to make a tys, when an unknown printer took a galley of type and sc
                    rambled it to make a type specimen book.
                </p>

                <!-- div footer circle -->
                <div class="our_story_footer_circle_container">
                    <div class="our_story_circle_left"></div>
                </div>
            </div>

            <div class="our_story_content_image">
                <img src="assets/images/our-story.png" alt="our story">
            </div>

            <div class="our_story_content" style="display: flex; justify-content: space-between; flex-direction: column;">

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                    dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
                    rambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                    dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
                    rambled it to make a type specimen book.
                </p>
                <!-- div footer circle -->
                <div class="our_story_footer_circle_container">
                    <div class="our_story_circle_right"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section End -->


<!-- Our Passion Start -->
<section class="our_passion_container_fluid">
    <div class="our_passion_container" style="background: url('assets/images/our-passion.jpg'); background-position: center;background-repeat: no-repeat; background-size: cover;">
        <div class="our_passion_container_overlay">
            <div class="our_passion_left">
                <div class="our_passion_left_titles">
                    <h2>Our <strong>Passion</strong></h2>
                </div>
                <p class="our_passion_content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                    dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
                    rambled it Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in
                    dustry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc
                    rambled it
                </p>
            </div>

            <div class="our_passion_right">
                <ul class="our_passions">
                    <li>
                        <img src="assets/images/Cow.png" alt="">
                        <div class="title_content">
                            <h3>Protect Cows</h3>
                            <p>We take care of cows even
                                when they stop giving milk</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/images/Vector.png" alt="">
                        <div class="title_content">
                            <h3>Protect Cows</h3>
                            <p>We take care of cows even
                                when they stop giving milk</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/images/our-passion-group.png" alt="">
                        <div class="title_content">
                            <h3>Protect Cows</h3>
                            <p>We take care of cows even
                                when they stop giving milk</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/images/Cow.png" alt="">
                        <div class="title_content">
                            <h3>Protect Cows</h3>
                            <p>We take care of cows even
                                when they stop giving milk</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Our Passion End -->

<!-- Testimonial Start -->
<section class="mebrik_testimonails ">
    <section id="hero_section_thumbnails_container" class="splide" aria-label="hero section">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>
                <li class="mebrik_testimonial splide__slide">

                    <div class="mebrik_testimonial_content">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="39" height="39" transform="matrix(1 0 0 -1 0 39)" fill="white" />
                            <path d="M21.1241 7.01998V19.7992L28.7318 31.98H35.3137L29.4584 20.5685H35.3137V7.01998H21.1241ZM3.90002 7.01998V19.7992L11.3795 31.98H18.1324L12.1488 20.5685H18.1324V7.01998H3.90002Z" fill="#E3EBFF" />
                        </svg>
                        <p>
                            A2 Simplybetter has transformed the way I consume dairy products.
                            Their buffalo milk subscriptions have become an essential part of my lifestyle.
                            The freshness and purity of their products are unmatched, and I love the convenience
                            of having them delivered straight to my doorstep every day around 6:30 to my doorstep.
                            Thank you, A2 Simplybetter, for making such fantastic products!
                        </p>
                    </div>
                    <div class="mebrik_testimonial_info">
                        Rohan Singh
                    </div>

                </li>

            </ul>
        </div>
    </section>

</section>

<!-- Testimonial End -->

<!-- FAQ's Start -->

<section class="faqs_container_fluid">
    <h2 class="faqs_title">Customer F.A.Q.s</h2>
    <div class="faqs_container">
        <ul class="faqs_left_container">
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
        </ul>

        <ul class="faqs_right_container">
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
            <li>
                <h3>When will my order be delivered?</h3>
                <p>We deliver orders on a weekly basis and you will be given an estimated 
                    delivery date prior to confirming your order.
                    Orders can arrive in as early as 2 days depending upon your order date.
                </p>
            </li>
        </ul>
    </div>
</section>

<!-- FAQ's End -->

<script type="text/javascript">
    function checkBtn() {
        $.getJSON("api/getcart.php", function(result) {

            $.each(result, function(i, field) {
                $('[data-product-id="' + i + '"]').attr('disablebtn', true);
            });
        });
    }
    jQuery(document).ready(function($) {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        // setInterval(function () {
        //       moveRight();
        //   }, 14000);
        //   var slideCount = $('#slider ul li').length;
        //   var slideWidth = $('#slider ul li').width();
        //   var slideHeight = $('#slider ul li').height();
        //   var sliderUlWidth = slideCount * slideWidth;

        //   $('#slider').css({ width: slideWidth, height: slideHeight });

        //   $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

        //   $('#slider ul li:last-child').prependTo('#slider ul');

        //   function moveLeft() {
        //       $('#slider ul').animate({
        //           left: + slideWidth
        //       }, 200, function () {
        //           $('#slider ul li:last-child').prependTo('#slider ul');
        //           $('#slider ul').css('left', '');
        //       });
        //   };

        //   function moveRight() {
        //       $('#slider ul').animate({
        //           left: - slideWidth
        //       }, 200, function () {
        //           $('#slider ul li:first-child').appendTo('#slider ul');
        //           $('#slider ul').css('left', '');
        //       });
        //   };

        //   $('a.control_prev').click(function () {
        //       moveLeft();
        //   });

        //   $('a.control_next').click(function () {
        //       moveRight();
        //   });

    });
    checkBtn();
</script>
<?php include_once('view/cart.php') ?>
<?php include_once('view/footer.php') ?>