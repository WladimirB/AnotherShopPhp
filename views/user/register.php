<?php include ROOT.'/views/layouts/header.php'; ?>
    <div class="content">
        <hr>
        <?php if (!$result){ ?>
            <h3 align='center'>Регистрация на сайте</h3>
            <hr>
            <form action="#" method="post">
                <div class="form-row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Имя</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name" value="<?= $name ?>" autofocus required> </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" value="<?= $email ?>" placeholder="Email" required> </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Пароль</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" value="<?= $password ?>" placeholder="Пароль" required> </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <input type="submit" name="submit" class="btn btn-primary"> </div>
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
                        echo '<h3>Вы зарегистрированы!</h3>';
                    }
            ?> 
    </div>
    <?php include ROOT.'/views/layouts/footer.php'; ?>