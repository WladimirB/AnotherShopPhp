<?php include ROOT.'/views/layouts/header_admin.php'; ?>
       
<div class="content">
   <div class="row">
      <div class=" col-sm-12">  
           <nav arial-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="/admin">Админка</a>
                   </li>
                   <li class="breadcrumb-item active">Управление категориями</li>
               </ol>
           </nav>
      </div>
    </div>
      <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-11">
               <a href="/admin/category/create" class="btn btn-defaul back">
                   <i class="fa fa-plus"></i>
                   Добавить категорию
               </a>
          </div>
      </div>
       <div class="row">
            <div class="col-sm-12">
                <hr>
               <h4 align='center'>Список категорий</h4>
               <hr>
            </div>
       </div>
       <table class="table table-striped" style="margin: 10px; width:98%; margin-bottom: 40px">
          <thead>
            <tr>
              <th scope="col">ID категории</th>
              <th scope="col">Название категории</th>
              <th scope="col">Порядковый номер</th>
              <th scope="col">Статус</th>
              <th scope="col">Редактировать</th>
              <th scope="col">Удалить</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($categoriesList as $category):  ?>
            <tr>
              <th scope="row"><?= $category['id']; ?></th>
              <th><?= $category['name']; ?></th>
              <th><?= $category['sort_order']; ?></th>
              <th><?= $category['status']; ?></th>
              <th>
                  <a href="/admin/category/update/<?= $category['id']; ?>" title="Редактировать">
                      <i class="fa fa-edit"></i>
                  </a>
                </th>
              <th>
                  <a href="/admin/category/delete/<?= $category['id']; ?>" title="Удалить">
                      <i class="fa fa-times"></i>
                  </a>
                </th>
            </tr>
            <?php endforeach; ?>
           </tbody>
       </table>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
