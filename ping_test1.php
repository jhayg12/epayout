<?php

/* our simple php ping function */
function ping($host)
{
        exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}

/* check if the host is up
        $host can also be an ip address */
$host = 'www.example.com';
$up = ping($host);

/* optionally display either a red or green image to signify the server status */
echo '<img src="'.($up ? 'on' : 'off').'.jpg" alt="'.($up ? 'up' : 'down').'" />';

?>