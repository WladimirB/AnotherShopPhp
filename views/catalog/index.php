 <?php include ROOT.'/views/layouts/header.php'; ?>
       
        <div class="content">
           <hr>
           <h3 align="center">
               Каталог товаров
           </h3>
           <hr>
            <!--<div class="b-mainSlider b-mainSlider_cancelPadding
               b-mainSlider-bottomBorder">
                <div>
                    <img  class="b-mainSlider__img"
                     src="template/img/slide1.jpg" alt="">
                </div>
            </div>-->
             <div class="row no-gutters b-properties b-properties_topMargin b-properties_Margin">
                <div class="col-sm-3 col-md-3 b-property__element">
                    <div class="list-group">
                        <?php foreach ($categories as $categoryItem){ ?>
                        <a href="/category/<?php echo $categoryItem['id'] ?>" class="list-group-item list-group-item-action ">
                            <?php echo $categoryItem['name'];?>
                        </a>
                      <?php }; ?>
                    </div>
                </div>
                <div class="row col-sm-9 col-md-9">
                    <?php foreach ($latestProducts as $product) { ?>
                <div class="col-sm-4 col-md-4 b-property__element">
                    <img class="b-property__img"
                     src="<?= Product::getImage($product['id']); ?>" alt="" width="150px">
                     <h3><?= $product['price']; ?></h3>
                    <div class="b-property__header">
                         <a href="/product/<?= $product['id']; ?>">
                             <?= $product['name']; ?>
                         </a>
                    </div>
                  <!--  <div class="b-property__desc">
                         <?//= $product['description']; ?>
                    </div>-->
                    <div class="b-property__btn">
                        <a  href="/cart/add/<?= $product['id']; ?>" class="btn btn-success btn-sm add-to-cart" data-id="<?= $product['id']; ?>">
                            В корзину
                        </a>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
