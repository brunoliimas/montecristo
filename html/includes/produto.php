<div class="<?php (isset($class)) ? print $class : print 'col-md-4' ?> produto" itemscope
    itemtype="http://schema.org/Product">
    <a href="<?php echo site_url('produto/' . $row->slug) ?>" title="<?php echo $row->nome ?>" itemprop="url">
        <picture>
            <source srcset="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'webp') ?>"
                type="image/webp">
            <!-- jpg -->
            <source srcset="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                type="image/jpg">

            <img class="lazy img-responsive img-produto xaberto" itemprop="image"
                src="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                data-original="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                xdata-original="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                title="<?= $row->nome ?>" alt="Conheça <?= $row->nome ?>" width="239" height="173" loading="lazy" />
        </picture>
    </a>
    <div class="descricao">
        <h2><?php echo $row->nome ?></h2>
        <p>
            <span itemprop="sku"><?php echo $row->referencia ?></span>
            <?php $html = get_atributos_html($row, '<br>', array('Gema')); ?>
            <?php if ($html != '') : ?>
            <?php print "<br>{$html}"; ?>
            <?php endif; ?>

            <?php /*if($row->qtd_estoque>0 && $row->preco > 0):*/ ?>
            <?php if ($row->preco > 0) : ?>
            <?php if ($row->preco_de > 0) : ?>
            <br><span class="preco">de R$ <s><?php echo $this->cart->format_number($row->preco_de) ?></s> por <span
                    itemprop="price">R$ <?php echo $this->cart->format_number($row->preco) ?></span></span>
            <br><span class="preco">em até <?php echo maximo_parcelas($row->preco, $row->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($row->preco, $row->maximo_parcelas)) ?></span>
            <?php else : ?>
            <br><span class="preco"><span itemprop="price">R$
                    <?php echo $this->cart->format_number($row->preco) ?></span> ou em até
                <?php echo maximo_parcelas($row->preco, $row->maximo_parcelas) ?>x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($row->preco, $row->maximo_parcelas)) ?></span>
            <?php endif; ?>
            <?php endif; ?>
        </p>
        <a href="<?php echo site_url('produto/' . $row->slug) ?>" title="<?php echo $row->nome ?>" itemprop="url"
            class="btn btn-default">
            Descubra
        </a>
    </div>
</div>