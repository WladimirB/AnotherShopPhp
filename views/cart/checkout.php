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
                
                   <?php if ($result) { ?>
                   <h4>Заказ оформлен. Мы Вам перезвоним.</h4>
                   <?php } else { ?>
                   <h4>Выбрано товаров:  <?= $totalQuantity; ?>, на сумму:  <?= $totalPrice; ?> руб.</h4>
                   <p>
                       Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.
                   </p>
                <form action="#" method="post">
                  <div class="form-row">
                   <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                     <p>Ваше имя</p>
                      <input type="text" name="userName" class="form-control" value="<?= $userName ?>"  placeholder="Имя" required autofocus>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                     <p>Номер телефона</p>
                      <input type="number_format" name="userPhone" class="form-control" value="<?= $userPhone ?>"  placeholder="Номер телефона" required>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                     <p>Комментарий к заказу</p>
                      <input type="text" name="userComment" class="form-control" value="<?= $userComment ?>"  placeholder="Сообщение">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                    <input type="submit" name="submit" class="btn btn-primary" value="Оформить заказ" >
                   </div>
                  </div>
                </form>
                <?php } ?>
            </div><div class="col-sm-6 col-md-6">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach($errors as $error): ?>
                            <li class="feel-back">
                                <?= $error; ?>
                            </li>
                            <?php endforeach; ?>
                    </ul>
                    <?php endif;?>
            </div>
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
