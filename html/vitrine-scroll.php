<div class="row">
    <div class="col-sm-2 hidden-xs">
        <?php
        print '<input type="hidden" id="categoria_id" value="'.@$categoria->id.'">';
        require 'includes/filtro-caracteristicas.php';
        ?>
    </div>
    <div class="col-sm-10">

        <?php
        $i = 0;
        $iimagem = 0;
        $x = 0;

        while(true){

            if(!isset($produtos[$x])){
                break;
            }

            print "<div class='row produtos-row'>";

            for($a = 0;$a<3;$a++){

                if(!isset($produtos[$x])){
                    break;
                }

                $this->load->view('html/includes/produto.php', array('row'=>$produtos[$x]));
                $x ++;
            }

            print "</div>";
        }
        ?>
        <!-- <a href="<?php echo site_url('produtos/scroll/1/?'.http_build_query(
                array(
                    'categoria_id' => @$categoria->id,
                    'caracvalor' => array_merge(is_array(@$caracvalor)?$caracvalor:array(),is_array(@$caracteristicas_selecionadas)?$caracteristicas_selecionadas:array()),
                    'online' => @$online,
                    'colecao'=>@$colecao,
                    'offset' => isset($offset) ? $offset : null
                )
            )) ?>" class="next-page" xstyle="display:none"></a> -->
    </div>
</div>