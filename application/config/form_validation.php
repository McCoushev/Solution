<?php

$config = array(
           'auth/userRegistration' => array(
                                    array(
                                            'field' => 'first_name',
                                            'label' => 'lang:create_user_validation_fname_label',
                                            'rules' => 'required|xss_clean' 
                                         ),
                                     array(
                                            'field' => 'last_name',
                                            'label' => 'lang:create_user_validation_lname_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'email',
                                            'label' => 'lang:create_user_validation_email_label',
                                            'rules' => 'required|valid_email|is_unique[users.email]'
                                         ),
                                     array(
                                            'field' => 'phone',
                                            'label' => 'lang:create_user_validation_phone_label',
                                            'rules' => 'required|xss_clean|numeric|max_length[14]'
                                         ),
                                     array(
                                            'field' => 'password',
                                            'label' => 'lang:create_user_validation_password_label',
                                            'rules' => 'required|xss_clean|matches[password_confirm]|regex_match[/[^(\w)|(\x7F-\xFF)|(\s)|(\@)|(\.)|(\-){10,20}]/]'
                                         ),
                                     array(
                                            'field' => 'password_confirm',
                                            'label' => 'lang:create_user_validation_password_confirm_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_series',
                                            'label' => 'lang:create_user_validation_passport_data',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_series_number',
                                            'label' => 'lang:create_user_validation_passport_data',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_issued',
                                            'label' => 'lang:create_user_validation_passport_issued',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_date_issued',
                                            'label' => 'lang:create_user_passport_date_issued_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'address_registration',
                                            'label' => 'lang:create_user_validation_faddress_registration',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'birth_date',
                                            'label' => 'lang:create_user_validation_birth_date',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'iin',
                                            'label' => 'lang:create_user_validation_iin',
                                            'rules' => 'required|xss_clean'
                                         ),
                                    array(
                                            'field' => 'preference_region',
                                            'label' => 'lang:create_user_validation_region_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                    array(
                                            'field' => 'preference_district',
                                            'label' => 'lang:create_user_validation_district_label',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'referal_code',
                                            'label' => 'lang:create_user_validation_referal_code_label',
                                            'rules' => 'xss_clean|callback_referal_code'
                                         )
                                   
                                    ),
    'cabinet/update' => array(
                                    array(
                                            'field' => 'first_name',
                                            'label' => 'lang:create_user_validation_fname_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'last_name',
                                            'label' => 'lang:create_user_validation_lname_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                    /* array(
                                            'field' => 'email',
                                            'label' => 'lang:create_user_validation_email_label',
                                            'rules' => 'required|valid_email|is_unique[users.email]'
                                         ),*/
                                     array(
                                            'field' => 'phone',
                                            'label' => 'lang:create_user_validation_phone_label',
                                            'rules' => 'required|xss_clean|numeric|max_length[14]'
                                         ),
                                     array(
                                            'field' => 'password',
                                            'label' => 'lang:create_user_validation_password_label',
                                            'rules' => 'xss_clean|matches[password_confirm]|regex_match[/[^(\w)|(\x7F-\xFF)|(\s)|(\@)|(\.)|(\-){10,20}]/]'
                                         ),
                                     array(
                                            'field' => 'password_confirm',
                                            'label' => 'lang:create_user_validation_password_confirm_label',
                                            'rules' => 'xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_series',
                                            'label' => 'lang:create_user_validation_passport_data',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_series_number',
                                            'label' => 'lang:create_user_validation_passport_data',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_issued',
                                            'label' => 'lang:create_user_validation_passport_issued',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'passport_date_issued',
                                            'label' => 'lang:create_user_passport_date_issued_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'address_registration',
                                            'label' => 'lang:create_user_validation_faddress_registration',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'birth_date',
                                            'label' => 'lang:create_user_validation_birth_date',
                                            'rules' => 'required|xss_clean'
                                         ),
                                     array(
                                            'field' => 'iin',
                                            'label' => 'lang:create_user_validation_iin',
                                            'rules' => 'required|xss_clean'
                                         ),
                                    array(
                                            'field' => 'preference_region',
                                            'label' => 'lang:create_user_validation_region_label',
                                            'rules' => 'required|xss_clean'
                                         ),
                                    array(
                                            'field' => 'preference_district',
                                            'label' => 'lang:create_user_validation_district_label',
                                            'rules' => 'required'
                                         ),
                                    
                                   
                                    )
               );


       
  