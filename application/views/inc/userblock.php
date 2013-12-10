<? 
$user = $this->ion_auth->user()->row(); 
$userData = $this->ion_auth->user_data();
?>
<h1 class="head">Личные данные</h1>
<div class="userblock">
    <div class="userblock-avatar">
        <img style="width:90px;" class="pull-left" src="/assets/avatar/<? echo $user->avatar; ?>">
        <h2 class="clear"><? echo $user->username; ?></h2>

        <a href="/cabinet/edit">
            Изменить данные
        </a>
    </div>
    <div class="clearfix"></div>
    <dl class="dl-horizontal">
        
        <dt>ID:</dt>
        <dd><? echo $user->id; ?></dd>
        <dt>ИНН:</dt>
        <dd><? echo $userData->iin; ?></dd>
        <dt>Паспорт:</dt>
        <dd><? echo $userData->passport_series_number; ?></dd>
        <dt>Эл. почта:</dt>
        <dd><? echo $user->email; ?></dd>
        <dt>Страна:</dt>
        <dd><? echo $userData->country; ?></dd>
        <dt>Город:</dt>
        <dd><? echo $userData->city; ?></dd>
          <dt>Адрес:</dt>
        <dd><? echo $userData->address_registration; ?></dd>
    </dl>
    <div class="userblock-footer">
        Реферальный код: <? echo $user->referal_code; ?>
         <? if(!$userData->referal_consultant) { ?><span>Необходимо подписать  <a href="#">
                Договор с консультантом
        </a></span> <? } ?>

    </div>
</div>

