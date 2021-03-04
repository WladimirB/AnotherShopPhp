<?php include ROOT.'/views/layouts/header_admin.php'; ?>
       
<div class="content">
   <div class="row">
      <div class=" col-sm-12">  
           <nav arial-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="/admin">Админка</a>
                   </li>
                   <li class="breadcrumb-item active">Управление товарами</li>
               </ol>
           </nav>
      </div>
    </div>
      <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-11">
               <a href="/admin/product/create" class="btn btn-defaul back">
                   <i class="fa fa-plus"></i>
                   Добавить товар
               </a>
          </div>
      </div>
       <div class="row">
            <div class="col-sm-12">
                <hr>
               <h4 align='center'>Список товаров</h4>
               <hr>
            </div>
       </div>
       <table class="table table-striped" style="margin: 10px; width:98%; margin-bottom: 40px">
          <thead>
            <tr>
              <th scope="col">ID товар</th>
              <th scope="col">Артикул</th>
              <th scope="col">Название товара</th>
              <th scope="col">Цена</th>
              <th scope="col">Редактировать</th>
              <th scope="col">Удалить</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($productsList as $product):  ?>
            <tr>
              <th scope="row"><?= $product['id']; ?></th>
              <th><?= $product['code']; ?></th>
              <th><?= $product['name']; ?></th>
              <th><?= $product['price']; ?></th>
              <th>
                  <a href="/admin/product/update/<?= $product['id']; ?>" title="Редактировать">
                      <i class="fa fa-edit"></i>
                  </a>
                </th>
              <th>
                  <a href="/admin/product/delete/<?= $product['id']; ?>" title="Удалить">
                      <i class="fa fa-times"></i>
                  </a>
                </th>
            </tr>
            <?php endforeach; ?>
           </tbody>
       </table>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
