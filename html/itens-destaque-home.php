<?php

$this->db->distinct()->select("
    blogpost.id,
    blogpost.titulo,
    blogpost.conteudo,
    blogpost.link,
    blogpost.custom1,
    blogpost.img1,
    blogpost.img2
    ", FALSE);
$this->db->from('blogpost');
$this->db->where_in('blogpost.tipo', array('homeitem2'));
$this->db->where('blogpost.colecao_id IS NULL');
$this->db->where('blogpost.categoria_id IS NULL');
$this->db->where("blogpost.img1 <> ''");
$this->db->where("blogpost.st_ativo", "S");
$this->db->order_by("blogpost.data_cadastro DESC");

$matriz = array();

foreach ($this->db->get()->result() as $row) {
    $matriz[] = array(
        $row->titulo,
        $row->conteudo,
        'Descubra mais',
        strtolower($row->custom1),
        'admin/' . $row->img1,
    );
}

?>

<div class="itens-destaque-home">
    <div class="container">
        <?php
        $i = 0;
        foreach ($matriz as $destaquehome) {
            $titulo = $destaquehome[0];
            $conteudo = $destaquehome[1];
            $texto_link = $destaquehome[2];
            $link = $destaquehome[3];
            $imagem = $destaquehome[4];

            $par = ($i % 2) == 0;

            if ($par) {
        ?>
        <div class="row sequencia1">
            <div class="col-md-6">
                <picture>
                    <!-- WEBP DESKTOP -->
                    <source srcset="<?php echo base_url($imagem); ?>" type="image/webp">
                    <!-- DEFAULT -->
                    <img src="<?php echo base_url(image_compatibility($imagem, 'jpg')); ?>" class="img-responsive"
                        title="<?php echo "Imagem ilustrativa da categoria $titulo" ?>" alt="<?php echo $conteudo ?>"
                        width="555" height="381" loading="lazy" />
                </picture>
            </div>
            <div class="col-md-6">
                <div class="texto-destaque-home-conteudo">
                    <h2><?php echo $titulo; ?></h2>
                    <hr>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?php echo $link ?>" class="btn btn-default"><?php echo $texto_link ?></a>
                </div>
            </div>
        </div>
        <?php
            } else {
            ?>
        <div class="row sequencia2">
            <div class="col-md-6 hidden-xs">
                <div class="texto-destaque-home-conteudo">
                    <h2><?php echo $titulo; ?></h2>
                    <hr>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?php echo $link ?>" class="btn btn-default"><?php echo $texto_link ?></a>
                </div>
            </div>
            <div class="col-md-6">
                <picture>
                    <!-- WEBP DESKTOP -->
                    <source srcset="<?php echo base_url(image_compatibility($imagem, 'webp')); ?>" type="image/webp">
                    <!-- DEFAULT -->
                    <img src="<?php echo base_url(image_compatibility($imagem, 'jpg')); ?>" class="img-responsive"
                        title="<?php echo "Imagem ilustrativa da categoria $titulo" ?>" alt="<?php echo $conteudo ?>"
                        width="555" height="381" loading="lazy" />
                </picture>
            </div>
            <div class="col-md-6 hidden-lg hidden-md">
                <div class="texto-destaque-home-conteudo">
                    <h2><?php echo $titulo; ?></h2>
                    <hr>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?php echo $link ?>" class="btn btn-default"><?php echo $texto_link ?></a>
                </div>
            </div>
        </div>
        <?php
            }
            $i++;
        }
        ?>
    </div>
</div>