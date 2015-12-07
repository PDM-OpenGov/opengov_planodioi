<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://10.128.16.157:9763/services/pdm_leaves.HTTPEndpoint/insertLeaves/all");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "param0=1000004&param1=00373&param2=ΠΕ1Μ2015&param3=ΠΕ1Μ2015&param4=2015/10/08 00:00:00&param5=2015/10/09 00:00:00&param6=2015/10/12 00:00:00&param7=24&param8=0&param9=24");

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo $server_output;

?>