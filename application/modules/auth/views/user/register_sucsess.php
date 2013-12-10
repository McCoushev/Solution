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
<h1 style="text-align:center;" class="head">Успешная регистрация</h1> 
               


<div style="text-align:center;" id="infoMessage"><?php echo $message;?></div>




        
     
       </div>
             
	</div>



    
             
	

	
<?
$this->load->view('inc/footer');         