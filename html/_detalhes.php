<?php require_once 'header.php'; ?>

<section class="container detalhe-produto" style="position:relative">

    <?php if (IS_MOBILE) : ?>
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="swiper-container swiper-container-horizontal" id="swiper-detalhe-mobile">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                            $i = 0;
                            foreach ($imagens as $img) : ?>
                        <div class="swiper-slide">
                            <img style="width:100%;" data-id='<?php echo base_url($img); ?>'
                                class="img-responsive modal_zoom" src="<?php echo base_url($img); ?>">
                        </div>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php if ($i > 1) : ?>
                    <div class="swiper-button-prev swiper-navigation-style">
                        <i class="fa fa-chevron-left navigation-style" aria-hidden="true"></i>
                        <!-- &lsaquo; -->
                    </div>
                    <div class="swiper-button-next swiper-navigation-style">
                        <i class="fa fa-chevron-right navigation-style" aria-hidden="true"></i>
                        <!-- &rsaquo; -->
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php

    else :
        if (sizeof($imagens) <= 2) :
        ?>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8">
            <a href="<?php echo base_url('admin/upload/item/' . $item->imagem); ?>" style="cursor:crosshair;"
                class="imgdetzoom" rel="imgdetzoom">
                <picture>
                    <source srcset="<?php echo base_url('admin/upload/item/' . $item->imagem); ?>" type="image/jpg">
                    <img class="cloudzoom img-zoom-1 img-responsive" id="zoom1"
                        src="<?php echo base_url('admin/upload/item/' . $item->imagem); ?>"
                        data-cloudzoom="zoomImage:'<?php echo base_url('admin/upload/item/' . @$item->imagem); ?>', zoomSizeMode:'image', tintColor:'#fff', captionPosition:'bottom', maxMagnification:4, autoInside:true, zoomPosition:'inside', zoomOffsetX:0"
                        title="<?= $item->nome ?>" alt="<?= htmlentities(nl2br($item->descricao)) ?>" width="617"
                        height="443" loading="lazy">
                </picture>
            </a>
        </div>
        <div class="col-md-4">
            <?php require_once 'includes/dados-detalhe-produto.php'; ?>
        </div>
    </div>
    <?php
        endif;
        if (sizeof($imagens) > 2) :
        ?>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3" style="z-index: 1">
            <br>
            <?php
                    $i = 0;
                    for ($i = 1; $i < 3; $i++) {
                        if (isset($imagens[$i])) {
                            if ($i == 2) {
                    ?>
            <img src="<?php echo base_url($imagens[$i]); ?>"
                onclick="switch_img('<?php echo base_url($imagens[$i]); ?>',2);" id="img_det_2"
                data-img="<? echo base_url($imagens[$i]); ?>" class="img-responsive img_det_2 cloudzoom-gallery"
                data-cloudzoom="
										useZoom : '#zoom1',imagem: '<? echo base_url($imagens[$i]); ?>'
										">
            <?php
                            } else {
                            ?>
            <img src="<?php echo base_url($imagens[$i]); ?>"
                onclick="switch_img('<?php echo base_url($imagens[$i]); ?>',1);" id="img_det_1" style="z-index: 1"
                data-img="<?php echo base_url($imagens[$i]); ?> " class="img-responsive img_det_1 cloudzoom-gallery"
                data-cloudzoom="
								useZoom:'#zoom1',imagem : '<? echo base_url($imagens[$i]); ?>'">
            <br>
            <?php
                            }
                        }
                        //	$i++;
                    }
                    ?>
        </div>
        <div class="col-md-5 col-sm-8 col-xs-8" style="z-index: 1">
            <a href="<?php echo base_url('admin/upload/item/' . $item->imagem) ?>" style="cursor:crosshair;"
                class="imgdetzoom" rel="imgdetzoom">
                <img class="cloudzoom img-zoom-1 img-responsive" id="zoom1"
                    src="<?php echo base_url('admin/upload/item/' . $item->imagem); ?>"
                    data-cloudzoom="zoomImage: '<?php echo base_url('admin/upload/item/' . @$item->imagem); ?>', zoomSizeMode:'image',tintColor:'#fff', captionPosition:'bottom', maxMagnification:4, autoInside:true, zoomPosition:'inside', zoomOffsetX:0"
                    title="<?= $item->nome ?>" alt="<?= nl2br($item->descricao) ?>" width="617" height="443"
                    loading="lazy">
            </a>
        </div>
        <div class="col-md-4">
            <?php require_once 'includes/dados-detalhe-produto.php'; ?>
        </div>
    </div>
    <?php
        endif;
    endif;
    ?>
    <div class="row">
        <div class="col-md-4 col-sm-4 row hide">

            <?php
            $qtd_imagens = 1;

            if ($item->imagem_d1 != '') {

                $img = '';

                if (file_exists('admin/upload/item/' . $item->imagem_d1)) {
                    $img = 'admin/upload/item/' . $item->imagem_d1;
                } elseif (file_exists('admin/img/produtos/1/' . $item->imagem_d1)) {
                    $img = 'admin/img/produtos/1/' . $item->imagem_d1;
                }

                if ($img != '') {
            ?>
            <img class="cloudzoom img-zoom-2" id="zoom2" src="<?php echo timthumb_url($img, '612', '469') ?>"
                style="display: none" data-cloudzoom="
						 zoomImage: '<?php echo base_url($img) ?>',
						 zoomSizeMode: 'image',
						 tintColor:'#fff',
						 tintOpacity:0,
						 captionPosition: 'bottom',
						 maxMagnification:4,
						 autoInside:100,
						 zoomPosition:'12',
						 zoomOffsetX: -20
						 ">
            </a>
            <a href="<?php echo base_url($img) ?>" style="cursor:crosshair; display: none" class="imgdetzoom"
                rel="imgdetzoom"><?php echo base_url($img) ?></a>
            <?php
                }
                $qtd_imagens++;
            }

            if ($item->imagem_d2 != '') {

                $img = '';

                if (file_exists('admin/upload/item/' . $item->imagem_d2)) {
                    $img = 'admin/upload/item/' . $item->imagem_d2;
                } elseif (file_exists('admin/img/produtos/1/' . $item->imagem_d2)) {
                    $img = 'admin/img/produtos/1/' . $item->imagem_d2;
                }

                if ($img != '') {
                ?>
            <img class="cloudzoom img-zoom-2" id="zoom2" src="<?php echo timthumb_url($img, '612', '469') ?>"
                style="display: none" data-cloudzoom="
						 zoomImage: '<?php echo base_url($img) ?>',
						 zoomSizeMode: 'image',
						 tintColor:'#fff',
						 tintOpacity:0,
						 captionPosition: 'bottom',
						 maxMagnification:4,
						 autoInside:100,
						 zoomPosition:'12',
						 zoomOffsetX: -20
						 ">
            </a>
            <a href="<?php echo base_url($img) ?>" style="cursor:crosshair; display: none" class="imgdetzoom"
                rel="imgdetzoom"><?php echo base_url($img) ?></a>
            <?php
                }
                $qtd_imagens++;
            }

            if ($item->imagem_d3 != '') {

                $img = '';

                if (file_exists('admin/upload/item/' . $item->imagem_d3)) {
                    $img = 'admin/upload/item/' . $item->imagem_d3;
                } elseif (file_exists('admin/img/produtos/1/' . $item->imagem_d3)) {
                    $img = 'admin/img/produtos/1/' . $item->imagem_d3;
                }

                if ($img != '') {
                ?>
            <img class="cloudzoom img-zoom-3" id="zoom3" src="<?php echo timthumb_url($img, '612', '469') ?>"
                style="display: none" data-cloudzoom="
						 zoomImage: '<?php echo base_url($img) ?>',
						 zoomSizeMode: 'image',
						 tintColor:'#fff',
						 tintOpacity:0,
						 captionPosition: 'bottom',
						 maxMagnification:4,
						 autoInside:100,
						 zoomPosition:'12',
						 zoomOffsetX: -20
						 ">
            </a>
            <a href="<?php echo base_url($img) ?>" style="cursor:crosshair; display: none" class="imgdetzoom"
                rel="imgdetzoom"><?php echo base_url($img) ?></a>
            <?php
                }
                $qtd_imagens++;
            }

            if ($qtd_imagens > 1) : ?>
            <a href="#" class="img-det-nav img-det-prev js-hide"><img
                    src="<?php echo base_url('img/bgi/prev-btn.png') ?>" /></a>
            <a href="#" class="img-det-nav img-det-next js-hide"><img
                    src="<?php echo base_url('img/bgi/next-btn.png') ?>" /></a>
            <?php endif; ?>

        </div>

        <div class="col-md-4 row hide">

            <a href="<?php echo base_url('admin/upload/item/' . $item->imagem) ?>" style="cursor:crosshair;"
                class="imgdetzoom" rel="imgdetzoom" />
            <img class="cloudzoom img-zoom-1 img-responsive" id="zoom1"
                src="<?php echo timthumb_url('admin/upload/item/' . $item->imagem, '612', '469') ?>"
                data-cloudzoom="zoomImage: '<?php echo base_url('admin/upload/item/' . @$item->imagem) ?>', zoomSizeMode: 'image', tintColor:'#fff', tintOpacity:0, captionPosition: 'bottom', maxMagnification:4, autoInside:100, zoomPosition:'12', zoomOffsetX: -20"
                title="<?= $item->nome ?>" alt="<?= nl2br($item->descricao) ?>" width="617" height="443" loading="lazy">
            </a>

        </div>

        <div class="col-md-4 descricao-detalhe hidden-md hidden-lg">

            <h1 class="product-name"><?php echo $item->nome ?></h1>

            <p class="details">
                <?php echo nl2br($item->descricao) ?>
            </p>

            <div class="product-attributes">

                <?php $itens = array() ?>

                <?php foreach ($this->db->select('caracvalor.id, caracvalor.nome valor, caracvalor.slug valor_slug, carac.nome, carac.slug carac_slug')
                    ->where('itemcarac.item_id', $item->id)
                    ->join('caracvalor', 'caracvalor.id = itemcarac.caracvalor_id')
                    ->join('carac', 'caracvalor.carac_id = carac.id')
                    ->where('caracvalor.st_ativo', 'S')
                    ->order_by('carac.ordem, carac.nome, caracvalor.nome')
                    ->get('itemcarac')->result() as $row) : ?>
                <?php

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
                    ?>
                <?php endforeach; ?>

                <?php foreach ($itens as $nome => $valores) : ?>
                <?php echo "<span>{$nome}: " . join(', ', $valores) . "</span>"; ?>
                <?php endforeach; ?>

                <?php echo $item->peso > 0 ? "<span>Peso: {$item->peso} g</span>" : "" ?>
                <?php echo $item->aros_disponiveis != '' ? "<span>Aro: {$item->aros_disponiveis}</span>" : "" ?>
                <?php echo $item->altura != '' ? "<span>Tamanho: {$item->altura}</span>" : "" ?>
                <?php echo $item->profundidade != '' ? "<span>Quilatagem: {$item->profundidade}</span>" : "" ?>

                <span>Código: <?php echo $item->referencia ?></span>

                <pre hidden><?php print_r($item) ?></pre>

            </div>

            <br clear="all">

            <div class="icones-contato">

                <ul style="display:table;margin:0 auto;">
                    <li>
                        <a href="http://instagram.com/montecristo.joalheria" aria-label="Instagram"
                            rel="noopener nofollow">
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
                        <a href="#" data-pin-height="28" class="pinterest" aria-label="Pinterest"
                            rel="noopener nofollow">
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
                        <a href="https://wa.me/5511999735102?text=Oi,%20tenho%20interesse%20no%20produto%20<?php echo site_url("produto/" . $item->slug); ?>"
                            onclick="return gtag_report_conversion('https://wa.me/5511999735102?text=Oi,%20tenho%20interesse%20no%20produto%20<?php echo site_url("produto/" . $item->slug); ?>');"
                            aria-label="Whatsapp" rel="noopener nofollow">
                            <span class="screen-reader-text">Whatsapp</span>
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>aaaaaaa
                        </a>
                    </li>

                </ul>

            </div>

            <?php if ($item->preco > 0) : ?>

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
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd1"
                                    onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a
                                    href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox"
                                    target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" class="alianca-1">
                                <?php print($item->alianca_noiva_desc != '' ? $item->alianca_noiva_desc : 'Aliança 2')  ?><br>
                                <?php echo form_dropdown('aro2', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noiva')); ?>
                            </td>
                            <td style="text-align: left" class="alianca-2">Qtd<br>
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd2"
                                    onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a
                                    href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox"
                                    target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="select-inline">
                                <p
                                    style="font-size: 11px;line-height: 11px; margin-top:5px; margin-bottom: 0px; padding-bottom: 0px;">
                                    Caso queira comprar uma só aliança,<br>deixe uma das quantidades zeradas.
                                    <?php if ($aro_personalizado) : ?>
                                    <br><br>Caso o aro desejado não esteja na lista,<br><a class="fancybox" rel="group"
                                        href="#register-page" style="font-size: 11px;">clique aqui</a> e registre seu
                                    interesse.
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
                            <td style="width:20px"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>"
                                    class="fancybox" target="_blank"><img
                                        src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1"
                                    name="qtd" onfocus="this.select()" /></td>
                        </tr>

                        <?php endif; ?>

                        <?php else : ?>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1"
                                    name="qtd" onfocus="this.select()" /></td>
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
                <br><span class="preco">em até <?php echo maximo_parcelas($item->preco, $item->maximo_parcelas) ?>x de
                    R$
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
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd1"
                                    onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a
                                    href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox"
                                    target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" class="alianca-1">
                                <?php print($item->alianca_noiva_desc != '' ? $item->alianca_noiva_desc : 'Aliança 2')  ?><br>
                                <?php echo form_dropdown('aro2', array('' => 'Aro da aliança') + $aros_disponiveis, set_value('noiva')); ?>
                            </td>
                            <td style="text-align: left" class="alianca-2">Qtd<br>
                                <input type="text" class="qty text" size="5" maxlength="5" value="1" name="qtd2"
                                    onfocus="this.select()" style="margin-left: 0px; " />
                            </td>
                            <td style="width:20px;vertical-align: bottom"><a
                                    href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>" class="xfancybox"
                                    target="_blank"><img src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="select-inline">
                                <p
                                    style="font-size: 11px;line-height: 11px; margin-top:5px; margin-bottom: 0px; padding-bottom: 0px;">
                                    Caso queira comprar uma só aliança,<br>deixe uma das quantidades zeradas.
                                    <?php if ($aro_personalizado) : ?>
                                    <br><br>Caso o aro desejado não esteja na lista,<br><a class="fancybox" rel="group"
                                        href="#register-page" style="font-size: 11px;">clique aqui</a> e registre seu
                                    interesse.
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
                            <td style="width:20px"><a href="<?php echo site_url('img/tabela_tamanhos.webp?a=1') ?>"
                                    class="fancybox" target="_blank"><img
                                        src="<?php echo base_url('img/ico-help.png') ?>" /></a></td>
                        </tr>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1"
                                    name="qtd" onfocus="this.select()" /></td>
                        </tr>

                        <?php endif; ?>

                        <?php else : ?>
                        <tr>
                            <td colspan="3">Quantidade</td>
                            <td colspan="2"><input type="text" class="qty text" size="5" maxlength="5" value="1"
                                    name="qtd" onfocus="this.select()" /></td>
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
            <h3 class="register-link"><a href="#register-page" class="fancybox" rel="group">REGISTRE SEU INTERESSE </h3>
            </a>
            <?php endif; ?>
            <!-- Event snippet for Contato conversion page
			In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
            <script>
            function gtag_report_conversion(url) {
                var callback = function() {
                    if (typeof(url) != 'undefined') {
                        window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-410925485/G21nCJevweICEK3z-MMB',
                    'event_callback': callback
                });
                return false;
            }
            </script>
        </div>

    </div>

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

    $categorias =
        $this->db->select('categoria.*')
        ->from('categoria')
        ->join('itemcategoria', 'itemcategoria.categoria_id = categoria.id AND itemcategoria.item_id = ' . $item->id)
        ->where('categoria.st_ativo', 'S')
        ->where('categoria.nivel', 1)
        ->order_by('categoria.nivel')
        ->get()
        ->result();

    $itens = array($item->id);
    $categoria_id = 0;

    foreach ($categorias as $categoria) {
        $categoria_id = $categoria->id;
    ?>
    <h2 class="text-center sub-header">Veja mais <?php echo $categoria->nome ?></h2>
    <hr>
    <?php

        $produtos =
            $this->db->select('item.*')
            ->from('item')
            ->where('item.st_ativo', 'S')
            // ->join('itemcategoria a','a.item_id = item.id and a.categoria_id = '.$vitrine->id)
            ->join('itemcategoria b', 'b.item_id = item.id and b.categoria_id = ' . $categoria->id)
            // ->join('categoria c','c.id = a.categoria_id and c.id = '.$categoria->id)
            // ->join('itemcategoria','itemcategoria.item_id = item.id and itemcategoria.categoria_id = '.$vitrine->id)
            ->where('item.id NOT IN (' . join(',', $itens) . ')')
            ->order_by('item.data_cadastro desc')
            ->limit(4)
            ->get()->result();

        ?>
    <div class="row">
        <?php

            foreach ($produtos as $row) {
                $itens[] = $row->id;
                $this->load->view(
                    'html/includes/produto.php',
                    array(
                        'class' => 'col-md-3',
                        'row' => $row
                    )
                );
            }

            ?>
    </div>
    <?php
    }


    $caracteristicas =
        $this->db->select('caracvalor.id,caracvalor.nome,caracvalor.carac_id,carac.nome carac_nome')
        ->from('caracvalor')
        ->join('itemcarac', 'itemcarac.caracvalor_id = caracvalor.id AND itemcarac.item_id = ' . $item->id)
        ->join('itemcategoria', 'itemcategoria.item_id = itemcarac.item_id AND itemcategoria.categoria_id = ' . $categoria_id)
        ->join('carac', 'carac.id = caracvalor.carac_id')
        ->where('caracvalor.st_ativo', 'S')
        ->where('caracvalor.carac_id <> 11') // Descarta o genero para essa analise

        // ->where('caracvalor.st_ativo','S')
        ->get()
        ->result();



    // print_r($item->id);

    foreach (isset($caracteristicas) ? $caracteristicas : array() as $caracteristica) {
    ?>

    <?php

        $produtos =
            $this->db->select('item.*')
            ->from('item')
            ->where('item.st_ativo', 'S')
            // ->join('itemcategoria a','a.item_id = item.id and a.categoria_id = '.$vitrine->id)
            ->join('itemcarac', 'itemcarac.item_id = item.id and itemcarac.caracvalor_id = ' . $caracteristica->id)
            ->join('itemcategoria', 'itemcategoria.item_id = itemcarac.item_id AND itemcategoria.categoria_id = ' . $categoria_id)
            // ->join('categoria c','c.id = a.categoria_id and c.id = '.$categoria->id)
            // ->join('itemcategoria','itemcategoria.item_id = item.id and itemcategoria.categoria_id = '.$vitrine->id)
            ->where('item.id NOT IN (' . join(',', $itens) . ')')
            ->order_by('item.data_cadastro desc')
            ->limit(4)
            ->get()->result();

        if (sizeof($produtos) > 0) {
        ?>
    <h2 class="text-center sub-header">Veja mais <?php echo $caracteristica->carac_nome ?>
        <?php echo $caracteristica->nome ?></h2>
    <hr>
    <div class="row">
        <?php
                foreach ($produtos as $row) {
                    $itens[] = $row->id;
                    $this->load->view(
                        'html/includes/produto.php',
                        array(
                            'class' => 'col-md-3',
                            'row' => $row
                        )
                    );
                }
                ?>
    </div>
    <?php
        }
    }
    ?>

    <div id="register-page" class="hide">

        <form action="<?php echo site_url('produtos/interesse') ?>"
            name="registro-de-interesse<?php $tissot ? print "-tissot" : '' ?><?php $tagheuer ? print "-tagheuer" : '' ?>"
            method="post" id="register-form-int">

            <div class="register-page-msg" style="color:red;margin-bottom: 10px"></div>

            <input type="hidden" id="identificador" name="identificador"
                value="registro-de-interesse<?php $tissot ? print "-tissot" : '' ?><?php $tagheuer ? print "-tagheuer" : '' ?>">
            <input type="hidden" id="url" name="url" value="<?php echo site_url("produto/" . $item->slug); ?>" />

            <input type="hidden" name="item_id" value="<?php echo $item->id ?>" />
            <div class="form-group"><input class="form-control" type="text" placeholder="Nome" name="nome" required
                    title="O campo nome é obrigatório" /></div>
            <div class="form-group"><input class="form-control" type="text" placeholder="E-mail" name="email" required
                    title="O campo e-mail é obrigatório" />
            </div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Telefone" name="fone" required
                    title="O campo telefone é obrigatório" /></div>
            <div class="form-group"><textarea class="form-control" placeholder="Mensagem" name="mensagem" rows="5"
                    title="O campo mensagem é obrigatório"></textarea></div>
            <div>
                <div class="g-recaptcha" data-sitekey="<?php echo get_siteconfig('GRECAPTCHA_SITEKEY') ?>"></div>
            </div>
            <div style="margin-top:24px;"><input type="submit" value="Enviar"
                    class="register-page-btn btn btn-default" /></div>
        </form>
    </div>

    <?php
    /*
	if(
		   (@$mesma_gema && is_array($mesma_gema))
		|| (@$relacionados && is_array($relacionados))
		|| (@$mais_relacionados && is_array($mais_relacionados))): ?>

    <h3>ITENS RELACIONADOS</h3>

    <?php $i = 1; ?>

    <?php foreach(is_array(@$mesma_gema)?$mesma_gema:array() as $produto): ?>
    <?php $class = ( $i==3 || $i==4 ? 'size86' : 'size43' ) ?>
    <?php $this->load->view('html/includes/produto.php', array('class'=>$class, 'row'=>$produto));?>
    <?php $i ++ ; ?>
    <?php endforeach; ?>

    <?php foreach(is_array(@$relacionados)?$relacionados:array() as $produto): ?>
    <?php $class = ( $i==3 || $i==4 ? 'size86' : 'size43' ) ?>
    <?php $this->load->view('html/includes/produto.php', array('class'=>$class, 'row'=>$produto));?>
    <?php $i ++ ; ?>
    <?php endforeach; ?>

    <?php foreach(is_array(@$mais_relacionados)?$mais_relacionados:array() as $produto): ?>
    <?php $class = ( $i==3 || $i==4 ? 'size86' : 'size43' ) ?>
    <?php $this->load->view('html/includes/produto.php', array('class'=>$class, 'row'=>$produto));?>
    <?php $i ++ ; ?>
    <?php endforeach; ?>
    <?php endif;
</div>
	*/
    ?>


</section>

<!-- Google Code for Registro de Interesse Conversion Page -->
<script>
/* <![CDATA[ */
var google_conversion_id = 867541032;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "dzvZCJLcmHEQqMDWnQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
            src="//www.googleadservices.com/pagead/conversion/867541032/?label=dzvZCJLcmHEQqMDWnQM&amp;guid=ON&amp;script=0" />
    </div>
</noscript>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id='modal_body'>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </div>
    </div>
</div>


<?php

require_once 'footer.php';
?>
<script>
$(".modal_zoom").bind("click", function() {
    img = $(this).data("id");
    $("#modal_body").html("<img style='width:100%' src='" + img + "'> ");
})
</script>