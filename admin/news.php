<?php

include "../mysql.php";

$month = ['Січень' => 1, 'Лютий' => 2, 'Березень' => 3, 'Квітень' => 4, 'Травень' => 5, 'Червень' => 6, 'Липень' => 7, 'Серпень' => 8, 'Вересень' => 9, 'Жовтень' => 10, 'Листопад' => 11, 'Грудень' => 12];
$n = $_POST['month'];

$date = implode('-', [2018, $month["$n"], $_POST['day']]);
$type = $_POST[type];

if ($type == "")
	$result = mysqli_query($sql, "INSERT INTO `news` (`name`, `date`, `text`) VALUES ('$_POST[name]', '$date', '$_POST[text]')");
else
	$result = mysqli_query($sql, "UPDATE `news` SET `name`='$_POST[name]', `date`='$date', `text`='$_POST[text]' WHERE `name`='$type'");

mysqli_free_result($result);

header('Location: http://sch17.pp.ua/admin'); 

exit();

?>