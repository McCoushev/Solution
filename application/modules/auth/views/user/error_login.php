<?
$this->load->view('inc/header');
?>

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
		<div style="padding:15px 370px;" class="content">
<h1  class="head">Регистрация</h1> 
                <h2 class="head">Компания  «Простое решение» это:</h2> 
<!--h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p-->

<div id="infoMessage"><?php echo $message;?></div>





<? $attributes = array('class' => 'form-signin'); ?> 
<?php echo form_open("login", $attributes);?>

        <h2 class="form-signin-heading">Вход в кабинет</h2>
        
        <? $identity['placeholder'] = 'Ваше имя'; ?>
        <? $identity['class'] = 'input-block-level'; ?>  
        
        <?php echo form_input($identity); ?>
        
         <? $password['class'] = 'input-block-level'; ?>
         <? $password['placeholder'] = 'Пароль'; ?>
   
        <?php echo form_input($password);?>
        <br />
        <label class="checkbox">
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember me
        </label>
        <?php
        // echo form_submit('submit', lang('login_submit_btn'));
        ?>
        <!--button class="btn btn-large btn-primary" type="submit">Sign in</button-->
        
       
        <a href="/cabinet/register">Регистрация-></a><?php echo form_error('password'); ?><br />&nbsp;
        
     <?php echo form_close();?>
       </div>
             
	</div>



    
             
	
   
 <script>
     $('.form-signin input[name=\'password\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			$('.form-signin').submit();
		}
	});
 </script>

	
<?
$this->load->view('inc/footer');         