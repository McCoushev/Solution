<!-- Modal -->
<div id="anons" class="modal hide fade" tabindex="-1"   aria-hidden="true">
   
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   
  </div>
  <div class="modal-body form-inline radius4 anons-form">
    <h3>Вы успешно зарегестрировались</h3>
    <p class='blue'>11 декабря состоится информационная встреча по адресу ул. Сретенка дом. 14.</p>
    <p class='blue'>Встреча состоится в здании Сбербанка в 18-00. Количество мест ограничено, просьба зарегистрироваться заранее.</p>
    
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
