<?php

for ($i = 1; $i <= 100; $i++){

    if ($i%3 == 0)
    echo $i . " Hello"; ?> <br> <?php

    if ($i %5 == 0)
    echo $i . " World"; ?> <br> <?php

    if ($i %5 == 0 &&  $i%3 == 0) 
    echo $i . " Hello World" ; ?> <br> <?php
}

?>
