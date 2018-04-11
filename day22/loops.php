<?php

// set script time limit to 5 secs
set_time_limit(5);


$days_to_christmas = 5; //365 - 7 - 37;

while($days_to_christmas > 0)
{
    $days_to_christmas--; 

    echo 'There are still ' . $days_to_christmas . ' days to christmas.<br>';
}

echo '<hr>';

$time_served = 0;

while($time_served < 10)
{
    $time_served++;

    echo 'The prisoner has served ' . $time_served . ' years.<br>';
}

echo '<hr>';

$time_served = 0;

do
{
    $time_served++;

    echo 'The prisoner has served ' . $time_served . ' years.<br>';
}
while($time_served < 10);

echo '<hr>';

for($i = 0; $i < 10; $i++)
{
    echo 'This is the ' . $i . '. iteration of the loop<br>';
}

echo '<hr>';

for($i = 0; $i < 5; $i++)
{
    echo 'The prisoner has ' . (5-$i) . ' more years to serve<br>';
}

echo '<hr>';

for($i = 5; $i > 0; $i--)
{
    echo 'The prisoner has ' . $i . ' more years to serve<br>';
}

echo '<hr>';

for($i = 10; $i > 0; $i--)
{
    echo 'The prisoner has ' . $i . ' more years to serve<br>';

    // skip the rest of the loop's code if he has more than 5 years left
    if($i > 5) continue;

    echo 'Going to a parole hearing...<br>';

    if($i == 2)
    {
        echo 'Paroled!';
        break;
    }
}