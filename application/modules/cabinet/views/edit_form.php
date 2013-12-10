<? $this->load->view('inc/header'); ?>
 <style>
     .nav-tabs{margin-bottom: 0px;-webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
     border-radius: 4px 4px 0 0;
     }
     .tab-content{border:1px solid #ddd;border-top:0px;padding:20px;
     -webkit-border-radius: 0px 0px 4px 4px;
     -moz-border-radius: 0px 0px 4px 4px;
     border-radius: 0px 0px 4px 4px;
     }
     
     
 </style>
 
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/locales/bootstrap-datepicker.ru.js" charset="UTF-8"></script>
<link rel="stylesheet" href="/assets/css/datepicker3.css"> 
    <div class="container">
        <div class="page-header">			
            <div class="navbar pull-right">
                <div class="navbar-inner ">
                    <? $this->load->view('inc/navigation'); ?>
                </div>
            </div>
            <? $this->load->view('inc/logo'); ?>
        </div>
        <div class="content user-cabinet">
            <div class="row">
                <div class="span9">
                    <h1 class="head">Редактирование профиля</h1>
                    <? $this->load->view('inc/cabinet-nav'); ?>
                    
                    

<? $attributes = array('class' => 'form-signin register form-horizontal'); ?>
<?php echo form_open_multipart('cabinet/update',$attributes);?>
       
       <div class="tabbable"> 
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Общие данные</a></li>
    <li><a href="#tab2" data-toggle="tab">Паспортные данные</a></li>
     <li><a href="#tab3" data-toggle="tab">Изменить пароль</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
        
        
      <div class="control-group">
                    <label class="control-label" for="first_name"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                    <div class="controls">
                      <?php echo form_input('first_name',$user->first_name);?>
                     
                    </div>
                 </div>
                
        <div class="control-group">
           <label class="control-label" for="last_name"><?php echo lang('create_user_lname_label', 'last_name');?></label>
           <div class="controls">
             <?php echo form_input('last_name',$user->last_name);?>

           </div>
        </div>
                
                
        <div class="control-group">
          <label class="control-label" for="phone"><?php echo lang('create_user_phone_label', 'phone');?></label>
          <div class="controls">
              <?php echo form_input('phone',$user->phone);?>
          </div>
       </div>
        
        <div class="control-group">
          <label class="control-label" for="phone">Загрузить аватар:</label>
          <div class="controls">
              <input type="file" name="avatar" size="20" />
          </div>
       </div>
        
          <div class="control-group">
          <label class="control-label" for="phone"><?php echo lang('create_user_country_label', 'country');?></label>
          <div class="controls">
              <?php echo form_input('country',$userData->country);?>
          </div>
       </div>
        
          <div class="control-group">
          <label class="control-label" for="phone"><?php echo lang('create_user_city_label', 'city');?></label>
          <div class="controls">
                   <?php echo form_input('city',$userData->city);?>
          </div>
       </div>
         
        
      
                 <div  class="control-group valign">
                   <label class="centered control-label" for="preference_district"><?php echo lang('create_user_preference_district_label', 'preference_district');?></label>
                    <div class="controls controls-row">
                    <?php  
                    $preference_district = array(
                          'name'=>'preference_district',
                          'class'=>'span5','rows'=> 5,'cols'=>5,
                          'value'=>$userData->preference_district
                          ); 
                          echo form_textarea($preference_district);?>     
                    </div>
                 </div>
                
                 
        
    </div>
      
    
      
      
    <!-- Pasport data -->  
    <div class="tab-pane" id="tab2">
        <div class="control-group">
                    <label class="control-label" for="passport_series"><?php echo lang('create_user_passport_data_label', 'passport_data');?></label>
                    <div class="controls controls-row">
                    <?php    

                    $passport_series_number = array(
                    'name'=>'passport_series_number',
                    'class'=>'span3',
                    'value'=>$userData->passport_series_number
                    );
                    echo form_input($passport_series_number);
                    
                    ?>
                       
               
                    </div>
           </div>           
              
           <div class="control-group">
            <label class="control-label" for="passport_date_issued"></label>
            <div id="passport_date" class="controls-row input-append date">
             <?php    
                $passport_date_issued = array(
                  'name'=>'passport_date_issued',
                  'class'=>'span2',
                  'readonly'=>true,
                  'value'=>$userData->passport_date_issued
                  ); 
            ?>
                 <?php echo form_input($passport_date_issued);?><div class="add-on"><div class="icon-calendar"></div></div>
            </div>
            </div>     
             <div  class="control-group valign">
                   <label class="centered control-label" for="address_registration"><?php echo lang('create_user_address_registration_label', 'address_registration');?></label>
                    <div class="controls controls-row">
                      <?php    
                        $address_registration = array(
                          'name'=>'address_registration',
                          'class'=>'span5','rows'=> 5,'cols'=>5,
                          'value'=>$userData->address_registration
                          ); 
                        echo form_textarea($address_registration);
                        ?>    
                    </div>
               </div>
        
        <div class="control-group">
                    <label class="control-label" for="birth_date"><?php echo lang('create_user_birth_date_label', 'birth_date');?></label>
                    <div id="birthday" class="controls-row input-append date">
                     <?php    
                        $birth_date = array(
                          'name'=>'birth_date',
                          'class'=>'span2',
                          'readonly'=>true,
                          'value'=>$userData->birth_date
                          ); 
                         echo form_input($birth_date).'<div class="add-on"><div class="icon-calendar"></div></div>';
                        ?>

                   </div>
               </div>  
                <div class="control-group">
                    <label class="control-label" for="iin"><?php echo lang('create_user_iin_label', 'iin');?></label>
                    <div class="controls controls-row">
                    <?php  
                    $iin = array(
                          'name'=>'iin',
                          'class'=>'span2',
                          'type'=>'text',
                          'value'=>$userData->iin
                          ); 
                          echo form_input($iin);?>
                    </div>
                 </div>
        
        
    </div>
     <!-- Password/email -->  
    <div class="tab-pane" id="tab3">
       <div class="control-group <?php echo (form_error('password'))?'error':''; ?>">
                    <label class="control-label" for="password"><?php echo lang('create_user_password_label', 'password');?></label>
                    <div class="controls controls-row">
                    <?php    $password['class'] = 'span3';
                            $password['type'] = 'password';
                            $password_confirm['type'] = 'password';
                    $password_confirm['class'] = 'span3'; ?>
                    
                        <?php echo form_input($password);?>
                        
                      <?php echo form_error('password'); ?>
                    </div>
                 </div>
        <div class="control-group <?php echo (form_error('password_confirm'))?'error':''; ?>">
                    <label class="control-label" for="password"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                    <div class="controls controls-row">
                    <?php    $password['class'] = 'span3'; $password_confirm['class'] = 'span3'; ?>
                    
                        <?php echo form_input($password_confirm);?>
                        
                      <?php echo form_error('password_confirm'); ?>
                    </div>
                 </div>
    </div>
      <div style="text-align:center">
           
            <input class="btn btn-large" style="margin:0 auto;" type="submit" value="Сохранить">
          
      </div>
  </div>
</div>
       
                <?php echo form_close();?>
                </div>
                <div class="span3">
                    <? $this->load->view('inc/userblock'); ?>
                </div>
            </div>               
        </div>             
    </div>
<script>                    
 $('#passport_date').datepicker({
				endDate: "-1d",
                                format: "yyyy-mm-dd",
                                startView: 2,
                                language: "ru",
                                autoclose: true,
                                todayHighlight: true
			});
                        
                        
                         $('#birthday').datepicker({
                                endDate: "-18y",
                                format: "yyyy-mm-dd",
                                startView: 2,
                                language: "ru",
                                autoclose: true
			});

</script>
<? $this->load->view('inc/footer');
	