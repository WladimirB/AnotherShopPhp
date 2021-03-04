 <?php include ROOT.'/views/layouts/header.php'; ?>
       
        <div class="content">
           <hr>
           <h3 align="center">
               Корзина
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
                
                <div class="row col-sm-9 col-md-9">
                   <?php if ($productsInCart) { ?>
                   <h4>Вы выбрали такие товары:</h4>
                   <table class="table ">
                      <thead>
                        <tr>
                          <th scope="col">Код товара</th>
                          <th scope="col">Название</th>
                          <th scope="col">Стоимость, руб.</th>
                          <th scope="col">Количество, шт</th>
                          <th scope="col">Удалить</th>
                        </tr>
                      </thead>
                    <?php foreach ($products as $product) { ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?= $product['code']; ?></th>
                          <td>
                              <a href="/product/<?= $product['id']; ?>">
                                  <?= $product['name']; ?>
                              </a>
                          </td>
                          <td><?= $product['price']; ?></td>
                          <td>
                              <?= $productsInCart[$product['id']]; ?>
                          </td>
                          <td>
                            <a class="btn btn-default checkout" href="/cart/delete/<?php echo $product['id'];?>">
                                <i class="fa fa-times"></i>
                            </a>
                          </td>
                        </tr>
                <?php } ?>
                        <tr>
                          <th scope="row" colspan="2">
                              Общая стоимость:
                          </th>
                          <td><?= $totalPrice; ?></td>
                          <td colspan="2"></td>
                        </tr>
                      </tbody>
                    </table>
                    <a class="btn btn-outline-success" href="/cart/checkout" role="button">Оформить заказ</a>

                <?php } else {
                            echo '<h4>Корзина пуста</h4>';
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
