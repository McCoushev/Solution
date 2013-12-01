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
		<div class="content user-cabinet">
                    <div class="row">
                        <div class="span9">
                            <h1 class="head">Личный кабинет</h1>
                             <?
                            $this->load->view('inc/cabinet-nav');
                            ?>
                            <p>
                                I'm a paragraph. Click here to add your own text I'm a paragraph. Click here to add your own text I'm a paragraph.
                                Click here to add your own text I'm a paragraph.
                                Click here to add your own text I'm a paragraph. Click here to add your own text I'm a paragraph. 
                                Click here to add your own text 
                            </p>
                            <p>&nbsp;
                                </p>
                           <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
                            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
                            
                           <script type="text/javascript" src="/assets/js/jquery.jsPlumb-1.5.3-min.js "></script>
                           <script>
              jsPlumb.ready(function() {
/*jsPlumb.connect({
    source:"element1",
    target:"element2",
    paintStyle: { 
    strokeStyle:"#CCC", 
    lineWidth:"1" 
    },
    detachable:false,
    endpoint:[ "Blank", { radius:1, hoverClass:"myEndpointHover" }],
    connector:[ "Straight", { stub :1,gap :1 } ],
    anchors:[
        [ "Perimeter", { shape:"Triangle" } ],
        [ "Perimeter", { shape:"Triangle" } ]
    ]
});*/





var stateMachineConnector = {
                connector:[ "Straight", { stub :0,gap :8 } ],
                paintStyle: {
                    lineWidth: 1,
                    strokeStyle: "#CCC"
                },
                endpoint: "Blank",
                anchor: "Continuous",
                overlays: [
                    ["PlainArrow", {
                        location: 1,
                        width: 6,
                        length: 3
                    }]
                ]
            };

            jsPlumb.connect({
                source: "element1",
                target: "element2"
            }, stateMachineConnector);
            
             jsPlumb.connect({
                source: "element1",
                target: "element3"
            }, stateMachineConnector);
            
            jsPlumb.connect({
                source: "element1",
                target: "element4"
            }, stateMachineConnector);

             jsPlumb.connect({
                source: "element2",
                target: "element5"
            }, stateMachineConnector);
            
            jsPlumb.connect({
                source: "element2",
                target: "element6"
            }, stateMachineConnector);

});
                           </script>
                            <div class="row genialogy">
                                <div class="span1"></div>
                                <div class="span1 gray"></div>
                                <div id="element1" class="span1 active line1">
                                    <span>+5</span>
                                </div>
                                <div class="span1 "></div>
                                <div class="span1 "></div>
                                <div class="span1 "></div>
                                <div class="span1 "></div>
                                
                                <div class="span1"></div>
                                <div class="span1 gray"></div>
                                <div id="element2" class="span1 active line2"><span>+4</span></div>
                                <div id="element3" class="span1 gray"></div>
                                <div id="element4" class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                
                                  <div class="span1"></div>
                                <div id="element6" class="span1 gray"></div>
                                <div id="element5" class="span1 active line3"><span>+4</span></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                
                                   <div class="span1"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 active line4"><span>+4</span></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                                <div class="span1 gray"></div>
                            </div>
                               
                            
                        </div>
                        <div class="span3">
                             <?
                            $this->load->view('inc/userblock');
                            ?>
                        </div>
                    </div>
		
                
               
		</div>
             
	</div>
	
	
	
	
	
<?
$this->load->view('inc/footer');
	