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
        <div class="content user-cabinet">
            <div class="row">
                <div class="span9">
                    <h1 class="head">Участники</h1>
                    <? $this->load->view('inc/cabinet-nav'); ?>
                   

                </div>
                <div class="span3">
                    <? $this->load->view('inc/userblock'); ?>
                </div>
            </div>               
        </div>             
    </div>
	
<? $this->load->view('inc/footer');
	