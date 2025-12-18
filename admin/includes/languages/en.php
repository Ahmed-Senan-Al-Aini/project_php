<?php 
function lang($phrase){
static $lang=array(
'MASSAGE'=>'Welcome',
'HOME'=>'Home page'
);
return $lang[$phrase];
}
?>