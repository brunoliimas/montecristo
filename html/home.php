<?php
require_once 'header.php';
$this->load->view('html/includes/home/banner-topo-home.php');
$this->load->view('html/includes/home/carrossel-produtos-home.php');
$this->load->view('html/includes/home/itens-destaque-home.php');

/**
 * Banner Promocional
 */
if (!empty($bannerhomepromocional)) :
	echo '<div class="hidden-xs hidden-sm" style="margin-top:100px;position:relative;">';

	echo '<picture>';

	echo '<source srcset="' . base_url('admin/upload/homeitem/' . $bannerhomepromocional->img1) . '" type="image/jpg">';

	echo '<img src="' . image_compatibility(base_url('admin/upload/homeitem/' . $bannerhomepromocional->img1), 'jpg') . '" id="cta-banner-home" "style="width:100%; height: 100%;" title="Descubra mais" alt="' . ucfirst(strtolower($bannerhomepromocional->conteudo)) . '" width="1920" height="600" loading="lazy" />';

	echo '</picture>';

	echo '<div id="bannerhome">';

	echo '<span style="position:absolute;left:22%;top:16%;width:33%;font-size:70px;color:' . ($bannerhomepromocional->custom1 ? $bannerhomepromocional->custom1 : '#444') . ';font-weight:bold;">' . $bannerhomepromocional->titulo . '</span>';

	echo '<span class="hidden-sm hidden-xs" style="font-size: 14px;' . ($bannerhomepromocional->custom1 ? 'color:' . $bannerhomepromocional->custom1 . ';' : '') . '">' . $bannerhomepromocional->conteudo . '</span>';

	echo '<a style="width: fit-content; background-color: transparent;" class="btn btn-default" ' . ($bannerhomepromocional->custom1 ? $bannerhomepromocional->custom1 : '#999') . ';font-size:14px;' . ($bannerhomepromocional->custom1 ? 'color:' . $bannerhomepromocional->custom1 . ';' : '') . '" href="' . $bannerhomepromocional->link . '">DESCUBRA MAIS</a>';
	echo '</div>';
	echo '</div>';
endif;
/** */

/**
 * Posts do Instagram
 */
if (!empty($instagramhome)) :

	echo '<div class="instagram-home">';
	echo '<h2>Instagram</h2>';

	echo '<div class="hidden-xs hidden-sm row">';
	foreach ($instagramhome as $post) :
		echo '<div class="col-md-3 col-sm-6 instagram-thumb">';
		echo '
				<a href="' . $post->link . '" target="_blank">
					<picture>
						<source srcset="' . base_url('admin/upload/homeitem/' . $post->img1) . '" type="image/jpg">
						<img src="' . base_url('admin/upload/homeitem/' . $post->img1) . '" title="Conheça nosso Instagram" alt="Joalheria Montecristo no Instagram" width="402" height="402" loading="lazy">
					</picture>
				</a>';

		echo '</div>';
	endforeach;
	echo '</div>';
	echo '</div>';

	echo '<div class="swiper-home">';
	echo '<div class="swiper-container hidden-md hidden-lg" id="swiper-instagram">';
	echo '<div class="swiper-wrapper">';
	foreach ($instagramhome as $post) :
		echo '<div class="swiper-slide">';
		echo '<a href="' . $post->link . '" target="_blank"><img style="width: 100%; height: 100%; max-width:991px;" src="' . base_url('admin/upload/homeitem/' . $post->img1) . '" title="Conheça nosso Instagram" alt="Joalheria Montecristo no Instagram" width="402" height="402" loading="lazy"></a>';
		echo '</div>';
	endforeach;
	echo '</div>';
	echo '<div class="swiper-button-prev swiper-navigation-style">';
	echo '<i class="fa fa-chevron-left navigation-style" aria-hidden="true"></i>';
	echo '</div>';
	echo '<div class="swiper-button-next swiper-navigation-style">';
	echo '<i class="fa fa-chevron-right navigation-style" aria-hidden="true"></i>';
	echo '</div>';

	echo '</div>';
	echo '</div>';

endif;

/** */
?>

<?php if ($this->config->item('popup_home')) : ?>
	<?php if (!$this->input->cookie($this->config->item('popup_cookie')) && !$this->session->userdata('logged')) : ?>
		<a class="fancybox-news fancybox.iframe" href="<?php echo site_url('news/pop/' . $this->config->item('popup_cookie')) ?>" style="display:none">Pop</a>
	<?php endif; ?>
<?php endif; ?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org/",
		"@type": "BreadcrumbList",
		"itemListElement": [{
			"@type": "ListItem",
			"position": 1,
			"name": "Homepage",
			"item": "https://montecristo.com.br/"
		}, {
			"@type": "ListItem",
			"position": 2,
			"name": "Rolex",
			"item": "https://montecristo.com.br/rolex"
		}]
	}
</script>

<?php require_once 'footer.php' ?>