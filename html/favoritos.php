<?php require_once 'header.php' ?>
<style>
    .jscroll-added {
        margin-top: 20px
    }

    a.next-page {
        display: inline-block;
        text-align: center;
        padding: 20px
    }
</style>
<script>
    function nestedExec2(seletor) {
        if ($(window).width() >= 768) {
            $(seletor).nested({
                minWidth: ($(".wrapper").width() / 16) - 19,
                gutter: 20,
                animationOptions: {
                    complete: function() {
                        $(seletor + ' img.lazy').lazyload({
                            effect: "fadeIn",
                            threshold: 20
                        });
                        set_evento_produto();
                    }
                }
            });
        } else {
            $(seletor).nested({
                minWidth: ($(".wrapper").width() / 8) - 7,
                gutter: 10,
                animationOptions: {
                    complete: function() {
                        $(seletor + ' img.lazy').lazyload({
                            effect: "fadeIn",
                            threshold: 20
                        });
                        set_evento_produto();
                    }
                }
            });
        }
    }

    // $(function() {
    // 	if($(window).width()>=768){
    // 		$('.products').nested({
    // 			minWidth: ($(".wrapper").width()/16)-19
    // 			,gutter: 20
    // 			,animationOptions: {
    // 				complete: lazyExec
    // 			}
    // 		});
    // 	}
    // 	else {
    // 		$('.products').nested({
    // 			minWidth: ($(".wrapper").width()/8)-7
    // 			,gutter: 10
    // 			,animationOptions: {
    // 				complete: lazyExec
    // 			}
    // 		});
    // 	}
    // });

    $(document).ready(function() {

        var currentPage = 1;

        function set_jscroll() {

            $('.products-load').jscroll({
                loadingHtml: '<center><span style="color:#999">Carregando</span></center>',
                padding: 20,
                nextSelector: 'a.next-page',
                callback: function() {
                    // alert(currentPage);
                    nestedExec2('.products-' + (currentPage++));
                }
            });
        }

        set_jscroll();

    });
</script>

<!-- container start here -->
<section class="container favoritos-page">

    <?php if (sizeof($produtos) > 0) : ?>

        <h4 style="text-align:center;margin-bottom:20px;">
            <img class="lazy" data-original="<?php echo site_url('img/dimond-icon.png') ?>" alt=""><br>Meus Favoritos
        </h4>

        <div class="products-load products-list">

            <ul class="products cf">
                <?php $i = 0; ?>
                <?php foreach ($produtos as $row) : ?>
                    <?php $class = ($i == 0 || $i == 6 || $i == 12 ? 'size86' : 'size43'); ?>
                    <?php $this->load->view('html/includes/produto.php', array('class' => $class, 'row' => $row)); ?>
                    <!--li class="<?php echo $class ?> box">
			<a href="<?php echo site_url('produto/' . $row->slug) ?>" title="<?php echo $row->nome ?>"><img class="lazy" data-original="<?php echo base_url('admin/upload/item/' . $row->imagem_d1) ?>" alt="<?php echo $row->nome ?>" ></a></li-->
                    <?php $i = ($i == 9 ? 0 : $i + 1); ?>
                <?php endforeach; ?>

            </ul>

            <a href="<?php echo site_url('favoritos/scroll/1/?') ?>" class="next-page" style="display:none">Mais</a>

        </div>

    <?php else : ?>
        <h4 class="result-not-found">Voc&ecirc; n&atilde;o possui itens em sua lista de favoritos</h4>
        <h5>Como adicionar um item &agrave; minha lista de favoritos?</h5>
        <p>Quando voc&ecirc; visualizar o &iacute;cone (<i class="fa fa-heart-o"></i>) nos detalhes do produto, clique e ele
            ser&aacute; enviado automaticamente &agrave; lista de favoritos.</p>
        <p>N&atilde;o &eacute; necess&aacute;rio fazer nenhum tipo de cadastro, os produtos ficam salvos nos Cookies do seu
            navegador.</p>
    <?php endif; ?>

    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>

</section>
<!-- cContainer end here -->
<?php require_once 'footer.php' ?>