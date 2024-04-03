<?php

function leap($year)
{
    return(date('L',mktime(0,0,0,1,1,$year))==1);
}

for($year=1901;$year<2016;$year++)
{
    if(leap($year))
    {
echo"$year:it is leap year";
    }
    else{
echo"$year:not leap year";
    }
}

?>