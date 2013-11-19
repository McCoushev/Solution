<?

//-- ALIAS: $this->input->post()
function post($var){ $ci =& get_instance(); return $ci->input->post($var); }
//-- ALIAS: $this->input->get()
function get($var){ $ci =& get_instance(); return $ci->input->get($var); }


//-- HTML/OUTPUT

// 12 ноя 2012
function humanDate($timestamp = ''){
    $months = array('', 'янв', 'фев', 'мар', 'апр', 'мая', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек');
    if( !$timestamp )
        $timestamp = time();
    return date('j ', $timestamp). $months[date('n', $timestamp)]. date(' Y', $timestamp);
}
function humanDateEn($timestamp = ''){
    $months = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    if( !$timestamp )
        $timestamp = time();
    return date('j ', $timestamp). $months[date('n', $timestamp)]. date(' Y', $timestamp);
}
// ALIAS: htmlspecialchars($html)
function e($html){ return htmlspecialchars($html); }
// для быстрого написания checked='checked'
function isOnChecked($bool){ return $bool ? ' checked="checked"' : ''; }


//-- URL

// переадресация через заголовок Location
function location($href){
    header('Location: '. $href);
    exit;
}
// обновляет текущую страницу
function refresh(){
    location($_SERVER['REQUEST_URI']);
    //location();
}


//-- служебные функции

// возвращает расширение с точкой
function getExt($filename){
    $ext = '';
    if( preg_match('/(\.\w+)$/iu', $filename, $matches) )
        $ext = $matches[1];
    return mb_strtolower($ext);
}
// ALIAS: print_r($var) в более удобном формате
function dump($var){
    echo "<pre style='background: white; font-size: 10pt; clear: both; position: relative; z-index: 9999999'>";
    print_r($var,true);
    echo '</pre>'; 
}
