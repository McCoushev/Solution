<?
$this->load->view('inc/header');
?>
<div id="wrap">

    <div class="container">
        <div class="page-header"> 

            <div class="navbar pull-right">
                <div class="navbar-inner "><? $this->load->view('inc/navigation'); ?></div>
            </div>
            <a href="/"><img id="logo" src="assets/img/logo.png"></a>
        </div>
        <div class="content page-contact"> 
            <h1 class="head">Контакты</h1>
            <div style="margin-bottom:40px;">
                <!--img class="img-polaroid" src="assets/img/map.jpg"-->
                <iframe width="1006" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=4-%D0%B9+%D0%9B%D0%B5%D1%81%D0%BD%D0%BE%D0%B9+%D0%BF%D0%B5%D1%80.,+4,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;aq=&amp;sll=55.778794,37.58719&amp;sspn=0.009944,0.027874&amp;ie=UTF8&amp;hq=&amp;hnear=4-%D0%B9+%D0%9B%D0%B5%D1%81%D0%BD%D0%BE%D0%B9+%D0%BF%D0%B5%D1%80.,+4,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;t=m&amp;ll=55.781931,37.587576&amp;spn=0.019307,0.08626&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ua/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=4-%D0%B9+%D0%9B%D0%B5%D1%81%D0%BD%D0%BE%D0%B9+%D0%BF%D0%B5%D1%80.,+4,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;aq=&amp;sll=55.778794,37.58719&amp;sspn=0.009944,0.027874&amp;ie=UTF8&amp;hq=&amp;hnear=4-%D0%B9+%D0%9B%D0%B5%D1%81%D0%BD%D0%BE%D0%B9+%D0%BF%D0%B5%D1%80.,+4,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;t=m&amp;ll=55.781931,37.587576&amp;spn=0.019307,0.08626&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
            </div>



            <div class="row page-contact-head">
                <div class="span8">
                    <form>
                        <h2>Мы рады любому диалогу, пишите нам.</h2>
                        <fieldset style="margin-left:0px;" class="span2">
                            <label><b>Имя</b> <small>(обязательно)</small></label>
                            <input type="text">
                        </fieldset>
                        <fieldset class="span2">
                            <label><b>email</b> <small>(обязательно)</small></label>
                            <input type="text">
                        </fieldset>
                        <fieldset class="span2">
                            <label><b>Телефон</b> <small>(желательно)</small></label>
                            <input type="text">
                        </fieldset>
                        <label><b>Ваше сообщение</b> <small>(обязательно)</small></label>
                        <textarea class="span8 clearfix" rows="5"></textarea>
                        <div class="controls controls-row">
                            <div style="text-align: right;"><button type="submit" class="btn btn-info">Отправить</button></div>
                            <div class="clearfix"></div>
                        </div>

                    </form>

                </div>

                <div class="span4 contact">
                    <h2>Наши координаты</h2>
                    <p>
                        Если Вы  проявили интерес к нашему предложению или у Вас возникли вопросы, 
                        то добро пожаловать к нам в офис. Мы находимся в центре Москвы, метро Белоруская (кольцевая) 
                        в бизнес Центре "Лесная Плаза", 4-ый Лесной переулок д.4, 5 этаж, офис 528. 
                        Для вашего удобства, перед тем как посетить нас, позвоните нам по тел +7 495 663 80 26 
                        и мы выберем удобное для всех нас время. 
                        <br /><br />
                        Или напишите нам.
                    </p>
                </div>

            </div>



        </div>



    </div>

    <?
    $this->load->view('inc/footer');
