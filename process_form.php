test
<?php
echo $_POST['test']; //pretent like missing key to see if log file reports it

echo '<pre>';
print_r ($_POST); //test only
print_r($_FILES['file']);//test
echo 'file:'. __FILE__.'<br/>';
echo 'line:'. __LINE__;
exit('binhtest');
