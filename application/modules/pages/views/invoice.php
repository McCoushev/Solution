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
    <div class="content">
        <h1 class="head">Пример платежного поручения</h1>
                      
                    <style type="text/css">
	
	#print		{FONT-FAMILY: sans-serif; FONT-SIZE: 7pt}
	.ramka		{BORDER-TOP: black 1px dotted; BORDER-BOTTOM: black 1px dotted; 
			BORDER-LEFT: black 1px dotted; BORDER-RIGHT: black 1px dotted}
	.linev		{BORDER-LEFT: black 2px solid}
	.lineh		{BORDER-BOTTOM: black 2px solid}
	.linevh		{BORDER-BOTTOM: black 2px solid; BORDER-LEFT: black 2px solid}
	.t10b		{FONT-WEIGHT: bold; FONT-SIZE: 10pt; FONT-FAMILY: "Times New Roman", serif}
	.h8b		{FONT-WEIGHT: bold; FONT-SIZE: 9pt; line-height: 9pt;
			BORDER-BOTTOM: black 1px solid; TEXT-ALIGN: center}
        .big            {font-size:10pt;line-height: 12pt;}
	.line_b		{BORDER-BOTTOM: black 1px solid; FONT-SIZE: 9pt; FONT-WEIGHT: bold}
	.line_t		{BORDER-TOP: black 1px solid; FONT-SIZE: 9pt; FONT-WEIGHT: bold}
	.line_r		{BORDER-RIGHT: black 1px solid; FONT-SIZE: 9pt; FONT-WEIGHT: bold}
	.line_l		{BORDER-LEFT: black 1px solid; FONT-SIZE: 9pt; FONT-WEIGHT: bold}
	.line_lbt	{BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px solid;
			BORDER-TOP: black 1px solid; FONT-WEIGHT: bold}
	.line_lbtr	{BORDER-LEFT: black 1px solid; BORDER-BOTTOM: black 1px solid;
			BORDER-TOP: black 1px solid; BORDER-RIGHT: black 1px solid; FONT-WEIGHT: bold}
	.t6n		{FONT-SIZE: 8.5pt; FONT-FAMILY: "Times New Roman", serif}
	.t7n		{FONT-SIZE: 9.5pt; FONT-FAMILY: "Times New Roman", serif}
	.t8n		{FONT-SIZE: 10.5pt; FONT-FAMILY: "Times New Roman", serif}
	.spc		{FONT-SIZE: 2pt}
</style>
 
      <div class="print"> <img onclick="print()" alt="ОТправить на печать" src="/assets/img/printer.png" style="display:inline-block;margin:5px 25px;" width="35px"></div>
          <table id="print" align="center" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td>
<table class="ramka" align="center" border="0" cellpadding="0" 
cellspacing="0">
  <tbody><tr>
    <td class="lineh" align="center" height="245" width="188">
      <table border="0" cellpadding="0" cellspacing="0">
	<tbody><tr><td class="t10b" align="center" height="100" valign="top">И з
 в е щ е н и е</td></tr>
	<tr><td class="t10b" align="center" height="100" valign="bottom">Кассир</td></tr>
      </tbody></table>  
    </td>
    <td class="linevh" height="245" width="16">&nbsp;</td>
    <td class="lineh" height="245"> 
      <table style="height: 245px;" align="center" border="0" 
cellpadding="0" cellspacing="0" width="477">
	<tbody><tr>
	  <td height="40">
	    <table align="center" border="0" cellpadding="0" cellspacing="0" 
