<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
require __DIR__ . "/novosmodelos_data.php";
?>

<script>
    var digitalDataLayer = {
        page: {
            pageType: "new watches page"
        }
    }
</script>


<div id="rlx-wrapper" class="rlx-wrapper">
    <section class="rlx-intro">
        <div class="breadcrumbcontent">
            <div class="breadcrumb">
                <a href="/rolex">Rolex</a>
                <span> &gt; </span>
                <a href="/rolex/novosmodelos">Novos Modelos Rolex</a>
            </div>
        </div>
        <picture>
            <source srcset="<?php echo site_url('img/modelos/lg/cover.jpg') ?>" media="(min-width:1069px)">
            <img src="<?php echo site_url('img/modelos/md/cover.jpg') ?>" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy" class="rlx-banner">
        </picture>

        <span>Relógios Rolex</span>
        <div class="rlx-text text-center">
            <h1 class="rlx-titulo">
                NOVOS MODELOS ROLEX <br>
                2023 - <?php echo $empresa_name ?>
            </h1>
            <p>
                Com suas mais recentes criações, a Rolex reitera sua perpétua busca pela excelência.
                É um desafio permanente, que se exprime por meio do aperfeiçoamento de cada elemento,
                do questionamento de cada conquista e do domínio do know-how.
                Os modelos apresentados demonstram a vontade de se reinventar dentro da continuidade,
                de inovar dentro do espírito da tradição e de colocar a técnica a serviço da ousadia
                criativa. É através desses esforços — reforçados pela visão “superlativa” que permeia
                todo o processo de criação até o mínimo detalhe — que relógios exemplares são formados
                e se perpetuam. Relógios que, com o tempo, se tornam ícones.
            </p>
        </div>
    </section>
    <style>
        .item picture {
            display: block;
            overflow: hidden;
        }

        .on_hover:hover {
            object-fit: cover;
            transform: scale(1.1);
            overflow: hidden;
            transition: all .3s ease-in-out;
        }
    </style>
    <section class="rlx-body">
        <div class="row rlx-lista">
            <section class="rlx-body">
                <div class="row rlx-lista">
                    <?php

                    echo render_tpl_new_model(
                        $loop_new_models,
                        function ($p) {
                            $title = $p['title'];
                            $slug = $p['slug'];
                            $id = $p['id'];
                            $base = site_url('img/');
                            return "
                            <div class=\"col-xs-6 item\">
                                <a href=\"{$slug}\" title=\"{$title}\" draggable=\"false\">
                                    <figure role=\"img\" draggable=\"false\">
                                        <picture>
                                            <source srcset=\"{$base}/modelos/lg/{$id}.jpg\" media=\"(min-width:1069px)\">
                                            <img class=\"on_hover\" src=\"{$base}/modelos/md/{$id}.jpg\" width=\"100%\" alt=\"{$title}\" loading=\"lazy\">
                                        </picture>
                                        <figcaption>
                                            <span>
                                                <strong>{$title}</strong> 
                                            </span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            ";
                        }
                    )
                    ?>
                </div>
            </section>
        </div>
    </section>
    <section class="rlx-outro">
        <picture>
            <source srcset="<?php echo site_url('img/modelos/lg/banner.jpg') ?>" media="(min-width:1069px)">
            <img src="<?php echo site_url('img/modelos/md/banner.jpg') ?>" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy">
        </picture>
    </section>
</div>

<?php require_once APPPATH . 'views/html/rolex/footer.php' ?>
<?php require_once APPPATH . 'views/html/footer.php' ?>