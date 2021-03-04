<?php include ROOT.'/views/layouts/header.php'; ?>
       
<div class="content">
             <hr>
              <h3 align='center'>Вход на сайт</h3>
               <hr>
                <form action="#" method="post">
                  <div class="form-row">
                   <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <input type="email" name="email" class="form-control" value="<?= $email ?>"  placeholder="Email" required autofocus>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <input type="password" name="password" class="form-control" value="<?= $password ?>"  placeholder="Пароль" required>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                    <input type="submit" name="submit" class="btn btn-primary" value="Войти" >
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
        </div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
