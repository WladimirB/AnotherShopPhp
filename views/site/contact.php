<?php include ROOT.'/views/layouts/header.php'; ?>
       
<div class="content">
             <hr>
             <?php if (!$result){ ?>
              <h3 align='center'>Обратная связь</h3>
               <hr>
                <form action="#" method="post">
                  <div class="form-row">
                   <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <input type="email" name="email" class="form-control" value="<?= $userEmail ?>"  placeholder="E-mail" required autofocus>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <input type="text" name="userText" class="form-control" value="<?= $userText ?>"  placeholder="Сообщение" required>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                    <input type="submit" name="submit" class="btn btn-primary" value="Отправить" >
                   </div>
                  </div>
                </form>
                <div class="col-sm-6 col-md-6">
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
            <?php } else {
                        echo '<h3>Сообщение отправлено!     Мы ответи на указанный email.</h3>';
                    }
            ?> 
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
