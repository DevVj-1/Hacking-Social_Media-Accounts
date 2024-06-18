<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share  internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is  pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$realip = getRealIpAddr();
$log = 'log.html';
$ip = $_SERVER['REMOTE_ADDR'];
$page = $_SERVER['REQUEST_URI'];
$refer = $_SERVER['HTTP_REFERER'];
$date_time = date("l j F Y  g:ia", time() - date("Z")) ;
$agent = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen("log.html", "a");
fputs($fp, "
<b>$date_time</b> <br> <b>IP:  </b>$ip<br><b>IP:  </b>$realip<br><b>Page:  </b>$page<br><b>Refer:  </b>$refer<br><b>Useragent: 

</b>$agent <br><br>
");
flock($fp, 3); 
fclose($fp);
?>
