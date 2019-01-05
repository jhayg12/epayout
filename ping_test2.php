<?php
$str = exec("ping -c 1 119.93.235.95");
if ($result == 0){
  echo "ping succeeded";
}else{
  echo "ping failed";
}
?>