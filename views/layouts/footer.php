
        <div class=" b-footer b-footer_margin">
            <div class="row no-gutters b-footer__information
               b-footer__information_grid
               b-footer__information_gridgap
               b-footer__information_margin">
                <div class="col-md-6 col-lg-3 b-footer__item">
                    <div class="b-footer__item_header">
                        CONTACT DETAILS
                    </div>
                    <div class="b-footer__item_contactDetails">
                        Convallisijusto vestas mus pellentum aenean 
                        sapibulum in aliquam volut pat integest nulla.
                    </div>
                    <div class="b-footer__item_contactDetals">
                        Tel: xxxxx xxxxxxxxxx
                        <br>
                        Fax: xxxxx xxxxxxxxxx
                        <br>
                        Email: contact@mydomain.com
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 b-footer__item">
                    <div class="b-footer__item_header">
                        QUICK LINKS
                    </div>
                    <div class="b-footer__item_quickLinksList">
                        <a class="b-footer__item_quickLink 
                           b-footer__item_quickLink_decor" href="#">
                            link text here
                        </a>
                        <a class="b-footer__item_quickLink 
                           b-footer__item_quickLink_decor" href="#">
                            link text here
                        </a>
                        <a class="b-footer__item_quickLink 
                           b-footer__item_quickLink_decor" href="#">
                            link text here
                        </a>
                        <a class="b-footer__item_quickLink 
                           b-footer__item_quickLink_decor" href="#">
                            link text here
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 b-footer__item">
                    <div class="b-footer__item_header">
                        FROM THE BLOG
                    </div>
                    <div class="b-footer__item_blog">
                        <div class="b-footer__item_blog_header">
                            blog post title
                        </div>
                        <div class="b-footer__item_blog_date">
                            Posted by Admin on 00.00.0000
                        </div>
                        <div class="b-footer__item_blog_text">
                            Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed facilispede estibulum.
                        </div>
                        <a class="b-moreDetails 
                           b-footer__moreDetails" href="#">
                            read more
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 b-footer__item">
                    <div class="b-footer__item_header">
                        Есть вопрос? Напишите нам
                    </div>
                    <div class="b-footer__form">
                        <form class="b-footer__newsletter" action="#" method="post">
                            <input class="b-footer__newsletterInput 
                            b-footer__newsletterInput_margin" type="email" placeholder="Email">
                            <input class="b-footer__newsletterInput 
                            b-footer__newsletterInput_margin" type="text" placeholder="Сообщение">
                            <input type="submit" name="submit" class="b-footer__newsletterButton" value="Отправить">
                        </form>
                    </div>
                </div>
            </div>
            <div class="b-footer__copyright">
                <div class="b-footer__copyright_Text
                b-footer__copyright_Text_left">
                    Copyright &copy; 2013 - All Rights Reserved
                     - Domain Name
                </div>
                <div class="b-footer__copyright_Text 
                b-footer__copyright_Text_right">
                    Template by OS Templates
                </div>
            </div>
        </div>
    </div>
    
<script src="/template/js/jquery.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
                crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function() {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>