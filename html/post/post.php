<?php require_once APPPATH.'views/html/header.php' ?>

<!-- container start here -->
<section class="container blog category">

	<?php $this->load->view('html/blog/header.php') ?>

	<div class="col-1">
		<?php $this->load->view('html/blog/posts.php') ?>
		<?php echo @$paginacao ;?>
	</div>
	<div class="col-2">
		<?php $this->load->view('html/blog/lateral.php') ?>
	</div>

	<br clear="all" />
	<div class="bktop">
		<a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
	</div>

</section>
<!-- cContainer end here -->

<?php require_once APPPATH.'views/html/footer.php' ?>

<!-- <script>


	$(document).ready(function(){
		
		$('.js-post-det').bind('click', function(){

			var elem = $(this);

			if(!elem.data('open')){

				elem.data('open', true);
				if(!elem.data('olddata')){
					elem.data('olddata', $('.js-post-container-'+elem.data('id')).html());
				}

				elem.html('Por favor aguarde ...')

				$('.js-post-container-'+elem.data('id')).css('opacity',.5);

				$.ajax({
					url: '<?php echo site_url('blog/post_ajax') ?>/'+elem.data('id')
					,success: function(out){
						$('.js-post-container-'+elem.data('id')).hide();
						$('.js-post-container-'+elem.data('id')).html(out);
						// $('.js-post-container-'+elem.data('id')).fadeIn().delay(3000).css('opacity',1);;
						$('.js-post-container-'+elem.data('id')).fadeIn(400, function(){
							$('.js-post-container-'+elem.data('id')).css('opacity',1);
						});
						elem.html('Menos')
					}
				});

			}
			else {

				elem.data('open', false);
				elem.html('Por favor aguarde ...')

				$('.js-post-container-'+elem.data('id')).css('opacity',.5);

				$('.js-post-container-'+elem.data('id')).hide();
				$('.js-post-container-'+elem.data('id')).html(elem.data('olddata'));
				$('.js-post-container-'+elem.data('id')).fadeIn(400, function(){
					$('.js-post-container-'+elem.data('id')).css('opacity',1);
				});

				elem.html('Ver mais')

			}

			return false;

		});
		
	});


</script> -->