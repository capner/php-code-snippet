function createToken()
{
 $token= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+", 40)), 0, 40); ;
 $_SESSION['csrfvalue']=$token;
 return $token;
 } ;
function unsetToken()
{
 unset($_SESSION['csrfvalue']);
}
function validation()
{  $csrfvalue = isset($_SESSION['csrfvalue']) ? mysql_real_escape_string($_SESSION['csrfvalue']) : '';  if(isset($_POST['csrf_name']))
 {  $value_input=$_POST['csrf_name'];
  if($value_input==$csrfvalue)
 {
 unsetToken();
 return true;  }else{
 unsetToken();
 return false;
 }
 }else{
 unsetToken();
 return false;
 }
} 
