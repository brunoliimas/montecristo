<h1 class="product-name">
    <?php echo $item->nome ?>
    <span hidden>
        <?php echo print_r($item->referencia) ?>
    </span>
</h1>

<p class="details">
    <?php echo nl2br($item->descricao) ?>
</p>

<div class="product-attributes">

    <?php

    $tissot = $this->db
        ->select('categoria.id')
        ->from('categoria')
        ->join('itemcategoria', 'itemcategoria.categoria_id = categoria.id')
        ->like('categoria.nome', 'TISSOT')
        ->where('itemcategoria.item_id', $item->id)
        ->get()->row();

    $tagheuer = $this->db
        ->select('categoria.id')
        ->from('categoria')
        ->join('itemcategoria', 'itemcategoria.categoria_id = categoria.id')
        ->like('categoria.nome', 'TAG Heuer')
        ->where('itemcategoria.item_id', $item->id)
        ->get()->row();


    $itens = array();
    foreach ($this->db->select('caracvalor.id, caracvalor.nome valor, caracvalor.slug valor_slug, carac.nome, carac.slug carac_slug')
        ->where('itemcarac.item_id', $item->id)
        ->join('caracvalor', 'caracvalor.id = itemcarac.caracvalor_id')
        ->join('carac', 'caracvalor.carac_id = carac.id')
        ->where('caracvalor.st_ativo', 'S')
        ->order_by('carac.ordem, carac.nome, caracvalor.nome')
        ->get('itemcarac')->result() as $row) :

        // print_r($row);

        if (!@$itens[$row->nome]) {
            $itens[$row->nome] = array();
        }
        if ($row->id == '464' && trim($item->gema) != '') {
            $itens[$row->nome][] = $item->gema;
        } elseif ($row->carac_slug == 'Colecao') {
            $itens[$row->nome][] = anchor(site_url(array('colecao', $row->valor_slug)), $row->valor);
        } else {
            $itens[$row->nome][] = anchor(site_url(array('produtos', 'buscar', $row->carac_slug, $row->valor_slug)), $row->valor);
        }

    endforeach;

    foreach ($itens as $nome => $valores) :
        echo "<p><b>{$nome}:</b> " . join(', ', $valores) . "</p>";
    endforeach;

    echo $item->peso > 0 ? "<p><b>Peso:</b> {$item->peso} g</p>" : "";
    echo $item->aros_disponiveis != '' ? "<p><b>Aro:</b>  {$item->aros_disponiveis}</p>" : "";
    echo $item->altura != '' ? "<p><b>Tamanho:</b> {$item->altura}</p>" : "";
    echo $item->profundidade != '' ? "<p><b>Quilatagem:</b> {$item->profundidade}</p>" : "";

    ?>
    <p><b>Código:</b> <?php echo $item->referencia ?></p>

</div>

<br clear="all">

