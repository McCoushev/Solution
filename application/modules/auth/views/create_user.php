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
                    <?
                            $this->load->view('inc/logo');
                            ?>
		
		</div>
		<div style="padding:15px 168px;" class="content">
<h1  class="head"><?php echo lang('create_user_heading');?></h1> 
                <h2 class="head"><?php echo lang('create_user_subheading');?></h2> 

                <div id="infoMessage"><?php echo $message;?></div>
                
<? $attributes = array('class' => 'form-signin register form-horizontal'); ?>
<?php echo form_open("auth/create_user", $attributes);?>
                 <h2 class="form-signin-heading">Новый пользователь</h2>
                 
                  <div class="control-group <?php echo (form_error('first_name'))?'error':''; ?>">
                    <label class="control-label" for="first_name"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                    <div class="controls">
                      <?php echo form_input($first_name);?>
                      <?php echo form_error('first_name'); ?>
                    </div>
                 </div>
                
                 <div class="control-group <?php echo (form_error('last_name'))?'error':''; ?>">
                    <label class="control-label" for="last_name"><?php echo lang('create_user_lname_label', 'last_name');?></label>
                    <div class="controls">
                      <?php echo form_input($last_name);?>
                       <?php echo form_error('last_name'); ?>
                    </div>
                 </div>
                 <div class="control-group <?php echo (form_error('company'))?'error':''; ?>">
                    <label class="control-label" for="company"><?php echo lang('create_user_company_label', 'company');?></label>
                    <div class="controls">
                       <?php echo form_input($company);?>
                       <?php echo form_error('company'); ?>
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
                  <div class="control-group <?php echo (form_error('password')||form_error('password_confirm'))?'error':''; ?>">
                    <label class="control-label" for="password"><?php echo lang('create_user_password_label', 'password');?></label>
                    <div class="controls controls-row">
                    <?php    $password['class'] = 'span3'; $password_confirm['class'] = 'span3'; ?>
                    
                        <?php echo form_input($password);?>
                         <?php echo form_input($password_confirm);?>
                      <?php echo form_error('password'); ?><?php echo form_error('password_confirm'); ?>
                    </div>
                 </div>
                 
                 
                  <legend>new user data</legend>
                  
                  
                  
                  <div class="control-group <?php echo (form_error('passport_series')||form_error('passport_series_number'))?'error':''; ?>">
                    <label class="control-label" for="passport_series"><?php echo lang('create_user_passport_data_label', 'passport_data');?></label>
                    <div class="controls controls-row">
                    <?php    $passport_series['class'] = 'span1'; $passport_series_number['class'] = 'span2'; ?>
                    
                        <?php echo form_input($passport_series);?>
                         <?php echo form_input($passport_series_number);?>
                     <?php echo form_error('passport_series'); ?>
                     <?php echo form_error('passport_series_number'); ?>
                    </div>
                 </div>
                 <div  class="control-group valign <?php echo (form_error('passport_issued'))?'error':''; ?>">
                   <label class="centered control-label" for="passport_issued"><?php echo lang('create_user_passport_issued_label', 'passport_issued');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $passport_issued['class'] = 'span6'; ?>
                        <?php echo form_textarea($passport_issued); ?>
                    <?php echo form_error('passport_issued'); ?>
                    </div>
                 </div>
                  <div class="control-group <?php echo (form_error('passport_date_issued'))?'error':''; ?>">
                    <label class="control-label" for="passport_date_issued"><?php echo lang('create_user_passport_date_issued_label', 'passport_date_issued');?></label>
                    <div class="controls controls-row">
                    <?php  //$passport_date_issued['class'] = 'span2'; ?>
                         <?php echo form_input($passport_date_issued);?>
                     <?php echo form_error('passport_date_issued'); ?>
                    </div>
                 </div>
                 <div  class="control-group valign <?php echo (form_error('address_registration'))?'error':''; ?>">
                   <label class="centered control-label" for="address_registration"><?php echo lang('create_user_address_registration_label', 'address_registration');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $address_registration['class'] = 'span6'; ?>
                        <?php echo form_textarea($address_registration); ?>
                     <?php echo form_error('address_registration'); ?>
                    </div>
                 </div>
                 <div  class="control-group valign <?php echo (form_error('address_residence'))?'error':''; ?>">
                   <label class="centered control-label" for="address_residence"><?php echo lang('create_user_address_residence_label', 'address_residence');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $address_residence['class'] = 'span6'; ?>
                        <?php echo form_textarea($address_residence); ?>
                     <?php echo form_error('address_residence'); ?>
                    </div>
                 </div>
                  <div class="control-group <?php echo (form_error('birth_date'))?'error':''; ?>">
                    <label class="control-label" for="birth_date"><?php echo lang('create_user_birth_date_label', 'birth_date');?></label>
                    <div class="controls controls-row">
                    <?php  $birth_date['class'] = 'span2'; ?>
                         <?php echo form_input($birth_date);?>
                     <?php echo form_error('birth_date'); ?>
                    </div>
                 </div>
                  <div  class="control-group valign <?php echo (form_error('birth_place'))?'error':''; ?>">
                   <label class="centered control-label" for="birth_place"><?php echo lang('create_user_birth_place_label', 'birth_place');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $birth_place['class'] = 'span6'; ?>
                        <?php echo form_textarea($birth_place); ?>
                      <?php echo form_error('birth_place'); ?>
                    </div>
                 </div>
                 <div class="control-group <?php echo (form_error('iin'))?'error':''; ?>">
                    <label class="control-label" for="iin"><?php echo lang('create_user_iin_label', 'iin');?></label>
                    <div class="controls controls-row">
                    <?php  $iin['class'] = 'span2'; ?>
                         <?php echo form_input($iin);?>
                   <?php echo form_error('iin'); ?>
                    </div>
                 </div>
                 <div  class="control-group valign <?php echo (form_error('preference_region'))?'error':''; ?>">
                   <label class="centered control-label" for="preference_region"><?php echo lang('create_user_preference_region_label', 'preference_region');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $preference_region['class'] = 'span6'; ?>
                        <?php echo form_textarea($preference_region); ?>
                     <?php echo form_error('preference_region'); ?>
                    </div>
                 </div>
                 <div  class="control-group valign <?php echo (form_error('preference_district'))?'error':''; ?>">
                   <label class="centered control-label" for="preference_district"><?php echo lang('create_user_preference_district_label', 'preference_district');?></label>
                    <div class="controls controls-row">
                         
                  <?php    $preference_district['class'] = 'span6'; ?>
                        <?php echo form_textarea($preference_district); ?>
                     <?php echo form_error('preference_district'); ?>
                    </div>
                 </div>
                 <div class="control-group <?php echo (form_error('preference_square'))?'error':''; ?>">
                    <label class="control-label" for="preference_square"><?php echo lang('create_user_preference_square_label', 'preference_square');?></label>
                    <div class="controls controls-row">
                    <?php  $preference_square['class'] = 'span2'; ?>
                         <?php echo form_input($preference_square);?>
                     <?php echo form_error('preference_square'); ?>
                    </div>
                 </div>
                 <div class="control-group clearfix <?php echo (form_error('preference_cost'))?'error':''; ?>">
                    <label class="control-label" for="preference_cost"><?php echo lang('create_user_preference_cost_label', 'preference_cost');?></label>
                    <div class="controls controls-row">
                    <?php  $preference_cost['class'] = 'span2'; ?>
                         <?php echo form_input($preference_cost);?>
                      <?php echo form_error('preference_cost'); ?>
                    </div>
                 </div>
     
                  <button type='submit'  class='btn btn-info automargin'><?php echo lang('create_user_submit_btn'); ?></button>
     

            <?php echo form_close();?>
             </div>
             
	</div>



 </div>
             
<?
$this->load->view('inc/footer'); 