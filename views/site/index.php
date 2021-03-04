<?php include ROOT.'/views/layouts/header.php'; ?>
       
        <div class="content">
            <!--<div class="b-mainSlider b-mainSlider_cancelPadding
               b-mainSlider-bottomBorder">
                <div>
                    <img  class="b-mainSlider__img"
                     src="template/img/slide1.jpg" alt="">
                </div>
            </div>-->
             <div class="row no-gutters b-properties b-properties_topMargin b-properties_Margin">
                <div class="col-sm-3 col-md-3 b-property__element">
                	<ul class="nav flex-column">
                		<?php foreach ($categories as $categoryItem){ ?>
                        <li class="nav-item">
                        	<a href="/category/<?php echo $categoryItem['id'] ?>" class="nav-link">
                            	<?php echo $categoryItem['name'];?>
                        	</a>
                        </li>
                      <?php }; ?>
					</ul>
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
                        <a  href="/cart/add/<?= $product['id']; ?>" class="btn btn-primary btn-sm add-to-cart" data-id="<?= $product['id']; ?>">
                            &#128722;В корзину
                        </a>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>
            <div class="b-fullWidthDivider b-fullWidthDivider_margin"></div>
            <div class="row no-guttersb-projectBox  b-projectBox_margin">
                <div class="col-md-6 col-lg-3 b-projectBox__item">
                    <img class="b-projectBox__img" src="img/projects/project1.jpg" alt="">
                    <div class="b-projectBox__header">
                        project title
                    </div>
                    <div class="b-projectBox__desc">
                        Portortornec condimenterdum eget consectetuer 
                        condis consequam pretium pellus sed mauris enim. 
                        Puruselit mauris nulla hendimentesque elit 
                        semper nam a sapien urna sempus.
                    </div>
                    <a class="b-moreDetails" href="#">
                        view details
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 b-projectBox__item">
                    <img class="b-projectBox__img" src="img/projects/project2.jpg" alt="">
                    <div class="b-projectBox__header">
                        project title
                    </div>
                    <div class="b-projectBox__desc">
                        Portortornec condimenterdum eget consectetuer 
                        condis consequam pretium pellus sed mauris enim. 
                        Puruselit mauris nulla hendimentesque elit 
                        semper nam a sapien urna sempus.
                    </div>
                    <a class="b-moreDetails" href="#">
                        view details
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 b-projectBox__item">
                    <img class="b-projectBox__img" src="img/projects/project3.jpg" alt="">
                    <div class="b-projectBox__header">
                        project title
                    </div>
                    <div class="b-projectBox__desc">
                        Portortornec condimenterdum eget consectetuer 
                        condis consequam pretium pellus sed mauris enim. 
                        Puruselit mauris nulla hendimentesque elit 
                        semper nam a sapien urna sempus.
                    </div>
                    <a class="b-moreDetails" href="#">
                        view details
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 b-projectBox__item">
                    <img class="b-projectBox__img" src="img/projects/project4.jpg" alt="">
                    <div class="b-projectBox__header">
                        project title
                    </div>
                    <div class="b-projectBox__desc">
                        Portortornec condimenterdum eget consectetuer 
                        condis consequam pretium pellus sed mauris enim. 
                        Puruselit mauris nulla hendimentesque elit 
                        semper nam a sapien urna sempus.
                    </div>
                    <a class="b-moreDetails" href="#">
                        view details
                    </a>
                </div>
            </div>
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
