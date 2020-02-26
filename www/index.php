<?php
require_once 'controllers/ArticlesController.php';
require_once 'controllers/UsersController.php';
require_once 'helpers/helpers.php';

$requestParts = explode('/', $_SERVER['REQUEST_URI']);
$controllerName = ucfirst($requestParts[1]) . 'Controller';
if (is_numeric($requestParts[2])) {
    $actionName = $requestParts[3];
    $id = $requestParts[2];
} else {
    $actionName = $requestParts[2];
    $id = null;
}
$controller = new $controllerName;
if ($id) {

    $controller->$actionName($id);
} else {
    $controller->$actionName();
}

//$var = 'PHP Tutorial';
//echo 'Write your code here' . "\n";
//echo "Tomorrow I \'ll learn PHP global variables." . "\n";
//echo "This is a bad command : del c:\\*.*" . "\n";
//?>
<!--    <h3>--><?php //echo $var; ?><!--</h3>-->
<!---->
<!--    <form method='POST'>-->
<!--        <h2>Please insert your Name</h2>-->
<!--        <input type="text" name="name">-->
<!--        <input type="submit" name="submitName">-->
<!--    </form>-->
<?php
////Retrieve name from query string and store to a local variable
//$name = $_POST['name'];
//echo "<h3> Hello $name </h3>";
//?>
<?php
////whether ip is from share internet
//if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
//} //whether ip is from proxy
//elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
//} //whether ip is from remote address
//else {
//    $ip_address = $_SERVER['REMOTE_ADDR'];
//}
//echo $ip_address;
//?>
<!--    <br>-->
<?php
//echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];
//?>
<!--    <br>-->
<?php
//$current_file_name = basename($_SERVER['PHP_SELF']);
//echo $current_file_name . "\n";
//?>
<!--    <br>-->
<?php
//$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
//$url = parse_url($url);
//echo 'Scheme : ' . $url['scheme'] . "\n";
//echo 'Host : ' . $url['host'] . "\n";
//echo 'Path : ' . $url['path'] . "\n";
//?>
<!--    <br>-->
<?php
//$text = 'PHP Tutorial';
//$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
//echo $text;
//?>
<!--    <br>-->
<?php
//if (!empty($_SERVER['HTTPS'])) {
//    echo 'https is enabled';
//} else {
//    echo 'http is enabled' . "\n";
//}
//?>
<!--    <br>-->
<?php
//// pass valid/invalid emails
//$email = "mail@example..com";
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    echo '"' . $email . '" = Valid' . "\n";
//} else {
//    echo '"' . $email . '" = Invalid' . "\n";
//}
//?>
<?php
//$a = 100;
//$b = 300;
//$c = 500;
//echo "<table border=1 cellspacing=0 cellpading=0>
//<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr>
//<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
//<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
//</table>";
//?>
<!--<br>-->
<?php
////$all_lines = file('https://www.w3resource.com/');
////foreach ($all_lines as $line_num => $line)
////{
////    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
////}
////?>
<?php
////// current time
////echo date('h:i:s') . "\n";
////// sleep for 5 seconds
////sleep(10);
////// wake up
////echo date('h:i:s')."\n";
////?>
<?php
//$file = basename($_SERVER['PHP_SELF']);
//$no_of_lines = count(file($file));
//echo "There are $no_of_lines lines in $file"."\n";
//?>
<?php
//$d = 'A00';
//for ($n=0; $n<10; $n++)
//{
//    echo ++$d ."\n";
//}
//?>
<!---->
