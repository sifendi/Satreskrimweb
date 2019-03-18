<?php

$cari = isset($_GET["cari"]) ? $_GET["cari"] : "kosong";

$n = rand(5, 10);

//$player["idPlayer"] = 2;
//$player["strTeam"] = $cari;
//$global["player"] = array($player);
for($i=0; $i<$n; $i++) {
    $player = array();
    $player["idPlayer"] = $i;
    $player["strTeam"] = $cari."_".$i;
    $global["player"][] = $player;
}

$rawJson = json_encode($global);

if (isset($cari)) {
    echo $rawJson;
}

/*
$sport = array("id"=>1, "description"=>"oke");
$model = array("sport"=>$sport);

$rawJson = json_encode($model);

echo $rawJson;
*/