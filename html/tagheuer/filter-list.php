<?php
ob_start();
if(!empty($produtos)):
    foreach( $produtos as $key=>$prod):        
        echo $prod;
    endforeach;
else:
    echo '<p style="text-align:center;padding: 80px 0;font-size: 1.8em;">Nenhum produto encontrado para a combinação de filtro selecionada.</p>';
endif;
$x = ob_get_contents();
ob_end_clean();
echo $x;