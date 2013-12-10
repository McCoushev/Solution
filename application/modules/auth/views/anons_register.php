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
                    <?
                            $this->load->view('inc/logo');
                            ?>
		
		</div>
		<div style="padding:15px 168px;" class="content">
<h1  class="head"><?php echo lang('registration_user_heading');?></h1> 
                <h2 class="head"><?php echo lang('registration_user_subheading');?></h2> 
               
            <? $attributes = array('class' => 'form-signin register form-horizontal'); ?>
<?php echo form_open("auth/anons", $attributes);?>
                 <h2 class="form-signin-heading">Регистрация на встречy</h2>
                 <?php //echo $message;?>
                  <div class="control-group <?php echo (form_error('first_name'))?'error':''; ?>">
                    <label class="control-label" for="first_name"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                    <div class="controls">
                      <?php echo form_input($first_name);?>
                      <?php echo form_error('first_name'); ?>
                    </div>
                 </div>
                
               
                  <div class="control-group <?php echo (form_error('email'))?'error':''; ?>">
                    <label class="control-label " for="email"><?php echo lang('create_user_email_label', 'email');?></label>
                    <div class="controls">
                       <?php echo form_input($email);?>
                      <?php echo form_error('email'); ?>
                    </div>
                 </div>
                  <div class="control-group <?php echo (form_error('phone'))?'error':''; ?>">
                    <label class="control-label" for="phone"><?php echo lang('create_user_phone_label', 'phone');?></label>
                    <div class="controls">
                        <?php echo form_input($phone);?>
                      <?php echo form_error('phone'); ?>
                    </div>
                 </div>
                
                  
                  
               
     
                  <button type='submit'  class='btn btn-info automargin'><?php echo lang('create_user_submit_btn'); ?></button>
     

            <?php echo form_close();?>
                
             
             
	</div>



 </div>
<?php echo $modal;?>      
<?
$this->load->view('inc/footer'); 