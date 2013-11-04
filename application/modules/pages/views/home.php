<?
$this->load->view('inc/header');
?>
<div id="wrap">
 
	<div class="container">
		<div class="page-header">
			
			<div class="navbar pull-right">
			<div class="navbar-inner ">
				  <?
                            $this->load->view('inc/navigation');
                            ?>
			</div>
		</div>
		<?  $this->load->view('inc/logo'); ?>
		</div>
		<div class="content home">
                    <div class="row">
                    <div class="span9" > <img  src="/assets/images/sl_home.jpg" />  </div>
                    <div class="span3 rightButt  addwidth">  
                       <a href="/video" class="btn btn-large btn-block btn-warning btn-primary video">Видео</a>
                       <a href="/scheme-entry" class="btn schema btn-large btn-block  btn-primary">Схема вступления</a>
                       <a  href="/cabinet" class="btn cab  btn-primary btn-block btn-info btn-primary">Личный кабинет</a>
                         <div  class="btn human btn-large btn-block btn-info btn-primary">Кооператив 
                             «ПРОСТОЕ РЕШЕНИЕ» является отличным  вариантом для людей, которые испытывают трудности с ипотекой: 
                             либо не могут подтвердить доходы, либо не в состоянии выплатить высокий процент.</div>
                    </div>
                    </div>
               </div>
             
	</div>
	
	

<!-- Modal -->
<div id="anons" class="modal hide fade" tabindex="-1"   aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   
  </div>
  <div class="modal-body">
    <h3>Скоро открытие нашей компании состоится 18 ноября в помещении Сбербанка. Адрес ------- время 9:00 </h3>
    <p class='blue'>Количество мест ограничено, рекомендуем Вам зарегистрироваться</p>
        <form class="form-inline radius4">
            <input type="text" class="input-medium uneditable" placeholder="Имя">
            <input type="text" class="input-medium uneditable" placeholder="Email">
            <input type="text" class="input-medium uneditable" placeholder="Тел.">
      </form>
  </div>
  <div class="modal-footer">
      
   <div class='row'>
       <span class='span5 linebg'> </span>
       <button class="btn btn-primary-dark">Регистрация</button>
    </div>
    
  </div>
</div>	
<script type='text/javascript'>
    $(function(){
        $('#anons').modal('show');
       
        
        $('#anons').on('shown', function () {
            
           
            
            setTimeout(function(){
                close = false;
               if($("input,textarea").is(":focus")){
return true;
}
else{
$('#anons').modal('hide');
}    
                
            }, 15000);
          })
        
        
    });
    
</script>
	
<?
$this->load->view('inc/footer');
	
	
	
	
	
	
	
	