<?php if ($item->preco > 0) : ?>

    <?php if ($item->preco_de > 0) : ?>

        <p class="lead">
            de R$ <s><?php echo $this->cart->format_number($item->preco_de) ?></s>
            <br>por R$ <?php echo $this->cart->format_number($item->preco) ?>
            <small><br>em até <?php echo maximo_parcelas($item->preco, $item->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($item->preco, $item->maximo_parcelas)) ?></small>
        </p>

    <?php else : ?>

        <p class="lead">
            R$ <?php echo $this->cart->format_number($item->preco) ?>
            <small><br>em até <?php echo maximo_parcelas($item->preco, $item->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($item->preco, $item->maximo_parcelas)) ?></small>
        </p>

    <?php endif; ?>

    <?php if ($item->qtd_estoque > 0) : ?>
        <form action="<?php echo site_url("carrinho/add/{$item->id}") ?>" class="formAdd">

            <div class="item-config" style="text-align:right">

                <table class="table table-item">

                    <?php if ($item->st_habilita_aro == 'S') : ?>

                        <?php if ($item->tipo_alianca == 'dupla') : ?>

                            <input type="hidden" name="is_alianca" value="1" />
                            <tr>
                                <td style="text-align: left" class="alianca-1">
                                    <?php print($item->alianca_noivo_desc != '' ? $item->alianca_noivo_desc : 'Aliança 1')  ?><br>
                                    <?php echo form_dropdown('aro1', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noivo')); ?>
                                </td>
                                <td style="text-align: left" class="alianca-2">Qtd<br>
                                    <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd1" onfocus="this.select()" style="margin-left: 0px; " />
                                </td>
                                <td style="width:20px;vertical-align: bottom"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left" class="alianca-1">
                                    <?php print($item->alianca_noiva_desc != '' ? $item->alianca_noiva_desc : 'Aliança 2')  ?><br>
                                    <?php echo form_dropdown('aro2', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noiva')); ?>
                                </td>
                                <td style="text-align: left" class="alianca-2">Qtd<br>
                                    <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd2" onfocus="this.select()" style="margin-left: 0px; " />
                                </td>
                                <td style="width:20px;vertical-align: bottom"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="select-inline">
                                    <p style="font-size: 11px;line-height: 11px; margin-top:5px; margin-bottom: 0px; padding-bottom: 0px;">
                                        Caso queira comprar uma só aliança,<br>deixe uma das quantidades zeradas.
                                        <?php if ($aro_personalizado) : ?>
                                            <br><br>Caso o aro desejado não esteja na lista,<br><a class="fancybox" rel="group" href="#register-page" style="font-size: 11px;">clique aqui</a> e registre seu interesse.
                                        <?php endif; ?>
                                    </p>
                                </td>
                            </tr>

                        <?php elseif ($item->tipo_alianca == 'simples') : ?>

                            <input type="hidden" name="is_anel" value="1" />
                            <tr>
                                <td colspan="2">Aro do anel</td>
                                <td colspan="2">
                                    <?php echo form_dropdown('aro', $aros_disponiveis, set_value('noivo')); ?>
                                </td>
                                <td style="width:20px"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="fancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                            </tr>
                            <tr>
                                <td colspan="3">Quantidade</td>
                                <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd" onfocus="this.select()" /></td>
                            </tr>

                        <?php endif; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd" onfocus="this.select()" /></td>
                        </tr>
                    <?php endif; ?>

                </table>

            </div>
            <br clear="all" />
            <br clear="all" />
            <div class="alert alert-danger js-add-erro" style="display:none"></div>
            <a href="#" class="btn btn-det js-add">ADICIONAR À SACOLA</a>

            <br clear="all">
            <div class="avisodisponibilidade">
                Disponibilidade do produto<br>sob consulta no estoque
            </div>
        </form>
    <?php endif; ?>

<?php endif; ?>

<?php if ($item->qtd_estoque > 0 && $item->preco > 0 && false) : ?>
    <form action="<?php echo site_url("carrinho/add/{$item->id}") ?>" class="formAdd">

        <?php if ($item->preco_de > 0) : ?>
            <span class="preco">de R$ <s><?php echo $this->cart->format_number($item->preco_de) ?></s> por R$
                <?php echo $this->cart->format_number($item->preco) ?></span>
            <br><span class="preco">em até <?php echo maximo_parcelas($item->preco, $item->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($item->preco, $item->maximo_parcelas)) ?></span>
        <?php else : ?>
            <span class="preco">R$ <?php echo $this->cart->format_number($item->preco) ?> em até
                <?php echo maximo_parcelas($item->preco, $item->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($item->preco, $item->maximo_parcelas)) ?></span>
        <?php endif; ?>
        <br>

        <div class="item-config" style="text-align:right">

            <table class="table table-item">

                <?php if ($item->st_habilita_aro == 'S') : ?>

                    <?php if ($item->tipo_alianca == 'dupla') : ?>

                        <input type="hidden" name="is_alianca" value="1" />
                        <tr>
                            <td style="text-align: left" class="alianca-1">
                                <?php print($item->alianca_noivo_desc != '' ? $item->alianca_noivo_desc : 'Aliança 1')  ?><br>
                                <?php echo form_dropdown('aro1', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noivo')); ?>
                            </td>
                            <td style="text-align: left" class="alianca-2">Qtd<br>
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd1" onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" class="alianca-1">
                                <?php print($item->alianca_noiva_desc != '' ? $item->alianca_noiva_desc : 'Aliança 2')  ?><br>
                                <?php echo form_dropdown('aro2', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noiva')); ?>
                            </td>
                            <td style="text-align: left" class="alianca-2">Qtd<br>
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd2" onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="select-inline">
                                <p style="font-size: 11px;line-height: 11px; margin-top:5px; margin-bottom: 0px; padding-bottom: 0px;">
                                    Caso queira comprar uma só aliança,<br>deixe uma das quantidades zeradas.
                                    <?php if ($aro_personalizado) : ?>
                                        <br><br>Caso o aro desejado não esteja na lista,<br><a class="fancybox" rel="group" href="#register-page" style="font-size: 11px;">clique aqui</a> e registre seu interesse.
                                    <?php endif; ?>
                                </p>
                            </td>
                        </tr>

                    <?php elseif ($item->tipo_alianca == 'simples') : ?>

                        <input type="hidden" name="is_anel" value="1" />
                        <tr>
                            <td colspan="2">Aro do anel</td>
                            <td colspan="2">
                                <?php echo form_dropdown('aro', $aros_disponiveis, set_value('noivo')); ?>
                            </td>
                            <td style="width:20px"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="fancybox" target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd" onfocus="this.select()" /></td>
                        </tr>

                    <?php endif; ?>

                <?php else : ?>
                    <tr>
                        <td colspan="3">Quantidade</td>
                        <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd" onfocus="this.select()" /></td>
                    </tr>
                <?php endif; ?>

            </table>

        </div>
        <br clear="all" />
        <br clear="all" />
        <div class="alert alert-danger js-add-erro" style="display:none"></div>
        <a href="#" class="btn btn-det js-add">ADICIONAR À SACOLA</a>

        <br clear="all">
        <div class="avisodisponibilidade">
            Disponibilidade do produto<br>sob consulta no estoque
        </div>

    </form>
<?php endif; ?>

<?php if (!($item->qtd_estoque > 0 && $item->preco > 0)) : ?>
    <a href="#register-page" class="btn btn-default btn-lg fancybox d-none" rel="group" hidden >        
        REGISTRE SEU INTERESSE
    </a> 
    <a  href="https://wa.me/5511964175881?text=Oi,%20tenho%20interesse%20no%20produto%20<?php echo site_url("produto/" . $item->slug); ?>%20<?php echo $item->nome ?>%20codigo%20<?php echo $item->referencia ?>" target="_blank" class="btn btn-default btn-lg fancybox" rel="group">
        FALE COM O CONCIERGE
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<br>
<br>
<div class="icones-contato">
    <ul style="display:table;">
        <li>
            <a href="http://instagram.com/montecristo.joalheria" aria-label="Instagram" rel="noopener nofollow">
                <span class="screen-reader-text">Instagram</span>
                <i class="fa fa-instagram"></i>
            </a>
        </li>
        <li>
            <a href="#" class="js-fb-share" aria-label="Facebook" rel="noopener nofollow">
                <span class="screen-reader-text js-fb-share">Facebook</span>
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li>
            <a href="#" data-pin-height="28" class="pinterest" aria-label="Pinterest" rel="noopener nofollow">
                <span class="screen-reader-text pinterest">Pinterest</span>
                <i class="fa fa-pinterest-p" aria-hidden="true">
                </i>
            </a>
        </li>

        <!-- <li><a onclick="addProdutoFavorito(this,event)" href="<?php echo site_url('favoritos/adicionar/' . $item->id) ?>"><span class="screen-reader-text">Favoritos</span> <i class="fa fa-heart-o"></i></a></li> -->

        <li>
            <a href="<?php echo site_url('contato') ?>" aria-label="Contato" rel="noopener nofollow">
                <span class="screen-reader-text">Contato</span>
                <i class="fa fa-phone" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <!-- aqui -->
            <a href="https://wa.me/5511964175881?text=Oi,%20tenho%20interesse%20no%20produto%20<?php echo site_url("produto/" . $item->slug); ?>%20<?php echo $item->nome ?>%20codigo%20<?php echo $item->referencia ?>" onclick="return gtag_report_conversion('https://wa.me/5511964175881?text=Oi,%20tenho%20interesse%20no%20produto%20<?php echo site_url("produto/" . $item->slug); ?>');" aria-label="Whatsapp" rel="noopener nofollow">
                <span class="screen-reader-text">Whatsapp</span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
    <div id="_favorito_msg" class="alert" style="display:none;"></div>

    <input type="hidden" id="item_nome" value="<?php echo $item->nome ?>">
    <input type="hidden" id="item_imagem" value="<?php echo $item->imagem ?>">
</div>


<div id="register-page" class="hide d-none" hidden>

    <form action="<?php echo site_url('produtos/interesse') ?>" name="registro-de-interesse<?php $tissot ? print "-tissot" : '' ?><?php $tagheuer ? print "-tagheuer" : '' ?>" method="post" id="register-form-int">

        <div class="register-page-msg" style="color:red;margin-bottom: 10px"></div>

        <input type="hidden" id="identificador" name="identificador" value="registro-de-interesse<?php $tissot ? print "-tissot" : '' ?><?php $tagheuer ? print "-tagheuer" : '' ?>">
        <input type="hidden" id="url" name="url" value="<?php echo site_url("produto/" . $item->slug); ?>" />

        <input type="hidden" name="item_id" value="<?php echo $item->id ?>" />
        <div class="form-group"><input class="form-control" type="text" placeholder="Nome" name="nome" required title="O campo nome é obrigatório" /></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="E-mail" name="email" required title="O campo e-mail é obrigatório" />
        </div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Telefone" name="fone" required title="O campo telefone é obrigatório" /></div>
        <div class="form-group"><textarea class="form-control" placeholder="Mensagem" name="mensagem" rows="5" title="O campo mensagem é obrigatório"></textarea></div>
        <div>
            <div class="g-recaptcha" data-sitekey="<?php echo get_siteconfig('GRECAPTCHA_SITEKEY') ?>"></div>
        </div>
        <div style="margin-top:24px;"><input type="submit" value="Enviar" class="register-page-btn btn btn-default" />
        </div>
    </form>
</div>