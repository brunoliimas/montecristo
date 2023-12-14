<?php require_once 'header.php' ?>
<?php $pasta = base_url('catalogo') . '/'; ?>

<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip.css">
<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip-custom.css">
<script src="<?php echo $pasta ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $pasta ?>js/pageflip5-min.js"></script>

<style>
	#controls {
		padding-top: 35px
	}
</style>

<section class="container">
	<!-- start embed pageflip -->
	<div id="pageflip">
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page0.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page0_th.jpg?d=15082022' data-page-label='t0'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page1.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page1_th.jpg?d=15082022' data-page-label='t1'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page2.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page2_th.jpg?d=15082022' data-page-label='t2'>
			<div class='pf-hotspot' style='top:1848px;left:599px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/AN5406-Anel-Vehemence")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page3.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page3_th.jpg?d=15082022' data-page-label='t3'>
			<div class='pf-hotspot' style='top:1848px;left:238px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-01-Colar-Riviera-Rodolitas")'></div>
			<div class='pf-hotspot' style='top:1848px;left:479px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/joalheria/colares")'></div>
			<div class='pf-hotspot' style='top:1848px;left:719px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-05-Colar-Riviera-Negra")'></div>
			<div class='pf-hotspot' style='top:1848px;left:960px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-02-Colar-Riviera-Longa")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page4.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page4_th.jpg?d=15082022' data-page-label='t4'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page5.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page5_th.jpg?d=15082022' data-page-label='t5'>
			<div class='pf-hotspot' style='top:1313px;left:599px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/AN5998-Anel-Turmalina-Rosa")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page6.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page6_th.jpg?d=15082022' data-page-label='t6'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page7.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page7_th.jpg?d=15082022' data-page-label='t7'>
			<div class='pf-hotspot' style='top:1854px;left:238px;width:251px;height:106px;' onclick='u("https://montecristo.com.br/produto/PU29845-Pulseira-Corrente")'></div>
			<div class='pf-hotspot' style='top:1854px;left:479px;width:251px;height:106px;' onclick='u("https://montecristo.com.br/produto/AN-17-IGRE-Anel-Stingray-Rodio-Negro-Preto")'></div>
			<div class='pf-hotspot' style='top:1848px;left:719px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:1848px;left:960px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/PU30478-Bracelete-Aco")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page8.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page8_th.jpg?d=15082022' data-page-label='t8'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page9.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page9_th.jpg?d=15082022' data-page-label='t9'>
			<div class='pf-hotspot' style='top:1854px;left:232px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN29155-Alianca-Sequel")'></div>
			<div class='pf-hotspot' style='top:1854px;left:473px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/BEN-AL-01-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:1849px;left:713px;width:251px;height:144px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:1849px;left:966px;width:251px;height:144px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page10.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page10_th.jpg?d=15082022' data-page-label='t10'>
			<div class='pf-hotspot' style='top:1848px;left:599px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/BR30604-Brincos-Escamas")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page11.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page11_th.jpg?d=15082022' data-page-label='t11'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page12.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page12_th.jpg?d=15082022' data-page-label='t12'>
			<div class='pf-hotspot' style='top:1854px;left:238px;width:251px;height:133px;' onclick='u("https://montecristo.com.br/produto/AN1332-Meia-Alianca-de-Safiras")'></div>
			<div class='pf-hotspot' style='top:1848px;left:479px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/relogios/Cartier#/cartier/products/40725/rel%C3%B3gios/rel%C3%B3gios-masculinos/ballon-bleu-de-cartier")'></div>
			<div class='pf-hotspot' style='top:1854px;left:719px;width:251px;height:133px;' onclick='u("https://montecristo.com.br/produto/PU5849-Pulseira-Escrava-Safira")'></div>
			<div class='pf-hotspot' style='top:1848px;left:960px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page13.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page13_th.jpg?d=15082022' data-page-label='t13'>
			<div class='pf-hotspot' style='top:1857px;left:71px;width:210px;height:112px;' onclick='u("https://montecristo.com.br/relogios/tag-heuer/Aquaracer/WAY201TBA0927-Tag-Heuer-Aquaracer")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page14.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page14_th.jpg?d=15082022' data-page-label='t14'>
			<div class='pf-hotspot' style='top:1694px;left:599px;width:251px;height:86px;' onclick='u("https://montecristo.com.br/produto/BR30602-Brinco-Diamonds")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page15.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page15_th.jpg?d=15082022' data-page-label='t15'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page16.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page16_th.jpg?d=15082022' data-page-label='t16'>
			<div class='pf-hotspot' style='top:1844px;left:239px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/REN-PI-12-Colar-Oval-Turmalina-Paraiba")'></div>
			<div class='pf-hotspot' style='top:1844px;left:479px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/REN-PI-05-Colar-Gota-Turmalina-Paraiba")'></div>
			<div class='pf-hotspot' style='top:1844px;left:720px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/REN-AN-29-Anel-Glamour")'></div>
			<div class='pf-hotspot' style='top:1844px;left:959px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/REN-AN-25-Anel-Gota-Turmalina-Paraiba")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page17.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page17_th.jpg?d=15082022' data-page-label='t17'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page18.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page18_th.jpg?d=15082022' data-page-label='t18'>
			<div class='pf-hotspot' style='top:1848px;left:359px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/PU29845-Pulseira-Corrente")'></div>
			<div class='pf-hotspot' style='top:1848px;left:599px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN30859-Anel-Masculino-Stripes")'></div>
			<div class='pf-hotspot' style='top:1848px;left:840px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/relogios/Cartier#/cartier/product/WSTA0053/watches/men%27s-watches/rel%C3%B3gio-tank-must-CRWSTA0052")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page19.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page19_th.jpg?d=15082022' data-page-label='t19'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page20.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page20_th.jpg?d=15082022' data-page-label='t20'>
			<div class='pf-hotspot' style='top:626px;left:599px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/MC07-Pulseira-Elos-Groumet")'></div>
			<div class='pf-hotspot' style='top:488px;left:599px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN29187-Anel-Ilusion")'></div>
			<div class='pf-hotspot' style='top:352px;left:585px;width:278px;height:106px;' onclick='u("https://montecristo.com.br/relogios/tag-heuer/Formula-1/WAZ1010BA0842-Tag-Heuer-FORMULA-1")'></div>
			<div class='pf-hotspot' style='top:214px;left:585px;width:278px;height:106px;' onclick='u("https://montecristo.com.br/produto/ALFCS3BVN-Alianca-Infinity-Love-Triple")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page21.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page21_th.jpg?d=15082022' data-page-label='t21'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page22.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page22_th.jpg?d=15082022' data-page-label='t22'>
			<div class='pf-hotspot' style='top:1614px;left:479px;width:251px;height:173px;' onclick='u("https://montecristo.com.br/produto/ALMS2BN-Alianca-Infinity-Love-Double")'></div>
			<div class='pf-hotspot' style='top:1614px;left:719px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/relogios/tag-heuer/Formula-1/CAZ1010BA0842-TAG-Heuer-Formula-1")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page23.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page23_th.jpg?d=15082022' data-page-label='t23'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page24.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page24_th.jpg?d=15082022' data-page-label='t24'>
			<div class='pf-hotspot' style='top:245px;left:599px;width:251px;height:127px;' onclick='u("https://montecristo.com.br/produto/AB0134101C1A1-CHRONOMAT-B01-42")'></div>
			<div class='pf-hotspot' style='top:394px;left:599px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/CO22740-Corrente-Elos-Gutti")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page25.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page25_th.jpg?d=15082022' data-page-label='t25'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page26.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page26_th.jpg?d=15082022' data-page-label='t26'>
			<div class='pf-hotspot' style='top:1268px;left:945px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/AN2137F-Anel-Le-Moderne")'></div>
			<div class='pf-hotspot' style='top:1424px;left:945px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/AL28195-Alianca-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1614px;left:945px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN2499-Anel-Power")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page27.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page27_th.jpg?d=15082022' data-page-label='t27'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page28.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page28_th.jpg?d=15082022' data-page-label='t28'>
			<div class='pf-hotspot' style='top:1209px;left:1075px;width:251px;height:106px;' onclick='u("https://montecristo.com.br/produto/MA25072-Anel-Solitario-Eternity")'></div>
			<div class='pf-hotspot' style='top:1367px;left:1075px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/SPU117-Pulseira-Riviera")'></div>
			<div class='pf-hotspot' style='top:1529px;left:1075px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:1719px;left:1075px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page29.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page29_th.jpg?d=15082022' data-page-label='t29'>
			<div class='pf-hotspot' style='top:1853px;left:599px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/relogios/Cartier#/cartier/product/WSSA0048/watches/men%27s-watches/rel%C3%B3gio-santos-de-cartier-CRWSSA0048")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page30.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page30_th.jpg?d=15082022' data-page-label='t30'>
			<div class='pf-hotspot' style='top:1853px;left:960px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/CL-AN-31-Anel-Esmerald")'></div>
			<div class='pf-hotspot' style='top:1853px;left:719px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN25259-Anel-Esmeralda-Triangular")'></div>
			<div class='pf-hotspot' style='top:1853px;left:479px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/CL-AN-30-Anel-Esmerald")'></div>
			<div class='pf-hotspot' style='top:1853px;left:238px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN6196-Anel-Illumination")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page31.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page31_th.jpg?d=15082022' data-page-label='t31'>
			<div class='pf-hotspot' style='top:1679px;left:579px;width:290px;height:139px;' onclick='u("https://montecristo.com.br/produto/N-493-Gargantilha-Encanto")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page32.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page32_th.jpg?d=15082022' data-page-label='t32'>
			<div class='pf-hotspot' style='top:259px;left:479px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/BR5876-Brinco-Rocks")'></div>
			<div class='pf-hotspot' style='top:259px;left:719px;width:251px;height:139px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-05-Colar-Riviera-Negra")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page33.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page33_th.jpg?d=15082022' data-page-label='t33'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page34.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page34_th.jpg?d=15082022' data-page-label='t34'>
			<div class='pf-hotspot' style='top:1823px;left:330px;width:280px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN4164-Anel-Gota-Citrino")'></div>
			<div class='pf-hotspot' style='top:1823px;left:871px;width:280px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN5325-Anel-Topazio-London")'></div>
			<div class='pf-hotspot' style='top:418px;left:345px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN29943-Anel-Hidra")'></div>
			<div class='pf-hotspot' style='top:418px;left:886px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN29919-Anel-Surprise")'></div>
			<div class='pf-hotspot' style='top:893px;left:345px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN3138-Anel-Nisyros")'></div>
			<div class='pf-hotspot' style='top:893px;left:886px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN29146-Anel-Nobre")'></div>
			<div class='pf-hotspot' style='top:1350px;left:345px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN29943b-Anel-Hidra")'></div>
			<div class='pf-hotspot' style='top:1350px;left:886px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/AN5323-Anel-Dusk")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page35.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page35_th.jpg?d=15082022' data-page-label='t35'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page36.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page36_th.jpg?d=15082022' data-page-label='t36'>
			<div class='pf-hotspot' style='top:1205px;left:595px;width:233px;height:115px;' onclick='u("https://montecristo.com.br/produto/BR1542-Brinco-Ametista")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page37.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page37_th.jpg?d=15082022' data-page-label='t37'>
			<div class='pf-hotspot' style='top:1848px;left:955px;width:287px;height:139px;' onclick='u("https://montecristo.com.br/produto/AL29396-Alianca-Arco-Iris")'></div>
			<div class='pf-hotspot' style='top:1848px;left:732px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN28799-Anel-Amsterda")'></div>
			<div class='pf-hotspot' style='top:1854px;left:259px;width:210px;height:133px;' onclick='u("https://montecristo.com.br/produto/AL28195-Alianca-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1848px;left:496px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN29156-Anel-Amsterda")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page38.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page38_th.jpg?d=15082022' data-page-label='t38'>
			<div class='pf-hotspot' style='top:1851px;left:510px;width:210px;height:115px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-01-Colar-Riviera-Rodolitas")'></div>
			<div class='pf-hotspot' style='top:1851px;left:729px;width:210px;height:115px;' onclick='u("https://montecristo.com.br/relogios/Cartier#/cartier/product/WSBB0046/watches/all-collections/rel%C3%B3gio-ballon-bleu-de-cartier-CRWSBB0046")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page39.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page39_th.jpg?d=15082022' data-page-label='t39'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page40.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page40_th.jpg?d=15082022' data-page-label='t40'>
			<div class='pf-hotspot' style='top:1848px;left:476px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/150443421-Bracelete-Couro")'></div>
			<div class='pf-hotspot' style='top:1854px;left:722px;width:251px;height:106px;' onclick='u("https://montecristo.com.br/produto/AB0134101C1A1-CHRONOMAT-B01-42")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page41.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page41_th.jpg?d=15082022' data-page-label='t41'>
			<div class='pf-hotspot' style='top:1848px;left:599px;width:251px;height:115px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-05-Colar-Riviera-Negra")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page42.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page42_th.jpg?d=15082022' data-page-label='t42'>
			<div class='pf-hotspot' style='top:1666px;left:580px;width:303px;height:139px;' onclick='u("https://montecristo.com.br/produto/A13313161C1S1-Superocean-Heritage-II")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page43.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page43_th.jpg?d=15082022' data-page-label='t43'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page44.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page44_th.jpg?d=15082022' data-page-label='t44'>
			<div class='pf-hotspot' style='top:1666px;left:840px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/150402-Pulseira-Rosso-Borracha")'></div>
			<div class='pf-hotspot' style='top:1666px;left:359px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/GA4232-Gargantilha-Steel-Black")'></div>
			<div class='pf-hotspot' style='top:1666px;left:599px;width:251px;height:112px;' onclick='u("https://montecristo.com.br/produto/SPU117-Pulseira-Riviera")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page45.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page45_th.jpg?d=15082022' data-page-label='t45'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page46.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page46_th.jpg?d=15082022' data-page-label='t46'>
			<div class='pf-hotspot' style='top:1856px;left:56px;width:210px;height:106px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:1856px;left:274px;width:210px;height:106px;' onclick='u("https://montecristo.com.br/produto/CO22740-Corrente-Elos-Gutti")'></div>
			<div class='pf-hotspot' style='top:1856px;left:492px;width:210px;height:106px;' onclick='u("https://montecristo.com.br/produto/CO26408-Corrente-Ouro-III")'></div>
			<div class='pf-hotspot' style='top:1856px;left:710px;width:210px;height:106px;' onclick='u("https://montecristo.com.br/produto/CO8550-Corrente-Ouro-IV")'></div>
			<div class='pf-hotspot' style='top:1850px;left:934px;width:210px;height:112px;' onclick='u("https://montecristo.com.br/produto/BR8575-Brinco-Los")'></div>
			<div class='pf-hotspot' style='top:1850px;left:1171px;width:210px;height:112px;' onclick='u("https://montecristo.com.br/produto/BR8573-Brinco-Los")'></div>
			<div class='pf-hotspot' style='top:693px;left:655px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:1231px;left:655px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:1751px;left:655px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:693px;left:1402px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:1231px;left:1402px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
			<div class='pf-hotspot' style='top:1751px;left:1402px;width:29px;height:32px;' onclick='u("https://montecristo.com.br/produto/CO28225-Corrente-Ouro-I")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page47.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page47_th.jpg?d=15082022' data-page-label='t47'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page48.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page48_th.jpg?d=15082022' data-page-label='t48'>
			<div class='pf-hotspot' style='top:1850px;left:364px;width:237px;height:139px;' onclick='u("https://montecristo.com.br/produto/CO7152-Colar-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1850px;left:619px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/SCO119-Gargantilha-Classic")'></div>
			<div class='pf-hotspot' style='top:1850px;left:862px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/BR7276-Brinco-Diamonds")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page49.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page49_th.jpg?d=15082022' data-page-label='t49'>
			<div class='pf-hotspot' style='top:635px;left:558px;width:317px;height:108px;' onclick='u("https://montecristo.com.br/")'></div>
			<div class='pf-hotspot' style='top:785px;left:558px;width:317px;height:108px;' onclick='u("https://api.whatsapp.com/send/?phone=5511964175881&text&app_absent=0")'></div>
			<div class='pf-hotspot' style='top:1093px;left:473px;width:494px;height:127px;' onclick='u("mailto:contato%40montecristo.com.br?subject=")'></div>
			<div class='pf-hotspot' style='top:1254px;left:485px;width:452px;height:152px;' onclick='u("https://www.instagram.com/montecristo.joalheria/")'></div>
			<div class='pf-hotspot' style='top:1425px;left:495px;width:423px;height:127px;' onclick='u("https://www.facebook.com/montecristojoalheria/")'></div>
			<div class='pf-hotspot' style='top:1565px;left:514px;width:404px;height:127px;' onclick='u("https://www.youtube.com/channel/UCPGQvhkf8PqVwbIZBt_mqIw")'></div>
			<div class='pf-hotspot' style='top:1717px;left:573px;width:293px;height:127px;' onclick='u("https://br.pinterest.com/mjoalheria/_created/")'></div>
			<div class='pf-hotspot' style='top:1848px;left:542px;width:376px;height:125px;' onclick='u("https://www.linkedin.com/company/montecristojoalheria/?viewAsMember=true")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page50.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page50_th.jpg?d=15082022' data-page-label='t50'>
			<div class='pf-hotspot' style='top:1294px;left:465px;width:519px;height:150px;' onclick='u("https://montecristo.com.br/lojas#Shopping-JK-Iguatemi")'></div>
			<div class='pf-hotspot' style='top:1502px;left:465px;width:519px;height:150px;' onclick='u("https://montecristo.com.br/lojas#Shopping-Iguatemi-SP")'></div>
			<div class='pf-hotspot' style='top:1709px;left:465px;width:519px;height:147px;' onclick='u("https://montecristo.com.br/lojas#Espao-Rolex-Montecristo")'></div>
			<div class='pf-hotspot' style='top:409px;left:646px;width:158px;height:109px;' onclick='u("https://montecristo.com.br/rolex")'></div>
			<div class='pf-hotspot' style='top:546px;left:636px;width:177px;height:64px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:643px;left:623px;width:203px;height:99px;' onclick='u("https://montecristo.com.br/relogios/Breitling")'></div>
			<div class='pf-hotspot' style='top:870px;left:631px;width:186px;height:87px;' onclick='u("https://montecristo.com.br/relogios/Victorinox")'></div>
			<div class='pf-hotspot' style='top:783px;left:588px;width:272px;height:53px;' onclick='u("https://montecristo.com.br/relogios/tag-heuer")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page51.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page51_th.jpg?d=15082022' data-page-label='t51'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page52.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page52_th.jpg?d=15082022' data-page-label='t52'>
			<div class='pf-hotspot' style='top:1843px;left:956px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/MC07-Pulseira-Elos-Groumet")'></div>
			<div class='pf-hotspot' style='top:1843px;left:1180px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/DEL-CO-04-Colar-Riviera")'></div>
			<div class='pf-hotspot' style='top:1843px;left:731px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/AL28195-Alianca-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1843px;left:507px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/AL25282-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:1843px;left:283px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/AN2525-Meia-Alianca-Navetes")'></div>
			<div class='pf-hotspot' style='top:1843px;left:59px;width:210px;height:139px;' onclick='u("https://montecristo.com.br/produto/BR7516-Brinco-Pearls")'></div>
		</div>
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page53.jpg?d=15082022' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page53_th.jpg?d=15082022' data-page-label='t53'>
			<div class='pf-hotspot' style='top:1461px;left:617px;width:204px;height:54px;' onclick='u("https://www.instagram.com/ajung1969/")'></div>
			<div class='pf-hotspot' style='top:1603px;left:522px;width:393px;height:70px;' onclick='u("https://ajung.com.br/")'></div>
			<div class='pf-hotspot' style='top:1318px;left:617px;width:217px;height:47px;' onclick='u("https://www.csnit.com.br/")'></div>
			<div class='pf-hotspot' style='top:1169px;left:646px;width:157px;height:47px;' onclick='u("https://www.instagram.com/iam.andrelima/")'></div>
			<div class='pf-hotspot' style='top:1108px;left:636px;width:166px;height:47px;' onclick='u("https://www.instagram.com/felipedavis_pad/")'></div>
			<div class='pf-hotspot' style='top:1053px;left:635px;width:166px;height:54px;' onclick='u("https://www.instagram.com/julia.jabour/")'></div>
		</div>
		<div class='controlbar'>
			<div id="pageflip-controls">
				<div class="pf-left-buttons">
					<div id="b-twitter" class="pf-control-bar-button" title="Share on Twitter"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" enable-background="new 0 0 26 26" xml:space="preserve">
							<g>
								<path d="M22.218,7.761c-0.641,0.284-1.331,0.477-2.055,0.563c0.739-0.442,1.306-1.144,1.573-1.979
	c-0.691,0.41-1.457,0.708-2.272,0.868c-0.652-0.696-1.582-1.13-2.611-1.13c-1.976,0-3.578,1.602-3.578,3.578
	c0,0.28,0.032,0.553,0.092,0.815c-2.973-0.149-5.608-1.573-7.374-3.738C5.688,7.267,5.511,7.881,5.511,8.537
	c0,1.241,0.632,2.336,1.591,2.977c-0.586-0.019-1.138-0.179-1.62-0.447c0,0.015,0,0.03,0,0.045c0,1.733,1.233,3.179,2.87,3.508
	c-0.3,0.082-0.616,0.125-0.942,0.125c-0.23,0-0.455-0.022-0.673-0.064c0.455,1.422,1.776,2.456,3.342,2.485
	c-1.225,0.959-2.767,1.531-4.443,1.531c-0.289,0-0.574-0.017-0.854-0.049c1.583,1.015,3.463,1.606,5.483,1.606
	c6.58,0,10.179-5.451,10.179-10.178c0-0.155-0.004-0.31-0.011-0.463C21.132,9.108,21.739,8.478,22.218,7.761z" />
							</g>
						</svg></div>
					<div id="b-facebook" class="pf-control-bar-button" title="Share on Facebook"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<path d="M14.064,20.656h-3.379V12.49H8.997V9.675h1.688v-1.69c0-2.295,0.954-3.661,3.661-3.661h2.254v2.815h-1.408
		c-1.055,0-1.125,0.394-1.125,1.127l-0.003,1.409h2.554l-0.3,2.814h-2.254V20.656z" />
							</g>
						</svg></div>
					<div id="b-pinterest" class="pf-control-bar-button" title="Pin it!"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<path d="M11.467,14.991c-0.383,1.679-0.759,3.298-1.579,4.575
		c-0.25,0.39-0.503,0.882-0.931,1.093c-0.635-3.26,0.688-6.005,1.214-8.745c-0.669-1.36-0.253-3.667,1.175-3.927
		c2.07-0.379,1.525,2.118,1.174,3.279c-0.192,0.636-0.54,1.245-0.486,1.944c0.114,1.472,1.967,1.566,2.914,0.81
		c1.36-1.085,1.752-3.179,1.62-4.899c-0.202-2.619-3.169-3.922-5.788-2.875c-1.35,0.54-2.576,1.78-2.754,3.603
		c-0.094,0.96,0.107,1.727,0.485,2.268c0.058,0.082,0.255,0.227,0.283,0.446c0.06,0.444-0.204,0.923-0.444,1.254
		c-1.343-0.387-2.035-1.592-2.146-3.116C5.951,7.23,8.799,4.59,12.154,4.344c3.578-0.263,6.417,1.804,6.68,4.817
		c0.195,2.24-0.598,4.496-1.861,5.708c-0.948,0.912-2.966,1.803-4.615,0.932C11.992,15.607,11.83,15.371,11.467,14.991z" />
							</g>
						</svg></div>
					<div id="b-google" class="pf-control-bar-button" title="Share on Google+"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<path d="M4.922,12.665c0.058-3.45,3.231-6.473,6.683-6.358c1.654-0.077,3.209,0.643,4.476,1.654
	c-0.541,0.615-1.102,1.206-1.698,1.759c-1.523-1.052-3.689-1.353-5.212-0.138c-2.178,1.506-2.277,5.063-0.183,6.686
	c2.038,1.849,5.89,0.931,6.453-1.901c-1.276-0.019-2.557,0-3.833-0.042c-0.003-0.761-0.006-1.521-0.003-2.283
	c2.134-0.006,4.268-0.01,6.404,0.007c0.128,1.792-0.108,3.698-1.21,5.178c-1.666,2.346-5.012,3.029-7.622,2.025
	C6.557,18.253,4.701,15.485,4.922,12.665 M22.171,10.119c-0.007,0.637-0.014,1.273-0.016,1.913
	c-0.641,0.003-1.276,0.006-1.913,0.013c0,0.635,0,1.269,0,1.903c0.637,0.005,1.277,0.011,1.913,0.018
	c0.006,0.639,0.006,1.273,0.013,1.911c0.638,0,1.27,0,1.907,0c0.003-0.637,0.007-1.272,0.013-1.913
	c0.64-0.007,1.275-0.011,1.912-0.016c0-0.633,0-1.27,0-1.903c-0.637-0.006-1.275-0.006-1.912-0.013
	c-0.006-0.637-0.01-1.277-0.013-1.913C23.437,10.119,22.804,10.119,22.171,10.119" />
							</g>
						</svg></div>
				</div>
				<div class="pf-right-buttons">
					<!--<div id="b-close" class="control-bar-button right" title="Close"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<polygon points="17.479,8.5 15.5,6.52 11,11.02 6.5,6.52 4.52,8.5 9.02,13 4.52,17.5 6.5,19.479 11,14.979 15.5,19.479 
		17.479,17.5 12.979,13 	"/>
