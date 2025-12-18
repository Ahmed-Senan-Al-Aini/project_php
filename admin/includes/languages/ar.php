<?php 
function lang($phrase){
static $lang=array(
//hom page
'MASSAGE'=>'مرحبا بكم',
'HOME'=>'الصفحة الرئيسية'


);
return $lang[$phrase];
}
?>