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
                       <a href="/admin/product">Управление товарами</a>
                    </li>
                   <li class="breadcrumb-item active">
                       Редактировать товар
                    </li>
               </ol>
           </nav>
      </div>
    </div>
    <h4 align="center">Редактировать товар</h4>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-row">
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Название товара</p>
                  <input type="text" name="name" class="form-control" value="<?=  $product['name']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Артикул</p>
                  <input type="text" name="code" class="form-control" value="<?=  $product['code']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Стоимость</p>
                  <input type="text" name="price" class="form-control" value="<?= $product['price']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Категории</p>
                 <select name="category_id" id="">
                     <?php if (is_array($categoriesList)):  ?>
                         <?php foreach ($categoriesList as $category): ?>
                             <option value="<?=  $category['id']; ?>" <?php if ($product['category_id'] ==  $category['id']) echo 'selected'; ?>>
                                 <?= $category['name']; ?>
                             </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                 </select>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Производитель</p>
                  <input type="text" name="brand" class="form-control" value="<?= $product['brand']; ?>"  placeholder="" required>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Изображение товара</p>
                 <img src="<?= Product::getImage($product['id']); ?>" width="200px" alt="">
                  <input type="file" name="image" class="form-control" value="<?=  $product['image']; ?>"  placeholder="" >
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Детальное описание</p>
                <textarea name="description" class="form-control" required>
                    <?= $product['description']; ?>
                </textarea>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Наличие на складе</p>
                 <select name="availability" id="">
                     <option value="1" <?php if ($product['availability'] == 1) echo 'selected'; ?>>Да</option>
                     <option value="0" <?php if ($product['availability'] == 0) echo 'selected'; ?>>Нет</option>
                 </select>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Новинка</p>
                 <select name="is_new" id="">
                     <option value="1" <?php if ($product['is_new'] == 1) echo 'selected'; ?>>Да</option>
                     <option value="0" <?php if ($product['is_new'] == 0) echo 'selected'; ?>>Нет</option>
                 </select>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Рекоммендуемые</p>
                 <select name="is_recommended" id="">
                     <option value="1" <?php if ($product['is_recommended'] == 1) echo 'selected'; ?> >Да</option>
                     <option value="0" <?php if ($product['is_recommended'] == 1) echo 'selected'; ?>>Нет</option>
                 </select>
            </div>
           <div class="col-sm-3"></div>
           <div class="col-sm-3"></div>
            <div class="form-group col-sm-6">
                 <p>Статус</p>
                 <select name="status" id="">
                     <option value="1" <?php if ($product['status'] == 1) echo 'selected'; ?> >Отображается</option>
                     <option value="0" <?php if ($product['status'] == 0) echo 'selected'; ?>>Скрыт</option>
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
