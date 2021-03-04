<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concomitant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
              integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/style.css">
</head>
<body>
    <div class="container no-gutters">
       <div class="topline"></div>
        <div class="b-header">
           <div class="b-social">
              <a class="b-social__img 
                b-social__img_margin" href="#">
                 <img src="/template/img/icon-linkedin.svg" alt="">
              </a>
              <a class="b-social__img 
                b-social__img_margin" href="#">
                 <img src="/template/img/icon-twitter.svg" alt="">
              </a>
              <a class="b-social__img 
                b-social__img_margin" href="#">
                 <img src="/template/img/icon-pinterest.svg" alt="">
              </a>
              <a class="b-social__img 
                b-social__img_margin" href="#">
                 <img src="/template/img/icon-google-plus.svg" alt="">
              </a>
              <a class="b-social__img 
                b-social__img_margin" href="#">
                 <img src="/template/img/icon-rss.svg" alt="">          
              </a>
           </div>
            <div class="b-logoName b-logoName__header">
                <a href="/">Concomitant</a>
                <div class="b-logoName__text">
                    Free PSD Website Template
                </div>
            </div>
            <div class="b-loginNav b-loginNav_header">
                <a class="b-loginNav__item" href="/cart/">
                    Корзина(
                            <span id="cart-count"><?= Cart::countItems();?></span>
                            )
                </a>
                <span class="b-loginNav__divider" >|</span>
                <?php if (User::isGuest()): ?>
                <a class="b-loginNav__item" href="/user/login/">
                    Войти
                </a>
                <span class="b-loginNav__divider" >|</span>
                <a class="b-loginNav__item" href="/user/register/">
                    Регистрация
                </a>
                <span class="b-loginNav__divider" >|</span>
                <?php else: ?>
                <a class="b-loginNav__item" href="/cabinet/">
                    Аккаунт
                </a>
                <span class="b-loginNav__divider" >|</span>
                <a class="b-loginNav__item" href="/user/logout/">
                    Выход
                </a>
                <span class="b-loginNav__divider" >|</span>
                <?php endif; ?>
            </div>
        </div>
        <div class="b-mainMenu b-mainMenu_cancelPadding">
            <div class="b-mainMenu__lists">
                        <a class="b-mainMenu__list" href="/">
                            главная
                        </a>
                        <a class="b-mainMenu__list" href="/catalog/">
                            Каталог 
                        </a>
                        <!--<a class="b-mainMenu__list" href="/blog/">
                            блог
                        </a>-->
                        <a class="b-mainMenu__list" href="#">
                            О магазине
                        </a>
                        <a class="b-mainMenu__list" href="/contacts/">
                            контакты
                        </a>
                     <!--   <a class="b-mainMenu__list" href="/cart/">
                            корзина (
                            <span id="cart-count"><? // Cart::countItems();?></span>
                            )
                        </a>-->
            </div>
            <form class="b-siteSearch b-siteSearch_topMargin">
                <input class="b-siteSearch__field b-siteSearch__field_left" type="text" placeholder="Search Our Website...">
                <button class="b-siteSearch__btn" >search</button>
            </form>
        </div>