<?php

$wetterdaten = file_get_contents("https://www.metaweather.com/api/location/638242/");
$wetterdaten = json_decode (wetterdaten, true);
?>
<pre>
<?php 

echo $wetterdaten[]
//var_dump($wetterdaten); ?>
</pre>









