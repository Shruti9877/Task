<?php

for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($i == 1 || $i == 5)
        {
            echo "*";
        }
        else
        {
            if($j == 1 )
            {
                echo "*";
            
            }
            else
            {
                echo ' &nbsp';
            }
        }
    }
    echo "<br>";
}

?>
<?php

for($i=1;$i<=4;$i++)
{
    for($j=1;$j<=4;$j++)
    {
        echo "*";
        $j--;
    }
}
