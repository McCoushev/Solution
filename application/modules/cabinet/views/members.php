<? $this->load->view('inc/header'); ?>

    <div class="container">
        <div class="page-header">			
            <div class="navbar pull-right">
                <div class="navbar-inner ">
                    <? $this->load->view('inc/navigation'); ?>
                </div>
            </div>
            <? $this->load->view('inc/logo'); ?>
        </div>
        <div id="members" class="content user-cabinet">
            <div class="row">
                <div class="span9">
                    <h1 class="head">Участники</h1>
                    <? $this->load->view('inc/cabinet-nav'); ?>
                    
                    
                   
                    <legend>
                       Список участников ЖК, находящихся в процессе 
накопления на первоначальный взнос (минимум 35%)
                    </legend>
                    <div id="content_1" class="scroll">
		
	
                    <table class='table'>
                            <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                               <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                               <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                              
                               <tr id="myrow">
                                <td>55</td>
                                <td>Scroll test</td>
                               
                                <td style="text-align: right;">000</td>
                              </tr>

                     </table>
                        

                    
                    
                    </div>
                    
                    
                    
                    <legend>
                      Список участников ЖК, получивших ссуду на покупку 
недвижимости
                    </legend>
                    <div id="content_2" class="scroll">
		
	
                    <table class='table'>
                        <!--tr>
                        <th>№</th>
                        <th>Транзакция</th>
                        <th class="txt-center">дата</th>
                        <th>сумма</th>
                        </tr-->
                      
                            <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                              
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                           
                            
                     </table>
                        
                        
                   

                    
                    
                    </div>
                    
                    <legend>
                       Список участников ЖК, у которых накоплено 
минимум 35% пая 
                    </legend>
                    <div id="content_3" class="scroll">
		
	
                    <table class='table'>
                        <!--tr>
                        <th>№</th>
                        <th>Транзакция</th>
                        <th class="txt-center">дата</th>
                        <th>сумма</th>
                        </tr-->
                      
                            <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                              
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                               <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                               
                                <td style="text-align: right;"><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                           
                            
                     </table>
                        
                        
                   

                    
                    
                    </div>
                    
                    
                </div>
                <div class="span3">
                    <? $this->load->view('inc/userblock'); ?>
                </div>
            </div>               
        </div>             
    </div>


<script src="/assets/js/jquery.mCustomScrollbar.min.js"></script>
	<script>
		(function($){
                    $("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin",
                                        autoHideScrollbar : true
				});
                    $("#content_2").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});
                    $("#content_3").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark-thin"
				});
				
			$(window).load(function(){
				$("#content_1").mCustomScrollbar("scrollTo",'#myrow');
                                });
		})(jQuery);
	</script>


<? $this->load->view('inc/footer');
	