<html>

<head> <title> php Boot camp  </title></head>
<body>
PHP first pracital course class
<br>
</body>
</html>

<?php
//switch case 
$var1 = "mark";
switch ($var1) {
    case "jeo":
        $result =" the value of the var1 is jeo";
        break;
    case "mark":
    $result = "the value is mark";
        break;
    case "shahzaib":
    $result = "the value is abdullah";
        break;
    default:
    $result = "this is the defulat value";
        break;
}
print $result;
?>