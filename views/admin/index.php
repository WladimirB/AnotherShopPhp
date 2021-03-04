<?php include ROOT.'/views/layouts/header_admin.php'; ?>
       
<div class="content">
    <hr>
    <h4 align='center'>Добро пожаловать, Администратор!</h4>
    <hr>
    <p>Вам доступны такие возможности:</p>
    <hr>
    
    <ul class="list-unstyled">
        <li>
            <a href="/admin/product">Управление товарами</a>
        </li>
        <li>
            <a href="/admin/category">Управление категории</a>
        </li>
        <li>
            <a href="/admin/order">Управление заказами</a>
        </li>
    </ul>
</div>
        
<?php include ROOT.'/views/layouts/footer_admin.php'; ?>
