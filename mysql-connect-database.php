$konekdb = mysql_connect($host, $uname, $pass);
mysql_select_db($db);
if(!$konekdb){
echo "maintenance now, please back hours later";
die;
}
