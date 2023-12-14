<script src="http://localhost:8082/montecristo/js/jquery.js"></script>

<?php if (isset($caracteristicas) && sizeof($caracteristicas) > 0) : ?>
    <a href="#" title="Filtrar Por:" class="filter-link">Filtrar por:</a>
    <div class="filter-block-2">
        <div class="filter-block-aguarde" style="display: none;">Por favor aguarde</div>
        <input type="hidden" name="categoria_id" value="<?php echo @$categoria->id ?>" />
        <input type="hidden" name="online" value="<?php echo @$online ?>" />
        <input type="hidden" name="colecao" value="<?php echo @$colecao ?>" />
        <?php
        $i = 0;
        // print_r($caracteristicas);
        foreach ($caracteristicas as $nome => $valores) :
            // print_r((isset($valores['selecionados'])));
        ?>
            <div class="filter-block-carac">
                <h5 class="js-carac-nome"><?php echo $nome ?> <span class="icone"></span></h5>
                <?php
                if (isset($valores['selecionados'])) :
                    echo '<div class="filtro-opcoes-selecionadas">';
                    foreach (@$valores['selecionados'] as $id => $row) :
                        $url = site_url(array(str_replace("/{$row->carac_slug}/{$row->caracvalor_slug}", '', uri_string())));
                        echo anchor($url, "{$row->caracvalor_nome} ({$row->count_item_id})", 'class="js-filtro-opcao js-filtro-opcao-selecionada"');
                    // echo anchor(site_url(array(str_replace("{$row->carac_slug}/{$row->caracvalor_slug}",'',uri_string()))),$row->caracvalor_nome,'class="js-filtro-opcao js-filtro-opcao-selecionada"');
                    endforeach;
                    echo '<br clear="all"></div>';
                endif;

                echo '<div class="js-filtro-opcoes" style="display:none">';
                foreach (@$valores['opcoes'] as $id => $row) :
                    echo anchor(site_url(array(uri_string(), $row->carac_slug, $row->caracvalor_slug)), $row->caracvalor_nome, 'class="js-filtro-opcao"');
                endforeach;
                echo '</div>';

                ?>
            </div>
            <br clear="all" />
        <?php endforeach; ?>
        <br clear="all" />

        <a href="#" />Limpar filtros</a>
        <a href="#" />Aplicar filtros</a>

    </div>
<?php endif; ?>

<div class="products-load products-list">
    <ul class="products cf">
    </ul>
</div>

<style>
    .filter-block-2 {
        max-width: 400px;
        margin: auto;
    }

    .filter-block-carac a {
        display: block;
        float: left;
        width: 50%;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .filter-block-carac a {
        display: block;
        float: left;
        width: 50%;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .filter-block-carac a.js-filtro-opcao-selecionada {
        font-weight: bold;
    }

    .filtro-opcoes-selecionadas {
        border-bottom: 1px solid #eee;
    }

    .filtro-opcao-selecionada {
        font-weight: bold;
        ;
    }
</style>
<script>
    $('.js-carac-nome').bind('click', function() {
        var obj = $(this);
        obj.next('.js-filtro-opcoes').slideToggle();
    });

    // $('.js-reset').bind('click')
    $('.js-filtro-opcao').bind('click', function() {
        var obj = $(this);

        currentPage = 0;

        $('.products-load').unbind('.jscroll')
            .removeData('jscroll')
            .find('.jscroll-inner').children().unwrap()
            .filter('.jscroll-added').children().unwrap();

        var urlPath = obj.attr('href');

        $.ajax({
            url: urlPath,
            success: function(out) {
                $('.filter-block').hide();
                $('.products-load').html(out);
                $('.products-load .next-page').hide();

                // lazyBool = false;
                // nestedExec(true);

                currentPage = 1;
                // set_jscroll();
                // window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
                window.history.pushState({
                    "html": out,
                    "pageTitle": 'Teste'
                }, "", urlPath);
            }
        });

        // window.location = obj.data('href');
        return false;
    });
</script>