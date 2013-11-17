<!-- Modal -->
<div id="anons" class="modal hide fade" tabindex="-1"   aria-hidden="true">
   
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   
  </div>
  <div class="modal-body form-inline radius4 anons-form">
    <h3>Заявка на презентацию подана</h3>
    <p class='blue'>Презентация компании состоится 18 ноября в 15-00 в здании Сбербанка по адресу: Москва, ул. Большая Дорогомиловская, дом 10.</p>
    <p class='blue'>Количество мест ограничено. Для того, что бы Вы гарантировано попали на наше мероприятие  Вам необходимо пройти регистрацию</p>
    
            <span class="control-group"><input type="text" value="<?=$rname;?>"  class="input-medium uneditable-input " placeholder="Имя"> </span>
            <span class="control-group"><input type="text" value="<?=$remail;?>"  class="input-medium uneditable-input" placeholder="Email"> </span>
            <span class="control-group"><input type="text" value="<?=$rphone;?>"  class="input-medium uneditable-input" placeholder="Тел."> </span>
    
  </div>
  <div class="modal-footer">
      
   
    
  </div>
     
</div>	
<script type='text/javascript'>
$(function(){
    $('#anons').modal('show');

    $('#anons').on('shown', function () {
        setTimeout(function(){
            close = false;
           
        }, 10000);
      })
}); 
    
    
</script>