width="100%">
	      <tbody><tr>
		<td>&nbsp;</td>
		<td class="t6n" align="right" valign="middle"><i>Форма № ПД-4</i></td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td class="h8b big" align="center" valign="bottom">ПО «ЖК Простое решение»,
 КПП 771001001</td>
	</tr>
	<tr> 
	  <td class="t6n" align="center" height="10" valign="top">(наименование
 получателя платежа)</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td valign="bottom" width="30%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- ИНН -->
		      <td class="line_lbt" align="center" height="10" width="10%">7</td>
		      <td class="line_lbt" align="center" height="10" width="10%">7</td>
		      <td class="line_lbt" align="center" height="10" width="10%">1</td>
		      <td class="line_lbt" align="center" height="10" width="10%">0</td>
		      <td class="line_lbt" align="center" height="10" width="10%">9</td>
		      <td class="line_lbt" align="center" height="10" width="10%">5</td>
		      <td class="line_lbt" align="center" height="10" width="10%">1</td>
		      <td class="line_lbt" align="center" height="10" width="10%">5</td>
		      <td class="line_lbt" align="center" height="10" width="10%">2</td>
		      <td class="line_lbtr" align="center" height="10" width="10%">5</td>
		    </tr>
		  </tbody></table>
		</td>
		<td valign="bottom" width="10%">&nbsp;</td>
		<td valign="bottom" width="60%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- Номер счета -->
		      <td class="line_lbt" align="center" height="10" width="5%">4</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">7</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">6</td>
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbt" align="center" height="10" width="5%">6</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbtr" align="center" height="10" width="5%">9</td>
		    </tr>
		  </tbody></table>
		</td>
	      </tr>
	      <tr>
		<td class="t6n" align="center" valign="top">(ИНН получателя платежа)</td>
		<td class="t6n" valign="top">&nbsp;</td>
		<td class="t6n" align="center" valign="top">(номер счета получателя 
платежа)</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	  <table border="0" cellpadding="0" cellspacing="0" width="100%">
	    <tbody><tr>
	      <td class="t8n" valign="bottom" width="10">в</td>
	      <td class="h8b" align="center" valign="bottom">ОАО «Сбербанк России»    г.Москва   отделение  3826/01830</td>
	      <td class="t8n" align="right" valign="bottom" width="40">БИК&nbsp;</td>
	      <td valign="bottom" width="27%">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tbody><tr><!-- БИК -->
		    <td class="line_lbt" align="center" height="10" width="10%">0</td>
		    <td class="line_lbt" align="center" height="10" width="10%">4</td>
		    <td class="line_lbt" align="center" height="10" width="10%">4</td>
		    <td class="line_lbt" align="center" height="10" width="10%">5</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbt" align="center" height="10" width="10%">5</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbtr" align="center" height="10" width="10%">5</td>
		  </tr>
		</tbody></table>
	      </td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td class="t6n" align="center" valign="top">(наименование банка 
получателя платежа)</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	    </tr>
	  </tbody></table>
	</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t7n" valign="bottom">Номер&nbsp;кор./сч.&nbsp;банка&nbsp;получателя&nbsp;платежа</td>
		<td valign="bottom" width="60%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- Кор.сч. -->
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">4</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbtr" align="center" height="10" width="5%">5</td>
		    </tr>
		  </tbody></table>
		</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="h8b" valign="bottom" width="55%">Взнос</td>
		<td width="5%">&nbsp;</td>
		<td class="h8b" valign="bottom"></td>
	      </tr>
	      <tr>
		<td class="t6n" align="center" valign="top">(наименование платежа)</td>
		<td>&nbsp;</td>
		<td class="t6n" align="center" valign="top">(номер лицевого счета 
(код) плательщика)</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Ф.И.О&nbsp;плательщика&nbsp;</td>
		<td class="h8b" valign="bottom">  </td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Адрес&nbsp;плательщика&nbsp;</td>
		<td class="h8b" valign="bottom"></td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Сумма&nbsp;платежа&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%"></td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">00</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;коп.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма&nbsp;платы&nbsp;за&nbsp;услуги&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;коп.</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="5%">Итого&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="5%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="5%">&nbsp;коп.&nbsp;</td>
		<td class="t8n" align="right" valign="bottom" width="20%">&nbsp;"&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;"&nbsp;</td>
		<td class="h8b" valign="bottom" width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td class="t8n" valign="bottom" width="4%">&nbsp;20&nbsp;</td>
		<td class="h8b" valign="bottom" width="3%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;г.</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td class="t7n" style="text-align: justify;" valign="bottom">С 
условиями приема указанной в платежном документе суммы, в т.ч. с суммой 
взимаемой платы за&nbsp;услуги 
банка,&nbsp;ознакомлен&nbsp;и&nbsp;согласен.</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t6n" valign="bottom" width="50%">&nbsp;</td>
		<td class="t7n" valign="bottom" width="1%"><b>Подпись&nbsp;плательщика&nbsp;</b></td>
		<td class="h8b" valign="bottom" width="40%">&nbsp;</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr><td class="spc" height="1">&nbsp;</td></tr>
      </tbody></table>
    </td>
    <td class="lineh" height="245" width="16">&nbsp;</td>
  </tr>
  <tr>
    <td class="t10b" align="center" height="285" valign="bottom" 
width="188">Квитанция<br><br>Кассир<br>&nbsp;</td>
    <td class="linev" height="285" width="16">&nbsp;</td>
    <td height="285" valign="top"> 
      <table style="height: 285px;" align="center" border="0" 
