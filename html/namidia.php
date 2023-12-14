<?php require_once 'header.php' ?>
<script>
$(document).ready(function() {
    // sliderExec(true, 'last');

    $(".fancybox").fancybox();

    $('.submit-btn').bind('click', function() {

        $('.submit-btn').val('Aguarde ...');

        $.ajax({
            url: '<?php echo site_url('na-midia/filtrar') ?>',
            data: $('.filter-block *').serialize(),
            success: function(out) {
                $('.filter-block').hide();
                $('.submit-btn').val('Ok');

                $('.products').html(out);
                // console.log(out);
                lazyBool = false;
                // nestedExec(true);

            }
        });
    });
});
</script>

<!-- container start here -->
<section class="container namidia-container">

    <img src="<?php echo base_url('img/NA_MIDIA.webp') ?>" alt="" class="fullWidth">

    <div class="namidia-filter" style="padding-top:20px">
        <div class="namidia">
            <a href="#" title="Filtrar por:" class="filter-link">Filtrar por:</a>
            <div class="filter-block">
                <form action="">
                    <fieldset>
                        <div class="field-option">
                            <?php if (@$categorias) : ?>
                            <?php foreach ($categorias as $categoria) : ?>
                            <label><input type="checkbox" name="categoria_id[]" value="<?php echo $categoria->id ?>"
                                    <?php ($categoria->id == @$midiacategoria->id ? print 'checked' : '') ?>><?php echo $categoria->nome ?></label>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </fieldset>
                    <input type="button" value="Ok" class="submit-btn">
                </form>
            </div>
        </div>
    </div>

    <ul class="products cf">

        <?php if (@$itens) : ?>
        <?php foreach (@$itens as $row) : ?>

        <?php if (@$row->tipo_exibicao == 1) : ?>
        <li class="box size23">
            <?php if ($row->youtube_id != '') : ?>
            <a class="fancybox fancybox.iframe" rel="group"
                href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
                <?php else : ?>
                <a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/' . $row->imagem) ?>">
                    <?php endif; ?>
                    <?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '152', '238') 
                                ?>
                    <img class="lazy"
                        data-original="<?php echo timthumb_url('admin/upload/midiaitem/' . $row->imagem, '152', '238') ?>" />

                    <?php elseif (@$row->tipo_exibicao == 2) : ?>
        <li class="box size43">
            <?php if ($row->youtube_id != '') : ?>
            <a class="fancybox fancybox.iframe" rel="group"
                href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
                <?php else : ?>
                <a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/' . $row->imagem) ?>">
                    <?php endif; ?>
                    <?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '324', '238') 
                                ?>
                    <img class="lazy"
                        data-original="<?php echo timthumb_url('admin/upload/midiaitem/' . $row->imagem, '324', '238') ?>" />

                    <?php elseif (@$row->tipo_exibicao == 3) : ?>
        <li class="box size86">
            <?php if ($row->youtube_id != '') : ?>
            <a class="fancybox fancybox.iframe" rel="group"
                href="http://www.youtube.com/embed/<?php echo $row->youtube_id ?>?autoplay=1&rel=0">
                <?php else : ?>
                <a class="fancybox" rel="group" href="<?php echo base_url('admin/upload/midiaitem/' . $row->imagem) ?>">
                    <?php endif; ?>
                    <?php // echo timthumb('admin/upload/midiaitem/'.$row->imagem, '668', '496') 
                                ?>
                    <img class="lazy"
                        data-original="<?php echo timthumb_url('admin/upload/midiaitem/' . $row->imagem, '668', '496') ?>" />

                    <?php endif; ?>
                </a>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>

    </ul>

    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>
</section>
<!-- cContainer end here -->
<?php require_once 'footer.php' ?>