
<?php
function active($currect_page){
    $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array); 
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>