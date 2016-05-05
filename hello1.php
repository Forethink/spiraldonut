<!DOCTYPE html>
<html>
<body>

<?php
$born = array("Alf"=>"1971", "Sonja"=>"1978", "Easi"=>"2017");
foreach($born as $x => $x_value) {
    $year = date ('Y');  
    echo "Name :" . $x . ", is born in " . $x_value."<br>";
    $age = $year - $x_value;
    echo " ".$x." is " . $age . " year old in ".$year;
    echo "<br>";
}    

?>

</body>
</html>