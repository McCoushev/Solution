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
              
                  <table style="margin:25px 0;" width="100%">
                        <tr>
                            <td width="65%" class="legend">Общая сумма выплаченных бонусов</td>
                            <td width="25%" style="vertical-align: bottom;"><div style="border-bottom: 1px dashed #93999d">&nbsp;</div></td>
                            <td width="10%"><b style="font-size:20px;margin-top: -2px;color:#46aaae;">0 pуб.</b></td>
                        </tr> 
                    </table>
                    
                    
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
                    
                     <legend>
                        Групповой бонус
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
	
