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
                   <li class="breadcrumb-item active">Просмотр заказа</li>
               </ol>
           </nav>
      </div>
    </div>
       <div class="row">
            <div class="col-sm-12">
                <hr>
               <h4 align='center'>Просмотр заказа №<?= $id; ?></h4>
               <hr>
            </div>
       </div>
       <table class="table table-striped" style="margin: 10px; width:98%; margin-bottom: 40px">
            <tr>
                <td>Номер заказа</td>
                <td><?= $order['id']; ?></td>
            </tr>
            <tr>
                <td>Имя клиента</td>
                <td><?= $order['user_name']; ?></td>
            </tr>
            <tr>
                <td>Телефон клиента</td>
                <td><?= $order['user_phone']; ?></td>
            </tr>
            <tr>
                <td>Комментарий клиента</td>
                <td><?= $order['user_comment']; ?></td>
            </tr>
            <?php if ($order['user_id'] != 0): ?>
                <tr>
                    <td>ID клиента</td>
                    <td><?= $order['user_id']; ?></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td>Статус заказа</td>
                <td><?= Order::getStatusText($order['status']); ?></td>
            </tr>
            <tr>
                <td>Дата заказа</td>
                <td><?= $order['date']; ?></td>
            </tr>
          
       </table>
       <h4>Товары в заказе</h4>
       <table class="table table-striped" style="margin: 10px; width:98%; margin-bottom: 40px">
          <thead>
            <tr>
              <th scope="col">ID заказа</th>
              <th scope="col">Артикул товара</th>
              <th scope="col">Название</th>
              <th scope="col">Цена</th>
              <th scope="col">Количество</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($products as $product):  ?>
            <tr>
              <th scope="row"><?= $product['id']; ?></th>
              <th><?= $product['code']; ?></th>
              <th><?= $product['name']; ?></th>
              <th><?= $product['price']; ?></th>
              <th><?= $productsQuantity[$product['id']]; ?></th>
            </tr>
            <?php endforeach; ?>
           </tbody>
       </table>
       <a href="/admin/order/" class="btn btn-defalt back">
           <i class="fa fa-arrow-left"></i>
           Назад
       </a>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
