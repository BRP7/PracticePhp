<!-- ucfirst(string)
lcfirst(string)
ucwords(string, delimiters(op)) -->

<!-- The ucfirst() function converts the first character of a string to uppercase.
lcfirst() - converts the first character of a string to lowercase
ucwords() - converts the first character of each word in a string to uppercase
strtoupper() - converts a string to uppercase
strtolower() - converts a string to lowercase -->

<?php
  echo ucwords("hello|World","|") ."<br>"; //Hello|World
  echo ucfirst("hiii") ."<br>";
  echo lcfirst("Kashmir");
?>
<!-- Hello|World
Hiii
kashmir -->