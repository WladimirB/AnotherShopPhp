 <?php include ROOT.'/views/layouts/header.php'; ?>
       
        <div class="content">
           <hr>
           <h3 align="center">
               Каталог
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
                <div class="col-sm-3 b-property__element">
                    <ul class="list-group">
                        <?php foreach ($categories as $categoryItem){ ?>
                        <li class="list-group-item list-group-item-success">
                            <a href="/category/<?php echo $categoryItem['id']; ?>" class="list-group-item list-group-item-action <?php if($categoryId ==  $categoryItem['id']) echo 'active' ?>">
                                <?php echo $categoryItem['name'];?>
                            </a>
                        </li>
                      <?php }; ?>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
                <div class="row no-gutters col-sm-8">
                   
                    <?php foreach ($categoryProducts as $product): ?>
                <div class="col-sm-4 col-md-4 b-property__element">
                    <a href="/product/<?= $product['id']; ?>">
                        <img class="b-property__img"
                     src="<?= Product::getImage($product['id']); ?>" alt="" width="150px">
                    </a>
                     <h3><?= $product['price']; ?></h3>
                    <div class="b-property__header">
                         <a href="/product/<?= $product['id']; ?>">
                             <?= $product['name']; ?>
                         </a>
                    </div>
                    <div class="b-property__btn">
                        <a  href="/cart/add/<?= $product['id']; ?>" class="btn btn-success btn-sm add-to-cart" data-id="<?= $product['id']; ?>">
                            В корзину
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <div class="row no-gutters new-paggination">
                <?= $pagination->get(); ?>
            </div>
            <!--
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
        </div>-->
        <hr>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
