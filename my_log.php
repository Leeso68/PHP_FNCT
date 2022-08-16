<?php
function my_log($parm, $base=2,$a=5) // default parameter
{
    $result = log($parm) / log($base);
    return $result;
}


print my_log(8, 2)."<br>";
print my_log(8)."<br>";
print my_log(9,3)."<br>";
print my_log(8024)."<br>";
?>