<?php
// file remaker v 0.1

  

function remake($src){
    $content = file_get_contents($src);
    $new_name = md5(time().rand(0,999999)).".php";
    $fp = fopen($new_name, "w+");
    fwrite($fp, $content);
    fwrite($fp, '<?php unlink(basename($_SERVER["SCRIPT_NAME"])); ?>');
    fclose($fp);
    return $new_name;
}


?>