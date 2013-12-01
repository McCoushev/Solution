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
                    <h1 class="head">Личный кабинет</h1>
                    <? $this->load->view('inc/cabinet-nav'); ?>
              
                    <legend>
                        Бонус за личное приглашение
                    </legend>
                    <table class='table table-striped '>
                        <tr>
                        <th>№</th>
                        <th>Дата</th>
                        <th>За кого</th>
                        <th>Сумма</th>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0 руб.</td>
                        </tr>
                     </table>

                </div>
                <div class="span3">
                    <? $this->load->view('inc/userblock'); ?>
                </div>
            </div>               
        </div>             
    </div>
	
<? $this->load->view('inc/footer');
	