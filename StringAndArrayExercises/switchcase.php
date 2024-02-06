<?php
$dayOfWeek="Friday";
switch($dayOfWeek){
    case "Monday":
        echo "Monday Case Matched";
        break;
    case "Tuesday":
        echo "it's Tuesday";
        break;
    case "Wednesday":
        break;
    case "Thursday":
        echo "It's beautiful Thursday!";
        break;
    case "Friday":
        echo "Great!!!!";
        // break;
    case "Saturday":
        echo "It's saturday!";
        break;
    case "Sanday":
        echo "It's Sunday!";
        break;
    default:
        echo "Invalid day of the week.";

    
}
?>
<!-- //if you don't write break ->Parse error: syntax error, unexpected token "case" in C:\Xampp\htdocs\phpPra\switchcase.php on line 18 -->
<!--for case:Monday if we don't write break in friday No problem as it encounter break below -->
<!--for case:Friday if we don't write break in friday it print below case without checking until it encounter break below -->