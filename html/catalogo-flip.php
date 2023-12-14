<?php require_once 'header_v2.php'; ?>
<?php $pasta = base_url('fastflip').'/'; ?>

	<!-- Flip novo simples -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fastflip/css/default.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fastflip/css/bookblock.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fastflip/css/demo4.css') ?>" />
	<script src="<?php echo base_url('fastflip/js/modernizr.custom.js') ?>"></script>
	<!-- -- -->
	<section style="display:table;width:100%;height:100%;padding-bottom:41px;">
	
		<article class="demo-4">	
			<div class="container">
				<div class="bb-custom-wrapper" id="bb-custom-wrapper">				
					<div id="bb-bookblock" class="bb-bookblock">					
										
						<div class="bb-item"><a><img src="<?php echo $pasta ?>img/CATALOGO_MONTECRISTO.webp" alt="image01" /></a></div>					
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO2.php'); ?></a>  </div>					
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO3.php'); ?></a> 	</div>	
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO4.php'); ?></a> 	</div>	
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO5.php'); ?></a> 	</div>	
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO6.php'); ?></a> 	</div>	
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO7.php'); ?></a> 	</div>	
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO8.php'); ?></a> 	</div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO9.php'); ?></a> 	</div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO10.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO11.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO12.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO13.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO14.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO15.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO16.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO17.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO18.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO19.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO20.php'); ?></a> </div>					
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO21.php'); ?></a> </div>
						
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO22.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO23.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO24.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO25.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO26.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO27.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO28.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO29.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO30.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO31.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO32.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO33.php'); ?></a> </div>
						<div class="bb-item"><a><?php $this->load->view('html_flip/CATALOGO_MONTECRISTO34.php'); ?></a> </div>
						
						<div class="bb-item"><a href="#" onclick="imprimirVoucher();" style="cursor:pointer !important;"><img src="<?php echo $pasta ?>img/CATALOGO_MONTECRISTO35.webp" alt="image02" /></a></div>
						
				
					</div>
					<nav class="nav-bookblock">
						<div>
							<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
							<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
							<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
							<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
						</div>
					</nav>
				</div>
			</div><!-- /container -->	
			
			<script>
				function imprimirVoucher(){
					window.open('?imprimirvoucher=1', 'pop_1', 'width=880,resizable=no,scrollbars=yes,status=no,titlebar=no,toolbar=no,height='+$(window).height());
					return false;
				}
				
				$(document).ready(function(){
					$(window).resize(function(){					
						$("#bb-custom-wrapper").css("height",$(".bb-item").height());					
					});
				});
			</script>
			
		</article>
	</section>
	<br clear="all" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo $pasta ?>js/jquerypp.custom.js"></script>
	<script src="<?php echo $pasta ?>js/jquery.bookblock.js"></script>
	<script>
		var Page = (function() {
			
			var config = {
					$bookBlock : $( '#bb-bookblock' ),
					$navNext : $( '#bb-nav-next' ),
					$navPrev : $( '#bb-nav-prev' ),
					$navFirst : $( '#bb-nav-first' ),
					$navLast : $( '#bb-nav-last' )
				},
				init = function() {
					config.$bookBlock.bookblock( {
						speed : 1000,
						shadowSides : 0.8,
						shadowFlip : 0.4
					} );
					initEvents();
				},
				initEvents = function() {
					
					var $slides = config.$bookBlock.children();

					// add navigation events
					config.$navNext.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'next' );
						return false;
					} );

					config.$navPrev.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'prev' );
						return false;
					} );

					config.$navFirst.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'first' );
						return false;
					} );

					config.$navLast.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'last' );
						return false;
					} );
					
					// add swipe events
					$slides.on( {
						'swipeleft' : function( event ) {
							config.$bookBlock.bookblock( 'next' );
							return false;
						},
						'swiperight' : function( event ) {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						}
					} );

					// add keyboard events
					$( document ).keydown( function(e) {
						var keyCode = e.keyCode || e.which,
							arrow = {
								left : 37,
								up : 38,
								right : 39,
								down : 40
							};

						switch (keyCode) {
							case arrow.left:
								config.$bookBlock.bookblock( 'prev' );
								break;
							case arrow.right:
								config.$bookBlock.bookblock( 'next' );
								break;
						}
					} );
				};

				return { init : init };

		})();
	</script>
	<script>		
		setTimeout(Page.init(), 700);
	</script>
	
<?php require_once 'footer.php'; ?>