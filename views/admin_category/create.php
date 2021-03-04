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
                       <a href="/admin/category">Управление категориями</a>
                    </li>
                   <li class="breadcrumb-item active">Добавить категорию</li>
               </ol>
           </nav>
      </div>
    </div>
    <div class="row">
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
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-row">
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Название категории</p>
                  <input type="text" name="name" class="form-control" value=""  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Порядковый номер</p>
                  <input type="text" name="sort_order" class="form-control" value=""  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Статус</p>
                 <select name="status" id="">
                     <option value="1" selected>Отображается</option>
                     <option value="0">Скрыт</option>
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
