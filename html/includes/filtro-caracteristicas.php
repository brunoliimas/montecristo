<?php if(isset($caracteristicas) && sizeof($caracteristicas)>0): ?>
    <div class="js-caracteristicas">
        <input type="hidden" name="categoria_id" value="<?php echo @$categoria->id ?>" />
        <input type="hidden" name="online" value="<?php echo @$online ?>" />
        <input type="hidden" name="colecao" value="<?php echo @$colecao ?>" />
        <div class="caracteristicas-filtro-container">
            <?php
            $i = 0;
            foreach($caracteristicas as $nome => $valores): ?>
                <div class="caracteristica">
                    <p><strong><?php echo $nome ?></strong></p>
                    <ul>
                        <?php
                        $z = 0;

                        if(!isset($caracteristicas_selecionadas)){
                            $caracteristicas_selecionadas = array();
                        }

                        if(!is_array($caracteristicas_selecionadas)){
                            $caracteristicas_selecionadas = array();
                        }

                        foreach($valores as $id => $valor):
                            if(in_array($id,$caracteristicas_selecionadas)){
                                ?>
                                <li>
                                    <!--input type="hidden" name="caracvalor[]"
                                <?php (@$colecao == $id || in_array($id,isset($caracteristicas_selecionadas)?$caracteristicas_selecionadas:array())) ? print 'checked' : '' ?>
                                xvalue="<?php echo $id ?>" id="caracvalor_" -->
                                <span class="nome-caracteristica" data-id="<?php echo $id ?>" data-selecionado="true">
                                    <i class="fa fa-square" aria-hidden="true"></i> <?php echo $valor ?>
                                </span>
                                </li>
                                <?php
                            }
                            else {
                                ?>
                                <li>
                                    <span class="nome-caracteristica" data-id="<?php echo $id ?>">
                                        <i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $valor ?>
                                    </span>
                                </li>
                                <?php
                            }
                            $z ++;
                        endforeach;
                        ?>
                    </ul>
                </div>
            <?php
            endforeach;
            ?>
            <div class="caracteristica">
                <p><strong>Ordenar por</strong></p>
                <ul>
                    <li><span class="nome-caracteristica" id='menor_preco'  data-text="menor_preco"><i class="fa fa-square-o filter_i" aria-hidden="true"></i> Menor preço</span></li>
                    <li><span class="nome-caracteristica" id='maior_preco' data-text="maior_preco"><i class="fa fa-square-o filter_i" aria-hidden="true"></i> Maior preço</span></li>
                </ul>
            </div>
        </div>
        <br>
        <button class="btn btn-default btn-block " onclick="removeFilter();">Limpar filtros</button>
    </div>

<input type="hidden" id="pagina_atual">
<input type="hidden" id="caracvalor">
<input type="hidden" id="categ_ids">
    <?php
endif;