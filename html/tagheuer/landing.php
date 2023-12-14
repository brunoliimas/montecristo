<?php
    echo '<section class="tagheuer-container">';
        echo '<img src="'.base_url('admin/'.$categoria->imagem_tema2).'" style="max-width:100%;" />';
        echo '<article>';

            echo '<h1><img src="'.base_url('img/TAG-HEUER-LOGO-1.png').'" /><div class="borda"></div></h1>';
            echo '<p class="descricao">'.nl2br($categoria->descricao).'</p>';
        
            if(!empty($subcategorias)):
                echo '<div class="row">';
                foreach( $subcategorias  as $key=>$subcat):
                    echo '<div class="col col-md-4 col-sm-6 col-xs-6">';
                        echo '<div class="block-subcat">';
                            echo '<a href="'.base_url( $oficial_path . $categoria->slug.'/'.$subcat->slug).'" title="'.$subcat->nome.'">';
                                echo '<img class="cat-list" src="'.base_url('admin/'.$subcat->imagem_icone2).'" alt="'.$subcat->nome.'" />';
                                echo '<h2>'.$subcat->nome.'</h2>';
                                echo '<div class="qtd-modelos">'.$subcat->qtd_itens.' Modelos</div>';
                            
                                echo '<div class="moldura"></div>';
                            echo '</a>';
                        echo '</div>';
                    echo '</div>';
                endforeach;
                echo '</div>';
            endif;
        echo '</article>';
    echo '</section>';
?>