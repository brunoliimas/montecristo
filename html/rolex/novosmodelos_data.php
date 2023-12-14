<?php

define('BASE_URL_NEW_MODELS', ' https://montecristo.com.br/rolex/colecao?cmplp=');
$loop_new_models = [];
$empresa_name = "MONTECRISTO";

function add_new_model($title, $id, $slug, &$loop_new_models )
{
    $loop_new_models[]  = [
        "slug" => BASE_URL_NEW_MODELS . $slug,
        "id" =>  $id,
        "title" => strtoupper($title)
    ];
}

$loop_new_models[] = ['COSMOGRAPH DAYTONA', 'cosmograph_daytona', 'rolex-watches/cosmograph-daytona/m126506-0002'];
$loop_new_models[] = ['1908', 'perpetual_1908', 'rolex-watches/1908/m52508-0006'];
$loop_new_models[] = ['YACHT-MASTER 42', 'yacht_master_42', 'rolex-watches/yacht-master/m226627-0001'];
$loop_new_models[] = ['SKY-DWELLER', 'sky_dweller', 'rolex-watches/sky-dweller/m336239-0002'];
$loop_new_models[] = ['GMT-MASTER II', 'gmt_master_2', 'rolex-watches/gmt-master-ii/m126713grnr-0001'];
$loop_new_models[] = ['EXPLORER 40', 'explorer', 'rolex-watches/explorer/m224270-0001'];
$loop_new_models[] = ['OYSTER PERPETUAL', 'oyster_perpetual', 'rolex-watches/oyster-perpetual/m124300-0008'];
$loop_new_models[] = ['DAY-DATE 36', 'day_date_36', 'rolex-watches/day-date/m128345rbr-0068'];

$temp_new_model = [];
foreach($loop_new_models as $p)  {
    $temp_new_model[] =  [
        "slug" => BASE_URL_NEW_MODELS . $p[2],
        "id" =>  $p[1],
        "title" => strtoupper($p[0])
    ];
}

$loop_new_models = $temp_new_model;

function render_tpl_new_model($loop, $fn)
{
    $html = '';
    foreach ($loop as $p) {

        $html .= $fn($p);
    }
    return $html;
}
