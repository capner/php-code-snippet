function translate($text){
$lang = 1;
$translated = explode("|",$text);
return $translated[$lang];

}

echo translate("aku | i am | watashi ");