</g>
</svg></div>-->
					<div id="b-fullscreen" class="pf-control-bar-button pf-right" title="Fullscreen On/Off"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
							<g>
								<path d="M5.368,12.116v4.346h5.969v-4.346H5.368z M17,16c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2v-6c0-1.104,0.896-2,2-2h9 c1.104,0,2,0.896,2,2V16z" />
							</g>
						</svg></div>
					<div id="b-fullscreenoff" class="pf-control-bar-button pf-right" title="Fullscreen On/Off" style="display: none;"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
							<g>
								<path d="M5.368,9.538v3.351h5.882v3.573h4.382V9.538H5.368z M17,16c0,1.104-0.896,2-2,2H6c-1.104,0-2-0.896-2-2v-6 c0-1.104,0.896-2,2-2h9c1.104,0,2,0.896,2,2V16z" />
							</g>
						</svg></div>
					<div id="b-thumbs" class="pf-control-bar-button pf-right" title="Thumbnails"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
							<g>
								<rect x="3" y="7" width="3.3" height="3.3" />
								<rect x="3" y="11" width="3.3" height="3.3" />
								<rect x="3" y="15" width="3.3" height="3.3" />
								<rect x="7" y="7" width="3.3" height="3.3" />
								<rect x="7" y="11" width="3.3" height="3.3" />
								<rect x="7" y="15" width="3.3" height="3.3" />
								<rect x="11" y="7" width="3.3" height="3.3" />
								<rect x="11" y="11" width="3.3" height="3.3" />
								<rect x="11" y="15" width="3.3" height="3.3" />
								<rect x="15" y="7" width="3.3" height="3.3" />
								<rect x="15" y="11" width="3.3" height="3.3" />
							</g>
						</svg></div>
					<!--<div id="b-index" class="control-bar-button right" title="Table of Contents"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<circle cx="4.5" cy="9" r="1.5"/>
	<rect x="7" y="8" width="11" height="1.5"/>
	<circle cx="4.5" cy="13" r="1.5"/>
	<rect x="7" y="12" width="11" height="1.5"/>
	<circle cx="4.5" cy="17" r="1.5"/>
	<rect x="7" y="16" width="11" height="1.5"/>
