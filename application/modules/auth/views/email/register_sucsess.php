<html>
    <meta charset="utf-8">
    <head>
        <style>
            h3{text-transform: uppercase;color:#000;font-size: 18px;font-weight: bold;line-height: 21px;margin:5px 0;}
            h5{margin:5px 0;}
            div h3{color:#50baba;font-size: 16px;text-transform:uppercase;font-weight:bold;}
            div p{color:#cacaca;}
            table td{vertical-align: top;}
        </style>
    </head>
    <body>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td style="background-color: #0e6277;text-align:center;padding:0px 10px;"><img  src="http://co-op-solution.com/assets/img/logo.png" /></td>
            </tr>
        </table>
         <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td style="background-color: #f2f2f2;text-align:left;color:#2c2b2b;padding:15px;line-height:18px;">
                    <h3>Регистрация прошла успешно</h3>

                    <h5>Вы указали такие данные</h5><br />
                    <span>ФИО: <?= $first_name; ?></span><br />
                    <span>E-mail: <?= $email; ?></span><br />
                    <span>Паспорт: <?= $passport_series_number; ?></span><br />
                    <span>Дата выдачи: <?= $passport_date_issued; ?></span><br />
               
                    <span>Адрес регистрации: <?= $address_registration; ?></span><br />
                    <span>Дата рождения: <?= $birth_date; ?></span><br />
                    <span>ИНН: <?= $iin; ?></span><br />
                    
                    <span>Желаемый район расположения: <?= $preference_district; ?></span><br />
                  
                    
                </td>
            </tr>
        </table>
        <table style="width:100%;background-color: #373737;padding:15px;" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td>
                    <div>
                        <h3>Адрес</h3>
                        <p>Москва, 4-й Лесной пер., д.4,<br> БЦ Регус Лесная Плаза <br> 5 этаж, офис 528</p>
                    </div>
                </td>
                <td id="contact">
                    <div>
                        <h3>Контакты</h3>
                        <p>cooperative.r.c@gmail.com</p>
                    </div>
                </td>
                <td>
                    <div>
                        <h3>Телефон</h3>
                        <p>+7 495 663 80 26</p>
                    </div>
                </td>
            </tr>
        </tbody></table>

    </body>
</html>
