<?php
echo '<section class="tagheuer-container">';
echo '<div class="banner-produto">';

echo '<picture>';
echo '<source srcset="' . base_url('img/CAY1110.BA0925%20AQRC%20300M%20QTZ%20MOOD%20PACKSHOT%202015%20HD.webp') . '" type="image/webp">';
echo '<img src="' . base_url('img/CAY1110.BA0925 AQRC 300M QTZ MOOD PACKSHOT 2015 HD.png') . '" style="max-width:100%;height:449px;" />';
echo '</picture>';

echo '<div class="container-infos">';
echo '<div class="infos">';
echo '<picture>';
// echo '<source srcset="' . image_compatibility(base_url('admin/upload/item/' . $produto->imagem_destaque), 'webp') . '" type="image/webp">';
echo '<img class="img-produto" src="' . base_url('admin/upload/item/' . $produto->imagem_destaque) . '" />';
echo '</picture>';

echo '<div class="contents">';
echo '<picture>';
echo '<source srcset="' . base_url('img/TH_LOGO-2Lignes-Quadri-NEG.webp'). '" type="image/webp">';
echo '<img src="' . base_url('img/TH_LOGO-2Lignes-Quadri-NEG.png') . '" style="max-width:285px;" />';
echo '</picture>';
echo '<h2>' . $subcategoria->nome . '</h2>';
echo '<p>';
foreach ($specs_description as $key => $spec) :
    echo $spec->CaracNome . ': ' . $spec->CaracvalorNome . '<br>';
endforeach;
echo 'Código: <span style="font-weight:400;">' . $produto->referencia . '</span>';
echo '</p>';
if (!($produto->qtd_estoque > 0 && $produto->preco > 0)) :
    echo '<a href="#register-page" class="fancybox" rel="group">REGISTRE SEU INTERESSE</a>';
endif;
echo '</div>';

echo '</div>';
echo '</div>';

echo '</div>';

echo '<article>';

echo '<div class="icones-contato icones-contato-tag">';
echo '<ul>';
echo '<li><a target="_blank" href="http://instagram.com/montecristo.joalheria"><span class="screen-reader-text">Instagram</span> <i class="fa fa-instagram"></i></a></li>';
echo '<li><a href="#" class="js-fb-share"><span class="screen-reader-text js-fb-share">Facebook</span> <i class="fa fa-facebook"></i></a></li>';
echo '<li><a data-pin-height="28" class="pinterest" href="#"><span class="screen-reader-text pinterest">Pinterest</span> <i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>';
echo '</ul>';
echo '<div id="_favorito_msg" class="alert" style="display:none;"></div>';
echo '</div>';

echo '<h1 class="produto-titulo">' . $produto->referencia . '</h1>';

echo '<p class="spec-descricao">';
foreach ($specs_description as $key => $spec) :
    echo $spec->CaracNome . ': ' . $spec->CaracvalorNome . '<br>';
endforeach;
echo 'Código: <span style="font-weight:400;">' . $produto->referencia . '</span>';
echo '</p>';

echo '<p class="descricao produto">' . $produto->descricao . '</p>';

echo '<div class="detalhes-container">';

echo '<div class="swiper-container detalhe-tag-swipe" id="detalhe-swipe" loop="true">';
echo '<div class="swiper-wrapper">';
$imagens_detalhes = 8;
for ($i = 0; $i < $imagens_detalhes; $i++) {
    if ($i == 0) $imagem = 'imagem';
    else $imagem = 'imagem_d' . $i;

    if (!empty($produto->$imagem) && file_exists('admin/upload/item/' . $produto->$imagem)) {
        echo '<div class="swiper-slide">';
        echo '<a class="grouped_elements" rel="group1" href="' . base_url('admin/upload/item/' . $produto->$imagem) . '">';
        echo '<picture>';
        echo '<source srcset="' . image_compatibility(base_url('admin/upload/item/' . $produto->$imagem), 'webp') . '" type="image/webp">';
        echo '<img src="' . base_url('admin/upload/item/' . $produto->$imagem) . '" style="max-width:100%;" />';
        echo '</picture>';
        echo '</a>';
        echo '</div>';
    }
}
echo '</div>';
echo '</div>';

echo '<div class="swiper-button-prev"></div>';
echo '<div class="swiper-button-next"></div>';

echo '</div>';

echo '<div class="produto-especificacoes">';
echo '<table>';
foreach ($especificacoes as $spec) :
    if (!empty($spec->conteudo)) echo '<tr><td>' . $spec->titulo . '</td><td>' . $spec->conteudo . '</td></tr>';
endforeach;
echo '</table>';
echo '</div>';

echo '</article>';

echo '</section>';

?>
<div id="register-page" class="hide">
    <form action="<?php echo site_url('produtos/interesse') ?>" name="registro-de-interesse-tagheuer" method="post" id="register-form-int">

        <div class="register-page-msg" style="color:red;margin-bottom: 10px"></div>

        <input type="hidden" id="identificador" name="identificador" value="registro-de-interesse-tagheuer">
        <input type="hidden" id="url" name="url" value="<?php echo site_url("produto/" . $produto->slug); ?>" />

        <input type="hidden" name="item_id" value="<?php echo $produto->id ?>" />
        <div class="form-group"><input class="form-control" type="text" placeholder="Nome" name="nome" required title="O campo nome é obrigatório" /></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="E-mail" name="email" required title="O campo e-mail é obrigatório" />
        </div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Telefone" name="fone" required title="O campo telefone é obrigatório" /></div>
        <div class="form-group"><textarea class="form-control" placeholder="Mensagem" name="mensagem" rows="5" title="O campo mensagem é obrigatório"></textarea></div>
        <div>
            <div class="g-recaptcha" data-sitekey="<?php echo get_siteconfig('GRECAPTCHA_SITEKEY') ?>"></div>
        </div>
        <div style="margin-top:24px;"><input type="submit" value="Enviar" class="register-page-btn btn btn-default" /></div>
    </form>
</div>