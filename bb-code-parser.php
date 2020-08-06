function showBBcodes($text) {
	// BBcode array	
$find = array(		
'~\[b\](.*?)\[/b\]~s',		
'~\[i\](.*?)\[/i\]~s',		
'~\[u\](.*?)\[/u\]~s',	
'~\[youtube\](.*?)\[/youtube\]~s',	
'~\[quote\](.*?)\[/quote\]~s',		
'~\[size=(.*?)\](.*?)\[/size\]~s',		
'~\[color=(.*?)\](.*?)\[/color\]~s',		
'~\[rhs\]((?:ftp|https?)://.*?)\[/rhs\]~s',		
'~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s'	); 	
// HTML tags to replace BBcode	
$replace = array(		
'<b>$1</b>',		
'<i>$1</i>',		
'<u>$1</u>',		
'<iframe width="420" height="315"
src="https://www.youtube.com/embed/$1">
</iframe>',
'<pre>$1</'.'pre>',		
'<span style="font-size:$1px;">$2</span>',		
'<span style="color:$1;">$2</span>',		
'<a href="$1">$1</a>',		
'<img src="$1" alt="" width="200px" maxheight="500px" overflow="hidden" loading="lazy" />'	); 	
// Replacing the BBcodes with corresponding HTML tags	
return preg_replace($find,$replace,$text);
}
