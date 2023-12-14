<?php
$matriz = array();
foreach ($banners_timelinecolecao as $row) :
    $matriz[] = array(
        $row->titulo,
        $row->conteudo,
        strtolower($row->custom1),
        $row->link,
        $row->img2,
    );
endforeach;
require_once 'header.php';
?>
<section class="container">
    <div class="itens-parimpar">
        <?php
        $i = 0;
        foreach ($matriz as $destaquehome) {

            $titulo = $destaquehome[0];
            $conteudo = $destaquehome[1];
            $texto_link = $destaquehome[2];
            $link = $destaquehome[3];
            $imagem = $destaquehome[4];

            $par = ($i % 2) == 0;

            $slug = '';

            if (sizeof(explode('/colecao/', $link)) >= 2) {
                list($tmp, $slug) = explode('/colecao/', $link);
            }


            // print $link;
            // die();

            if ($par) {
        ?>
        <div class="row sequencia1">
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php echo base_url("admin/{$imagem}") ?>" type="image/jpg">
                    <img src="<?php echo image_compatibility(base_url("admin/{$imagem}"), 'jpg') ?>"
                        class="img-responsive" />
                </picture>
            </div>
            <div class="col-md-6">
                <div class="texto-destaque-conteudo">
                    <h4><?php echo $titulo; ?></h4>
                    <hr>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?= $link ?>" class="btn btn-default"><?php echo $texto_link ?></a>
                </div>
            </div>
        </div>
        <?php
            } else {
            ?>
        <div class="row sequencia2">
            <div class="col-md-6">
                <div class="texto-destaque-conteudo">
                    <h4><?php echo $titulo; ?></h4>
                    <hr>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?php echo site_url("colecao/{$slug}") ?>"
                        class="btn btn-default"><?php echo $texto_link ?></a>
                </div>
            </div>
            <div class="col-md-6">
                <picture>
                    <source srcset="<?php echo base_url("admin/{$imagem}") ?>" type="image/jpg">
                    <img src="<?php echo image_compatibility(base_url("admin/{$imagem}"), 'jpg') ?>"
                        class="img-responsive" />
                </picture>
            </div>
        </div>
        <?php
            }
            $i++;
        }
        ?>
    </div>
</section>
<?php require_once 'footer.php' ?>