cellpadding="0" cellspacing="0" width="477">
	<tbody><tr>
	  <td height="40">
	   
	  </td>
	</tr>
	<tr>
	 <td class="h8b big" align="center" valign="bottom">ПО «ЖК Простое решение»,
 КПП 771001001</td>
	</tr>
	<tr> 
	  <td class="t6n" align="center" height="10" valign="top">(наименование
 получателя платежа)</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td valign="bottom" width="30%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- ИНН -->
		      <td class="line_lbt" align="center" height="10" width="10%">7</td>
		      <td class="line_lbt" align="center" height="10" width="10%">7</td>
		      <td class="line_lbt" align="center" height="10" width="10%">1</td>
		      <td class="line_lbt" align="center" height="10" width="10%">0</td>
		      <td class="line_lbt" align="center" height="10" width="10%">9</td>
		      <td class="line_lbt" align="center" height="10" width="10%">5</td>
		      <td class="line_lbt" align="center" height="10" width="10%">1</td>
		      <td class="line_lbt" align="center" height="10" width="10%">5</td>
		      <td class="line_lbt" align="center" height="10" width="10%">2</td>
		      <td class="line_lbtr" align="center" height="10" width="10%">5</td>
		    </tr>
		  </tbody></table>
		</td>
		<td valign="bottom" width="10%">&nbsp;</td>
		<td valign="bottom" width="60%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- Номер счета -->
		      <td class="line_lbt" align="center" height="10" width="5%">4</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">7</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">6</td>
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbt" align="center" height="10" width="5%">6</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbtr" align="center" height="10" width="5%">9</td>
		    </tr>
		  </tbody></table>
		</td>
	      </tr>
	      <tr>
		<td class="t6n" align="center" valign="top">(ИНН получателя платежа)</td>
		<td class="t6n" valign="top">&nbsp;</td>
		<td class="t6n" align="center" valign="top">(номер счета получателя 
платежа)</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	  <table border="0" cellpadding="0" cellspacing="0" width="100%">
	    <tbody><tr>
	      <td class="t8n" valign="bottom" width="10">в</td>
	      <td class="h8b" align="center" valign="bottom">ОАО «Сбербанк России»    г.Москва   отделение  3826/01830</td>
	      <td class="t8n" align="right" valign="bottom" width="40">БИК&nbsp;</td>
	      <td valign="bottom" width="27%">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tbody><tr><!-- БИК -->
		    <td class="line_lbt" align="center" height="10" width="10%">0</td>
		    <td class="line_lbt" align="center" height="10" width="10%">4</td>
		    <td class="line_lbt" align="center" height="10" width="10%">4</td>
		    <td class="line_lbt" align="center" height="10" width="10%">5</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbt" align="center" height="10" width="10%">5</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbt" align="center" height="10" width="10%">2</td>
		    <td class="line_lbtr" align="center" height="10" width="10%">5</td>
		  </tr>
		</tbody></table>
	      </td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td class="t6n" align="center" valign="top">(наименование банка 
получателя платежа)</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	    </tr>
	  </tbody></table>
	</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t7n" valign="bottom">Номер&nbsp;кор./сч.&nbsp;банка&nbsp;получателя&nbsp;платежа</td>
		<td valign="bottom" width="60%">
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tbody><tr><!-- Кор.сч. -->
		      <td class="line_lbt" align="center" height="10" width="5%">3</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">8</td>
		      <td class="line_lbt" align="center" height="10" width="5%">1</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">4</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">0</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbt" align="center" height="10" width="5%">2</td>
		      <td class="line_lbtr" align="center" height="10" width="5%">5</td>
		    </tr>
		  </tbody></table>
		</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="h8b" valign="bottom" width="55%">Взнос</td>
		<td width="5%">&nbsp;</td>
		<td class="h8b" valign="bottom"></td>
	      </tr>
	      <tr>
		<td class="t6n" align="center" valign="top">(наименование платежа)</td>
		<td>&nbsp;</td>
		<td class="t6n" align="center" valign="top">(номер лицевого счета 
(код) плательщика)</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Ф.И.О&nbsp;плательщика&nbsp;</td>
		<td class="h8b" valign="bottom">  </td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Адрес&nbsp;плательщика&nbsp;</td>
		<td class="h8b" valign="bottom"></td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="1%">Сумма&nbsp;платежа&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%"></td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">00</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;коп.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма&nbsp;платы&nbsp;за&nbsp;услуги&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;коп.</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t8n" valign="bottom" width="5%">Итого&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="5%">&nbsp;руб.&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="5%">&nbsp;коп.&nbsp;</td>
		<td class="t8n" align="right" valign="bottom" width="20%">&nbsp;"&nbsp;</td>
		<td class="h8b" valign="bottom" width="8%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;"&nbsp;</td>
		<td class="h8b" valign="bottom" width="20%">&nbsp;&nbsp;&nbsp;</td>
		<td class="t8n" valign="bottom" width="4%">&nbsp;20&nbsp;</td>
		<td class="h8b" valign="bottom" width="3%">&nbsp;</td>
		<td class="t8n" valign="bottom" width="1%">&nbsp;г.</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr>
	  <td class="t7n" style="text-align: justify;" valign="bottom">С 
условиями приема указанной в платежном документе суммы, в т.ч. с суммой 
взимаемой платы за&nbsp;услуги 
банка,&nbsp;ознакомлен&nbsp;и&nbsp;согласен.</td>
	</tr>
	<tr>
	  <td>
	    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	      <tbody><tr>
		<td class="t6n" valign="bottom" width="50%">&nbsp;</td>
		<td class="t7n" valign="bottom" width="1%"><b>Подпись&nbsp;плательщика&nbsp;</b></td>
		<td class="h8b" valign="bottom" width="40%">&nbsp;</td>
	      </tr>
	    </tbody></table>
	  </td>
	</tr>
	<tr><td class="spc" height="1">&nbsp;</td></tr>
      </tbody></table>
    </td>
    <td width="16">&nbsp;</td>
  </tr>
</tbody></table>
</td></tr>
<tr><td>
  &nbsp;<br>
</td></tr></tbody></table>

      
    </div>
</div>

<? $this->load->view('inc/footer');

