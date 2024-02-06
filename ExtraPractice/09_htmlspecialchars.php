<!-- //PHP when you need to convert special characters to HTML entities. 
This is important for security purposes, as it helps prevent cross-site scripting (XSS) 
attacks by encoding characters that could be interpreted as HTML or JavaScript code. -->


<!-- //htmlspecialchars(string,flags,character-set,double_encode) -->
<?php
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
//This is some <b>bold</b> text.
?>

<!-- The HTML output of the code above will be (View Source):
<!DOCTYPE html>
<html>
<body>
This is some &lt;b&gt;bold&lt;/b&gt; text.
</body>
</html> -->

<!-- 
The browser output of the code above will be:

This is some <b>bold</b> text. -->
