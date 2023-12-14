<?php

    echo '<section class="tagheuer-container tagheuer-list">';
        echo '<img src="'.base_url('admin/'.$subcategoria->imagem_tema2).'" style="max-width:100%;" />';

        echo '<article>';
            echo '<input type="hidden" id="categoria_id" value="'.$subcategoria->id.'" />';

            echo '<h1 class="title-cat">'.$categoria->nome.' '.$subcategoria->nome.'<div class="borda"></div></h1>';
            echo '<p class="descricao">'.nl2br($subcategoria->descricao).'</p>';

            /** FILTRO */
            echo '<div class="open-filtro">';
                echo '<div class="bt-filter" id="js-bt-filter"><i class="fa fa-sliders" aria-hidden="true"></i>filtrar</div>';
            echo '</div>';

            echo '<div class="filter-container" id="_filter"><div class="close-filter js-close-filter"></div><aside class="filter">';
                
                echo '<div class="fitler-opts-container">';

                    foreach( $filtros as $key=>$value ):
                        echo '<legend onclick="openOpts('.$key.')">'.$value['carac_nome'].'</legend>';
                        echo '<div class="opts-lists" id="opts_'.$key.'">';
                            foreach($value['caracteristicas'] as $caracvalor):
                                echo '<label class="js-filtro"><input id="checkbox_'.$caracvalor->id.'" data-id="'.$caracvalor->id.'" data-name="'.$caracvalor->nome.'" type="checkbox" />'.$caracvalor->nome.'</label>';
                            endforeach;
                        echo '</div>';
                    endforeach;

                echo '</div>';

                echo '<div class="filter-actions">';
                    echo '<span id="block-bt-redefinir" class="btn-limpar-filtro"><img src="'.base_url('img/Icon feather-refresh-ccw.png').'" />limpar filtros</span>';
                    echo '<div class="opts-selected" >';
                        echo '<table style="position:absolute;top:0;left:0;">
                            <tr id="opts-selected">
                            </tr>
                        </table>'
                    ;
                    echo '</div>';
                    echo '<span class="btn-aplicar-filtro js-close-filter">Aplicar Filtro</span>';
                echo '</div>';

            echo '</aside></div>';
            /** *** */

            if(!empty($produtos)):
                echo '<div class="row" id="_produtos">';
                foreach( $produtos as $key=>$prod):                      
                    echo $prod;
                endforeach;
                echo '</div>';

                echo '<div id="load_data_circle" style="text-align:center;padding:60px 0 20px 0;display:none;position: fixed;background-color: rgba(255,255,255,.7);width: 100%;height: 100%;top: 0px;left: 0;">';
                echo '<table style="width:100%;height:100%;"><tr><td style="text-align:center;vertical-align:middle;">';
                echo '<i style="font-size:6em;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i>';
                echo '<span class="sr-only">Loading...</span>';
                echo '</td></tr></table>';
                echo '</div>';


            endif;

        echo '</article>';
    echo '</section>';