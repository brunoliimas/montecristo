<div class="col-md-3" style='height:240px;' class="<?php echo $class ?> box" itemscope
    itemtype="http://schema.org/Product">
    <a href="<?php echo site_url('produto/' . $row->slug) ?>" title="<?php echo $row->nome ?>">

        <picture>
            <source srcset="<?php echo 'admin/upload/item/' . $row->imagem ?>" type="image/webp">
            <source srcset="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                type="image/jpg">
            <img class="lazy img-responsive" itemprop="image"
                src="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                data-original="<?php echo image_compatibility('/admin/upload/item/' . $row->imagem, 'jpg') ?>"
                alt="<?php echo $row->nome ?>" style="max-height: 200px;" />
        </picture>

        <p class="text-center">
            <span class="nome"><strong><?php echo $row->nome ?></strong></span>

            <?php if ($row->qtd_estoque > 0 && $row->preco > 0) : ?>
            <br>
            <?php if ($row->preco_de > 0) : ?>
            <br><span class="preco">de R$ <?php echo $this->cart->format_number($row->preco_de) ?> por R$
                <?php echo $this->cart->format_number($row->preco) ?></span>
            <?php else : ?>
            <br><span class="preco">R$ <?php echo $this->cart->format_number($row->preco) ?> ou em até
                <?php echo maximo_parcelas($row->preco, $row->maximo_parcelas) ?> x de R$
                <?php echo $this->cart->format_number(valor_minimo_parcela($row->preco, $row->maximo_parcelas)) ?></span>
            <?php endif; ?>
            <?php endif; ?>
        </p>
    </a>
</div>