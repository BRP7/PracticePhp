<!-- Insert line breaks where newlines (\n) occur in the string: -->

<!-- nl2br(string,xhtml) -->

<!-- xhtml 	Optional. A boolean value that indicates whether or not to use XHTML compatible line breaks:
TRUE- Default. Inserts <br />
FALSE - Inserts <br> -->


<?php
echo nl2br("One line.\nAnother line.");
echo nl2br("One line.\nAnother line.",true);//<br/>
echo nl2br("One line.\nAnother line.",true);//<br>

?>