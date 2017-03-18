<?php
    if (array_key_exists('param',$_GET)) {
        $place = $_GET['param'];
        do {
            $result = json_decode(file_get_contents("https://www.roblox.com/Game/PlaceLauncher.ashx?request=RequestGame&placeid=$place&isPartyLeader=false&gender=&isTeleport=true"),true);
        } while (!empty($result) && $result['status'] != 0);
        echo "Created new server for place $place.";
    };
?>