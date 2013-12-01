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
		<div class="content home">
                    <div class="row">
                    <div class="span9"> 
                        <style>
                            .slide img{width:100%;max-width:720px;
                        </style>
                        <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
                            <div class="slides"></div>
                            <h3 class="title"></h3>
                            <p class="description"></p>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                            <div id="links">
                            <a data-description="Простое решение" href="/assets/images/slide1.jpg"></a>
                            <a data-description="Заработать на знакомствах" href="/assets/images/slide3.jpg"></a>
                        </div>
                        </div>
                        
                        
                      
                    
                    </div>
                    
                    
                    
                    <div class="span3 rightButt  addwidth">  
                       <a href="/video" class="btn btn-large btn-block btn-warning btn-primary video">Видео</a>
                       <a href="/scheme-entry" class="btn schema btn-large btn-block  btn-primary">Схема вступления</a>
                       <a  href="/cabinet" class="btn cab  btn-primary btn-block btn-info btn-primary">Личный кабинет</a>
                         <div  class="btn human btn-large btn-block btn-info btn-primary">Кооператив 
                             «ПРОСТОЕ РЕШЕНИЕ» является отличным  вариантом для людей, которые испытывают трудности с ипотекой: 
                             либо не могут подтвердить доходы, либо не в состоянии выплатить высокий процент.</div>
                    </div>
                    </div>
               </div>
             
	</div>
	
	




<script src="/assets/js/blueimp-helper.js"></script>
<script src="/assets/js/blueimp-gallery.js"></script>
<script src="/assets/js/blueimp-gallery-fullscreen.js"></script>
<script src="/assets/js/blueimp-gallery-indicator.js"></script>
<script src="/assets/js/blueimp-gallery-video.js"></script>
<script src="/assets/js/blueimp-gallery-vimeo.js"></script>
<script src="/assets/js/blueimp-gallery-youtube.js"></script>
   <script>
                    blueimp.Gallery(
                        document.getElementById('links').getElementsByTagName('a'),
                        {
                            container: '#blueimp-gallery-carousel',
                            carousel: true
                        }
                    );
                    </script>
<?
$this->load->view('inc/footer');
	
	
	
	
	
	
	
	
