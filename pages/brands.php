<link rel="stylesheet" type="text/css" href="./assets/css/brands.css" />


<div class="container my-5">
  <div class="row row-eq-height">
    <?php
    $sql = "SELECT * FROM `product` ORDER BY `product_id` DESC LIMIT 8";

    if ($result = mysqli_query($db, $sql))
      while ($row = mysqli_fetch_assoc($result)) :
        extract($row); ?>
      <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
        <div class="product-card h-100 mb-0">
          <a class="product-card__content" href="#">
            <span class="product-card__img" style='background-image:url(./photo/<?= $product_image ?>)'></span>
            <span class="product-card__title">
              <?= $product_name ?>
            </span>
            <span class="product-card__price">
              RS <?=$product_price?>
            </span>
          </a>
          <div class="product-card__actions">
            <a class="product-card__btn mr-3" href="#">
              <i class="fas fa-plus mr-2"></i>
              Add to Cart
            </a>
            <a class="product-card__icon-btn" href="#">
              <i class="fas fa-heart"></i>
            </a>
          </div>
        </div>
      </div>
    <?php endwhile ?>
  </div>
  <div class="text-center">
    <a href="?page=gallery" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      View gallery
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
  </div>
</div>