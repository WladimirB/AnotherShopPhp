<?php include ROOT.'/views/layouts/header_admin.php'; ?>
       
<div class="content">
   <div class="row">
      <div class=" col-sm-12">  
           <nav arial-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="/admin">Админка</a>
                   </li>
                   <li class="breadcrumb-item">
                       <a href="/admin/order">Управление заказами</a>
                    </li>
                   <li class="breadcrumb-item active">
                       Редактировать заказ
                    </li>
               </ol>
           </nav>
      </div>
    </div>
    <h4 align="center">Редактировать заказ №<?= $id; ?></h4>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-row">
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Имя клиента</p>
                  <input type="text" name="userName" class="form-control" value="<?=  $order['userName']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Телефон клиента</p>
                  <input type="text" name="userPhone" class="form-control" value="<?=  $order['userPhone']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Комментарий клиента</p>
                  <input type="text" name="userComment" class="form-control" value="<?= $order['userComment']; ?>"  placeholder="">
            </div>
           
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Дата оформления</p>
                  <input type="text" name="date" class="form-control" value="<?= $order['date']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Статус заказа</p>
                 <select name="status" id="">
                     <option value="1" <?php if ($order['status'] == 1) echo 'selected'; ?>>
                         Новый заказ
                    </option>
                     <option value="1" <?php if ($order['status'] == 2) echo 'selected'; ?>>
                         В обработке
                    </option>
                     <option value="1" <?php if ($order['status'] == 3) echo 'selected'; ?>>
                         Доставляется
                    </option>
                     <option value="1" <?php if ($order['status'] == 4) echo 'selected'; ?>>
                         Выполнен
                    </option>
                 </select>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                <input type="submit" name="submit" class="btn btn-primary" value="Сохранить" >
           </div>
        </div>
    </form>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
