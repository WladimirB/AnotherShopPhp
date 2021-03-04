<?php include ROOT.'/views/layouts/header_admin.php'; ?>
       
<div class="content">
   <div class="row">
      <div class=" col-sm-12">  
           <nav arial-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="/admin">Админка</a>
                   </li>
                   <li class="breadcrumb-item active">Управление заказами</li>
               </ol>
           </nav>
      </div>
    </div>
       <div class="row">
            <div class="col-sm-12">
                <hr>
               <h4 align='center'>Список заказов</h4>
               <hr>
            </div>
       </div>
       <table class="table table-striped" style="margin: 10px; width:98%; margin-bottom: 40px">
          <thead>
            <tr>
              <th scope="col">ID заказа</th>
              <th scope="col">Имя покупателя</th>
              <th scope="col">Телефон</th>
              <th scope="col">Дата оформления</th>
              <th scope="col">Статус</th>
              <th scope="col">Просмотр</th>
              <th scope="col">Редактировать</th>
              <th scope="col">Удалить</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($ordersList as $order):  ?>
            <tr>
              <th scope="row"><?= $order['id']; ?></th>
              <th><?= $order['user_name']; ?></th>
              <th><?= $order['user_phone']; ?></th>
              <th><?= $order['date']; ?></th>
              <th><?= Order::getStatusText($order['status']); ?></th>
              <th>
                  <a href="/admin/order/view/<?= $order['id']; ?>" title="Редактировать">
                      <i class="fa fa-edit"></i>
                  </a>
                </th>
              <th>
                  <a href="/admin/order/update/<?= $order['id']; ?>" title="Редактировать">
                      <i class="fa fa-edit"></i>
                  </a>
                </th>
              <th>
                  <a href="/admin/order/delete/<?= $order['id']; ?>" title="Удалить">
                      <i class="fa fa-times"></i>
                  </a>
                </th>
            </tr>
            <?php endforeach; ?>
           </tbody>
       </table>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
