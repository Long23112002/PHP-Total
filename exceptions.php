<?php
echo "Exceptions";
echo "<br>";

function divide($num1, $num2)
{
    if ($num2 == 0) {
        throw new Exception("Can't divide by zero");
    }
    return $num1 / $num2;
}

try {
    echo divide(10, 2);
    echo divide(10, 0);

} catch (Exception $exception) {
    echo $exception->getMessage()."\n";
}
