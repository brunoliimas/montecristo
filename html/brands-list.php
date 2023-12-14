<?php
require_once 'header.php';
// require_once 'banners.php';
$this->load->view('html/includes/listagem/banner-categoria.php');
?>

<section class="container">

    <?php foreach ($categorias as $categoria) : ?>
    <?php if (sizeof($produtos_categoria[$categoria->id]) > 0) : ?>
    <?php if ($categoria->imagem_icone != '') : ?>
    <!--h4><?php echo anchor('relogios/' . $categoria->slug, img(base_url('admin/upload/categoria/' . $categoria->imagem_icone))); ?></h4-->
    <h4><?php echo anchor('relogios/' . $categoria->slug, $categoria->nome); ?></h4>
    <?php else : ?>
    <h4><?php echo anchor('relogios/' . $categoria->slug, $categoria->nome); ?></h4>
    <?php endif; ?>

    <div class="row models-<?php echo $categoria->id ?>">
        <?php
				foreach (is_array($produtos_categoria[$categoria->id]) ? array_slice($produtos_categoria[$categoria->id], 0, 4) : array() as $produto) :

					$class = '';
					$this->load->view('html/includes/produto-relogio.php', array('class' => $class, 'row' => $produto));
				endforeach;
				?>
    </div>
    <a href="<?php echo site_url('relogios/' . $categoria->slug) ?>" title="Ver mais <?php echo $categoria->nome ?>"
        title="+ ver mais">+ ver mais</a>
    <hr>
    <?php endif; ?>
    <?php endforeach; ?>

</section>

<?php require_once 'footer.php' ?>