</g>
</svg>
</div>
		<div id="b-download" class="control-bar-button right" title="Download printable .pdf version"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<path d="M2.75,17.889c0,0,4.35-2.535,7.25,0V9.016c-2.9-2.535-7.25,0-7.25,0V17.889z"/>
	<path d="M18.25,17.889c0,0-4.352-2.535-7.25,0V9.016c2.898-2.535,7.25,0,7.25,0V17.889z"/>
</g>
</svg></div>
		<div id="b-info" class="control-bar-button right" title="Info"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<circle cx="10.5" cy="8" r="1.5"/>
	<polygon points="7,10.5 7,11.5 9,11.5 9,16.5 7,16.5 7,17.5 14,17.5 14,16.5 12,16.5 12,10.5 	"/>
</g>
</svg>
</div>
		<div id="b-sound" class="control-bar-button right" title="Sound On/Off" style="display: none;"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<g>
		<polygon points="4,11 4,16 7,16 10,19 10,8 7,11 		"/>
	</g>
	<g>
		<path d="M14.885,20.165l-0.813-0.517l0.259-0.407c1.116-1.757,1.707-3.742,1.707-5.741s-0.591-3.984-1.707-5.742l-0.259-0.407
			l0.813-0.517l0.258,0.407C16.358,9.154,17,11.318,17,13.5c0,2.183-0.642,4.347-1.857,6.259L14.885,20.165z"/>
	</g>
	<g>
		<path d="M13.285,19.107l-0.828-0.494l0.247-0.414c0.885-1.48,1.333-3.062,1.333-4.699s-0.448-3.219-1.333-4.699l-0.247-0.414
			l0.828-0.494l0.247,0.414C14.506,9.938,15,11.686,15,13.5c0,1.814-0.494,3.562-1.468,5.193L13.285,19.107z"/>
	</g>
	<g>
		<path d="M11.692,18.048l-0.846-0.462l0.231-0.423c0.637-1.166,0.96-2.398,0.96-3.663c0-1.264-0.323-2.497-0.96-3.663l-0.231-0.423
			l0.846-0.462l0.231,0.423C12.638,10.685,13,12.072,13,13.5s-0.362,2.815-1.077,4.124L11.692,18.048z"/>
	</g>
