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
                    <h1 class="head">Ваш счет</h1>
                    <? $this->load->view('inc/cabinet-nav'); ?>
                  <table width="100%">
                        <tr>
                            <td width="45%" class="legend">Общая сумма накоплений</td>
                            <td width="35%" style="vertical-align: bottom;"><div style="border-bottom: 1px dashed #93999d">&nbsp;</div></td>
                            <td width="20%"><b style="font-size:20px;margin-top: -2px;color:#46aaae;"><?=$total;?> pуб.</b></td>
                        </tr> 
                    </table>
                    <legend>
                        счет
                    </legend>
                    <table class='table table-striped '>
                        <tr>
                        <th>№</th>
                        <th>Транзакция</th>
                        <th class="txt-center">дата</th>
                        <th>сумма</th>
                        </tr>
                       
                            <? foreach ($query->result() as $row): ?>
                              <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->transaction_id;?></td>
                                <td class="txt-center"><?=date("Y-m-d", strtotime($row->date));?></td>
                                <td><?=$row->amount;?> p.</td>
                              </tr>
                            <?   endforeach; ?>
                           
                              <tr><td style="text-align: right;" colspan="3"><b>Итого:</b></td><td><?=$total;?> p.</td></tr>
                     </table>
                    
                  

                   

                    <!--legend>
                        Групповой бонус
                    </legend>
                    <table class='table table-striped'>
                        <tr>
                        <th>Получено бонусов</th>
                        <th>Логин</th>
                        <th>Сумма</th>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>00 руб.</td>
                            <td>00 руб.</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>00 руб.</td>
                            <td>00 руб.</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>00 руб.</td>
                            <td>00 руб.</td>
                        </tr>
                     </table-->


                </div>
                <div class="span3">
                    <? $this->load->view('inc/userblock'); ?>
                </div>
            </div>               
        </div>             
    </div>
	
<? $this->load->view('inc/footer');
	
