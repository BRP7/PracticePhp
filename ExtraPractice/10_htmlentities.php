<!-- Convert some characters to HTML entities: -->

<?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
//<a href="https://www.w3schools.com">Go to w3schools.com</a>


//The HTML output of the code above will be (View Source):

// &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Go to w3schools.com&lt;/a&gt;
?>