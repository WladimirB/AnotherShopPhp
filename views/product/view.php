 <?php include ROOT.'/views/layouts/header.php'; ?>
       
        <div class="content">
             <div class="row no-gutters b-properties b-properties_topMargin b-properties_Margin">
                <div class="col-sm-3 col-md-3 b-property__element">
                    <div class="list-group">
                        <?php foreach ($categories as $categoryItem){ ?>
                        <a href="/category/<?php echo $categoryItem['id'] ?>" class="list-group-item list-group-item-action <?php if($categoryId ==  $categoryItem['id']) echo 'active' ?>">
                            <?php echo $categoryItem['name'];?>
                        </a>
                      <?php }; ?>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-8 b-product-details">
                    <div class="row no-gutters">
                        <div class="col-sm-4">
                            <img class="b-property__img"
                     src="<?= Product::getImage($product['id']); ?>" alt="" width="150px">
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <div class="b-product-information">
                                <h2 class="" align="center">
                                   <?= $product['name'];  ?>
                                </h2>
                                <h3><?= $product['price'];  ?> руб.</h3>
                                <p>
                                   Код товара:
                                    <?= $product['code'];  ?>
                                </p>
                                <p>
                                    Производитель: 
                                    <?= $product['brand'];  ?>
                                </p>
                                <div class="b-property__btn">
                                    <a  href="/cart/add/<?= $product['id']; ?>" class="btn btn-success btn-sm add-to-cart" data-id="<?= $product['id']; ?>">
                                        В корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <p>
                            Описание: 
                            <?= $product['description'];  ?>
                        </p>
                    </div>
                </div>
                
                </div>
            </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