</g>
</svg></div>
		<div id="b-soundoff" class="control-bar-button right"title="Sound On/Off" ><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
<g>
	<polygon points="4,11 4,16 7,16 10,19 10,8 7,11 	"/>
	<polygon points="17.047,11.039 16.252,10.244 14.126,12.37 12,10.244 11.205,11.039 13.331,13.165 11.205,15.291 12,16.086 
		14.126,13.96 16.252,16.086 17.047,15.291 14.921,13.165 	"/>
</g>
</svg></div>-->
					<div id="b-play" class="pf-control-bar-button pf-right" title="Auto Flipping"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
							<g>
								<polygon points="5,8 17,13 5,18 	" />
							</g>
						</svg>
					</div>
					<div id="b-pause" class="pf-control-bar-button pf-right" title="Stop Auto Flipping" style="display: none;"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="26px" viewBox="0 0 22 26" xml:space="preserve">
							<g>
								<path d="M10,16c0,1.104-0.896,2-2,2H7c-1.104,0-2-0.896-2-2v-6c0-1.104,0.896-2,2-2h1c1.104,0,2,0.896,2,2V16z" />
								<path d="M17,16c0,1.104-0.896,2-2,2h-1c-1.104,0-2-0.896-2-2v-6c0-1.104,0.896-2,2-2h1c1.104,0,2,0.896,2,2V16z" />
							</g>
						</svg>
					</div>
					<div id="b-zoomin" class="pf-control-bar-button pf-right" title="Zoom In"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<path d="M22.09,21.01l-4.643-4.641c0.609-0.98,0.967-2.133,0.967-3.369c0-3.537-2.877-6.414-6.414-6.414
	c-3.535,0-6.414,2.877-6.414,6.414c0,3.535,2.879,6.414,6.414,6.414c1.288,0,2.485-0.385,3.491-1.041l4.618,4.617L22.09,21.01z
	 M13,17h-2v-3H8v-2h3V9h2v3h3v2h-3V17z" />
							</g>
						</svg></div>
					<div id="b-zoomout" class="pf-control-bar-button pf-right" title="Zoom Out" style="display: none;"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<path d="M22.09,21.01l-4.643-4.641c0.609-0.98,0.967-2.133,0.967-3.369c0-3.537-2.877-6.414-6.414-6.414
	c-3.535,0-6.414,2.877-6.414,6.414c0,3.535,2.879,6.414,6.414,6.414c1.288,0,2.485-0.385,3.491-1.041l4.618,4.617L22.09,21.01z
	 M8,14v-2h8v2H8z" />
							</g>
						</svg>
					</div>
				</div>
				<div class="pf-centered-buttons">
					<div id="b-first" class="pf-control-bar-button pf-disabled"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<polygon points="9,13 17,21 19,19 13,13 19,7 17,5 	" />
								<rect x="6.2" y="6" width="2.8" height="14" />
							</g>
						</svg></div>
					<div id="b-prev" class="pf-control-bar-button pf-disabled"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<polygon points="7,13 17,23 19,21 11,13 19,5 17,3 	" />
							</g>
						</svg></div>
					<form id="pf-pfpager" class="pf-control-bar-pager">
						<input type="text" name="pagerin" id="pf-pagerin">
					</form>
					<div id="b-next" class="pf-control-bar-button pf-disabled"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<polygon points="20,13 10,23 8,21 16,13 8,5 10,3 	" />
							</g>
						</svg>
					</div>
					<div id="b-last" class="pf-control-bar-button pf-disabled"><svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 26 26" xml:space="preserve">
							<g>
								<polygon points="17,13 9,21 7,19 13,13 7,7 9,5 	" />
								<rect x="17" y="6" width="2.8" height="14" />
							</g>
						</svg></div>
				</div>
				<div id="pf-copyright-text">&copy;2014 pageflip-books.com</div>
				<div class="pageflip-credits">Powered by <a href="http://pageflip-books.com" target="_blank">Pageflip 5</a></div>
			</div>
		</div>
	</div>
	<!-- start script needed to run pageflip -->
	<script type="text/javascript">
		var $pageflip = $('#pageflip');
		$pageflip.pageflipInit({
			PageWidth: 1448,
			PageHeight: 2048,
			Margin: 32,
			MarginBottom: 64,
			PerformanceAware: false,
			AutoScale: true,
			FullScale: true,
			HardCover: true,
			HardPages: false,
			RightToLeft: false,
			VerticalMode: false,
			AlwaysOpened: false,
			AutoFlipEnabled: true,
			StartAutoFlip: false,
			AutoFlipLoop: -1,
			DropShadow: false,
			NoFlipShadow: true,
			Emboss: false,
			DropShadowOpacity: 0.2,
			FlipTopShadowOpacity: 0.2,
			FlipShadowOpacity: 0.2,
			HardFlipOpacity: 0.2,
			EmbossOpacity: 0.2,
			HashControl: true,
			PageCache: 5,
			MouseControl: true,
			HotKeys: true,
			ControlbarToFront: false,
			FullScreenEnabled: true,
			Thumbnails: true,
			ThumbnailsHidden: true,
			ThumbnailWidth: 113,
			ThumbnailHeight: 160,
			ThumbnailsToFront: true,
			ThumbnailsAutoHide: 5000,
			ShareLink: window.location.href,
			ShareText: 'catalogo pdf https://pageflip-books.com',
			ShareVia: '@MaccPageFlip',
			ShareImageURL: '<?php echo $pasta ?>pageflipdata/page0.jpg?d=15082022',
			DisableSelection: true,
			CenterSinglePage: false,
			SinglePageMode: true,
			ShowCopyright: false,
			Copyright: '©2016 pageflip-books.com',
			Key: 'dTVMHtEixX$LF/Sg5d'
		}, "gentlypartofyou");
		var API = $pageflip.pageflip();

		function p(n) {
			API.gotoPageLabel("t" + n, true);
		}

		function u(url) {
			window.open(url);
		}
	</script>
	<!-- end script needed to run pageflip -->
	<!-- end embed pageflip -->
</section>
<?php require_once 'footer.php' ?>