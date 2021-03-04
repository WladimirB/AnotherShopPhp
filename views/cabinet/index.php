<?php include ROOT.'/views/layouts/header.php'; ?>
       
<div class="content">
           <h1 align="center">Личный кабинет</h1>
           <br>
           <h3>Hello,user <?= $_SESSION['user'] ?></h3>
           <ul class="list-group list-group-flush">
              <li class="list-group-item">
                  <a href="/cabinet/edit">
                      Редактировать данные
                  </a>
              </li>
              <? if (AdminBase::checkAdmin()): ?>
                    <li class="list-group-item">
                        <a href="/admin/">
                            Админпанель
                        </a>
                    </li>
              <? else: ?>
                  <li class="list-group-item">
                      <a href="/user/history">
                          Список покупок
                      </a>
                  </li>
              <? endif; ?>
            </ul>
</div>
        
<?php include ROOT.'/views/layouts/footer.php'; ?>
