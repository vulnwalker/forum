<?php

require("plugins/MaterialDesign.Avatars.class.php");
$Avatar = new MDAvtars(mb_substr("hubla", 0, 1, "UTF-8"), 256);
//$Avatar->Save('img/avatars/' . $CurUserID . '.png', 256);
$Avatar->Save('img/avatars/' . "hubla" . '.png', 60);
//$Avatar->Save(__DIR__ . '/../upload/avatar/small/' . $CurUserID . '.png', 24);
$Avatar->Free();


 ?>
