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
                   <li class="breadcrumb-item active">Удалить товара</li>
               </ol>
           </nav>
      </div>
    </div>
    <h4>Удалить товар №<?= $id; ?> ?</h4>
    <p>Вы действительноь хотите удалить этот товар?</p>
    <form action="#" method="post">
        <div class="form-row">
            <div class="col-md-2">
                <input type="submit" name="submit" class="btn btn-primary" value="Удалить" >
           </div>
        </div>
    </form>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
