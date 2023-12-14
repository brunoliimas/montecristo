<div class="swiper-slide">
    <a href="<?php echo $link ?>" title="<?php echo $categoria ?>" itemprop="url">
        <picture>
            <!-- WEBP DESKTOP -->
            <source srcset="<?php echo $imagem ?>" type="image/webp">
            <!-- PNG DESKTOP -->
            <source srcset="<?php echo image_compatibility($imagem, 'png'); ?>" type="image/png">
            <!-- DEFAULT -->
            <img class="lazy img-responsive img-produto" itemprop="image"
                src="<?php echo image_compatibility($imagem, 'png'); ?>" data-original="<?php echo $imagem ?>"
                title="<?php echo "Categoria " . $categoria ?>"
                alt="<?php echo "Imagem ilustrativa da categoria " . $categoria ?>" width="248" height="179"
                loading="lazy" />
        </picture>
    </a>
</div>