<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    
    var $obj;
    var $layout;
    var $title;
    var $keywords;
    var $description;
    
    public function __construct($layout = "layouts/main")
    {
        $this->obj =& get_instance();
        $this->title = 'Дипломы на заказ. Рефераты, курсовые на заказ. Заказать диплом, курсовую, реферат.';
        $this->keywords = '';
        $this->description = '';
        $this->description = ' ';
        $this->layout = $layout;
    }

    public function setLayout($layout)
    {
      $this->layout = "layouts/" . $layout;
    }
    
    public function view($view, $data=null, $return=false)
    {
        $loadedData = array();
        $loadedData['content_for_layout'] = $this->obj->load->view($view, $data, true);
        $loadedData['meta_title'] = $this->title;
        $loadedData['meta_keywords'] = $this->keywords;
        $loadedData['meta_description'] = $this->description;
        
        if($return)
        {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else
        {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }
}

?>