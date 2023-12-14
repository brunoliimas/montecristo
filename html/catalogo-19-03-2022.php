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
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page0.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page0_th.webp' data-page-label='t0'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page1.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page1_th.webp' data-page-label='t1'>
			<div class='pf-hotspot' style='top:94px;left:104px;width:150px;height:198px;' onclick='u("https://montecristo.com.br/produto/AN6195-Anel-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:94px;left:378px;width:177px;height:198px;' onclick='u("https://montecristo.com.br/produto/AN31996-Anel-Queen")'></div>
			<div class='pf-hotspot' style='top:349px;left:227px;width:198px;height:274px;' onclick='u("https://www.montecristo.com.br/produto/BR5522-Brinco-Queen")'></div>
			<div class='pf-hotspot' style='top:668px;left:99px;width:144px;height:228px;' onclick='u("https://www.montecristo.com.br/produto/BR30605-Brinco-Diamond")'></div>
			<div class='pf-hotspot' style='top:668px;left:370px;width:169px;height:225px;' onclick='u("https://www.montecristo.com.br/produto/BR5521-Brinco-Diamond")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page2.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page2_th.webp' data-page-label='t2'>
			<div class='pf-hotspot' style='top:820px;left:19px;width:138px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/PU4946-Pulseira-Escrava-Rubi")'></div>
			<div class='pf-hotspot' style='top:851px;left:19px;width:138px;height:23px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:881px;left:19px;width:138px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:910px;left:19px;width:138px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/AN-LUI-02-Anel-Esmeralda-Gota")'></div>
			<div class='pf-hotspot' style='top:940px;left:19px;width:143px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/AN25259-Anel-Rubi")'></div>
			<div class='pf-hotspot' style='top:559px;left:104px;width:26px;height:15px;' onclick='u("https://www.montecristo.com.br/produto/PU4946-Pulseira-Escrava-Rubi")'></div>
			<div class='pf-hotspot' style='top:561px;left:144px;width:23px;height:18px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:569px;left:177px;width:33px;height:17px;' onclick='u("https://www.montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:699px;left:303px;width:20px;height:16px;' onclick='u("https://www.montecristo.com.br/produto/AN-LUI-02-Anel-Esmeralda-Gota")'></div>
			<div class='pf-hotspot' style='top:699px;left:373px;width:20px;height:13px;' onclick='u("https://www.montecristo.com.br/produto/AN25259-Anel-Rubi")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page3.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page3_th.webp' data-page-label='t3'>
			<div class='pf-hotspot' style='top:63px;left:112px;width:155px;height:167px;' onclick='u("https://www.montecristo.com.br/produto/AN30792-Alianca-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:58px;left:409px;width:153px;height:172px;' onclick='u("https://www.montecristo.com.br/produto/AN6195-Anel-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:295px;left:42px;width:196px;height:232px;' onclick='u("https://www.montecristo.com.br/produto/CO28251-Colar-Gota-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:295px;left:251px;width:141px;height:232px;' onclick='u("https://www.montecristo.com.br/produto/CO30082-Colar")'></div>
			<div class='pf-hotspot' style='top:295px;left:406px;width:204px;height:232px;' onclick='u("https://www.montecristo.com.br/produto/CO8129-Colar-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:617px;left:149px;width:326px;height:92px;' onclick='u("https://www.montecristo.com.br/produto/PU30139-Pulseira-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:776px;left:99px;width:177px;height:128px;' onclick='u("https://www.montecristo.com.br/produto/BR30030-Brinco-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:785px;left:375px;width:196px;height:120px;' onclick='u("https://www.montecristo.com.br/produto/BR6451-Brinco-Coracao-Esmeralda")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page4.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page4_th.webp' data-page-label='t4'>
			<div class='pf-hotspot' style='top:881px;left:489px;width:139px;height:19px;' onclick='u("https://www.montecristo.com.br/produto/MA-01-AN-Anel-Turmalina-Paraiba")'></div>
			<div class='pf-hotspot' style='top:907px;left:489px;width:139px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:938px;left:489px;width:139px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/AN-MAR01-Anel-Precious")'></div>
			<div class='pf-hotspot' style='top:316px;left:253px;width:21px;height:18px;' onclick='u("https://www.montecristo.com.br/produto/MA-01-AN-Anel-Turmalina-Paraiba")'></div>
			<div class='pf-hotspot' style='top:492px;left:165px;width:30px;height:19px;' onclick='u("https://www.montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:730px;left:414px;width:22px;height:22px;' onclick='u("https://www.montecristo.com.br/produto/AN-MAR01-Anel-Precious")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page5.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page5_th.webp' data-page-label='t5'>
			<div class='pf-hotspot' style='top:86px;left:417px;width:154px;height:107px;' onclick='u("https://www.montecristo.com.br/produto/BR7150-Brinco-Gota")'></div>
			<div class='pf-hotspot' style='top:244px;left:393px;width:193px;height:178px;' onclick='u("https://www.montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:397px;left:175px;width:140px;height:21px;' onclick='u("https://www.montecristo.com.br/produto/CL-GA-02-Colar-Coracoes")'></div>
			<div class='pf-hotspot' style='top:428px;left:175px;width:139px;height:18px;' onclick='u("https://www.montecristo.com.br/produto/PU6643-Pulseira-Cool")'></div>
			<div class='pf-hotspot' style='top:457px;left:175px;width:139px;height:19px;' onclick='u("https://www.montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:337px;left:172px;width:148px;height:18px;' onclick='u("https://www.montecristo.com.br/produto/CL-GA-05-Gargantilha-Classic")'></div>
			<div class='pf-hotspot' style='top:365px;left:175px;width:140px;height:22px;' onclick='u("https://www.montecristo.com.br/produto/CL-CO-01-Gargantilha-Classic-II")'></div>
			<div class='pf-hotspot' style='top:175px;left:99px;width:23px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/CL-GA-05-Gargantilha-Classic")'></div>
			<div class='pf-hotspot' style='top:223px;left:89px;width:23px;height:15px;' onclick='u("https://www.montecristo.com.br/produto/CL-GA-02-Colar-Coracoes")'></div>
			<div class='pf-hotspot' style='top:196px;left:86px;width:19px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/CL-CO-01-Gargantilha-Classic-II")'></div>
			<div class='pf-hotspot' style='top:411px;left:40px;width:17px;height:15px;' onclick='u("https://www.montecristo.com.br/produto/PU6643-Pulseira-Cool")'></div>
			<div class='pf-hotspot' style='top:457px;left:51px;width:20px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:599px;left:78px;width:139px;height:275px;' onclick='u("https://www.montecristo.com.br/produto/BR5003-Brinco-Shining-Drop")'></div>
			<div class='pf-hotspot' style='top:666px;left:425px;width:40px;height:31px;' onclick='u("https://montecristo.com.br/produto/BR20098-Piercing-Diamantes-Luminous-Chain-White")'></div>
			<div class='pf-hotspot' style='top:706px;left:471px;width:24px;height:13px;' onclick='u("https://montecristo.com.br/produto/CL-BR-12-Brinco-Asa")'></div>
			<div class='pf-hotspot' style='top:843px;left:513px;width:17px;height:18px;' onclick='u("https://www.montecristo.com.br/produto/BR25116-Brinco-Sublime")'></div>
			<div class='pf-hotspot' style='top:843px;left:338px;width:141px;height:20px;' onclick='u("https://montecristo.com.br/produto/BR20098-Piercing-Diamantes-Luminous-Chain-White")'></div>
			<div class='pf-hotspot' style='top:871px;left:338px;width:141px;height:20px;' onclick='u("https://montecristo.com.br/produto/BR20098-Piercing-Diamantes-Luminous-Chain-White")'></div>
			<div class='pf-hotspot' style='top:897px;left:338px;width:141px;height:27px;' onclick='u("https://montecristo.com.br/produto/CL-BR-12-Brinco-Asa")'></div>
			<div class='pf-hotspot' style='top:929px;left:338px;width:141px;height:23px;' onclick='u("https://www.montecristo.com.br/produto/BR25116-Brinco-Sublime")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page6.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page6_th.webp' data-page-label='t6'>
			<div class='pf-hotspot' style='top:767px;left:451px;width:17px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:842px;left:455px;width:17px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:61px;left:115px;width:135px;height:170px;' onclick='u("https://www.montecristo.com.br/produto/F057L5-Anel-Tourmaline")'></div>
			<div class='pf-hotspot' style='top:53px;left:383px;width:185px;height:177px;' onclick='u("https://www.montecristo.com.br/produto/BR29537-Brinco-Graceful")'></div>
			<div class='pf-hotspot' style='top:280px;left:70px;width:227px;height:215px;' onclick='u("https://www.montecristo.com.br/produto/BR2530-Brinco-Argola-Flores")'></div>
			<div class='pf-hotspot' style='top:323px;left:400px;width:137px;height:172px;' onclick='u("https://www.montecristo.com.br/produto/F134L6-Anel-Tourmaline-II")'></div>
			<div class='pf-hotspot' style='top:592px;left:91px;width:168px;height:300px;' onclick='u("https://montecristo.com.br/produto/RO-CO-29-Colar-Turmalina-Paraiba")'></div>
			<div class='pf-hotspot' style='top:873px;left:400px;width:143px;height:22px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:901px;left:400px;width:143px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:731px;left:438px;width:86px;height:57px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:683px;left:495px;width:52px;height:57px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:629px;left:510px;width:52px;height:57px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:555px;left:526px;width:52px;height:89px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:555px;left:361px;width:42px;height:89px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:605px;left:380px;width:42px;height:89px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:667px;left:400px;width:42px;height:89px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-02-Colar-Heart-Purity")'></div>
			<div class='pf-hotspot' style='top:814px;left:444px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:789px;left:485px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:754px;left:518px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:719px;left:548px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:683px;left:550px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:643px;left:565px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:605px;left:580px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:609px;left:305px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:648px;left:321px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:696px;left:343px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:744px;left:343px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:758px;left:369px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:789px;left:389px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
			<div class='pf-hotspot' style='top:797px;left:420px;width:54px;height:51px;' onclick='u("https://www.montecristo.com.br/produto/CO-KA-01-Colar-Purity-Snow")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page7.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page7_th.webp' data-page-label='t7'>
			<div class='pf-hotspot' style='top:761px;left:498px;width:130px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/CO-27-JKRE-Colar-Terco-Onix-Pray")'></div>
			<div class='pf-hotspot' style='top:830px;left:316px;width:65px;height:161px;' onclick='u("https://www.montecristo.com.br/produto/CO-27-JKRE-Colar-Terco-Onix-Pray")'></div>
			<div class='pf-hotspot' style='top:788px;left:504px;width:126px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/PU-02-IGRE-Bracelete-Endless-Knot-Prata")'></div>
			<div class='pf-hotspot' style='top:742px;left:370px;width:15px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/PU-02-IGRE-Bracelete-Endless-Knot-Prata")'></div>
			<div class='pf-hotspot' style='top:816px;left:498px;width:131px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/PU-20-IGRE-Pulseira-Rings-All-Black")'></div>
			<div class='pf-hotspot' style='top:755px;left:360px;width:25px;height:14px;' onclick='u("https://www.montecristo.com.br/produto/PU-20-IGRE-Pulseira-Rings-All-Black")'></div>
			<div class='pf-hotspot' style='top:848px;left:498px;width:131px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/PU-10-IGRE-Pulseira-Rope-All-Black")'></div>
			<div class='pf-hotspot' style='top:788px;left:352px;width:20px;height:9px;' onclick='u("https://www.montecristo.com.br/produto/PU-10-IGRE-Pulseira-Rope-All-Black")'></div>
			<div class='pf-hotspot' style='top:882px;left:499px;width:130px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/PU-06-IGRE-Bracelete-Double-Knot-Rodio-Negro-e-Couro-Preto")'></div>
			<div class='pf-hotspot' style='top:796px;left:321px;width:22px;height:14px;' onclick='u("https://www.montecristo.com.br/produto/PU-06-IGRE-Bracelete-Double-Knot-Rodio-Negro-e-Couro-Preto")'></div>
			<div class='pf-hotspot' style='top:910px;left:499px;width:130px;height:20px;' onclick='u("https://www.montecristo.com.br/produto/AN4741-Anel-Tranca")'></div>
			<div class='pf-hotspot' style='top:937px;left:498px;width:131px;height:20px;' onclick='u("https://montecristo.com.br/produto/30010-Anel-Barbed-Wire-Rodio-Negro")'></div>
			<div class='pf-hotspot' style='top:447px;left:423px;width:22px;height:14px;' onclick='u("https://montecristo.com.br/produto/30010-Anel-Barbed-Wire-Rodio-Negro")'></div>
			<div class='pf-hotspot' style='top:430px;left:447px;width:17px;height:14px;' onclick='u("https://www.montecristo.com.br/produto/AN4741-Anel-Tranca")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page8.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page8_th.webp' data-page-label='t8'>
			<div class='pf-hotspot' style='top:56px;left:137px;width:312px;height:239px;' onclick='u("https://www.montecristo.com.br/produto/PI27716-Pingente-Sao-Bento")'></div>
			<div class='pf-hotspot' style='top:322px;left:137px;width:388px;height:124px;' onclick='u("https://montecristo.com.br/produto/PU30372-Pulseira-Force")'></div>
			<div class='pf-hotspot' style='top:510px;left:137px;width:392px;height:163px;' onclick='u("https://www.montecristo.com.br/produto/150322-2-Pulseira-Rosso-Couro")'></div>
			<div class='pf-hotspot' style='top:678px;left:137px;width:352px;height:284px;' onclick='u("https://www.montecristo.com.br/produto/PU30879-Pulseira-Masculina-Shot")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page9.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page9_th.webp' data-page-label='t9'>
			<div class='pf-hotspot' style='top:458px;left:251px;width:23px;height:17px;' onclick='u("https://montecristo.com.br/produto/ALFCS3BVN-Alianca-Infinity-Love-Triple")'></div>
			<div class='pf-hotspot' style='top:455px;left:274px;width:17px;height:12px;' onclick='u("https://www.montecristo.com.br/produto/AN1196-Anel-Porcelana-Preta")'></div>
			<div class='pf-hotspot' style='top:883px;left:322px;width:62px;height:68px;' onclick='u("https://www.montecristo.com.br/produto/GA-6681-Escapulario-N-S-do-Carmo-e-S-C-Jesus")'></div>
			<div class='pf-hotspot' style='top:883px;left:462px;width:134px;height:18px;' onclick='u("https://www.montecristo.com.br/produto/AN1196-Anel-Porcelana-Preta")'></div>
			<div class='pf-hotspot' style='top:907px;left:462px;width:167px;height:24px;' onclick='u("https://montecristo.com.br/produto/ALFCS3BVN-Alianca-Infinity-Love-Triple")'></div>
			<div class='pf-hotspot' style='top:937px;left:462px;width:144px;height:24px;' onclick='u("https://www.montecristo.com.br/produto/GA-6681-Escapulario-N-S-do-Carmo-e-S-C-Jesus")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page10.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page10_th.webp' data-page-label='t10'>
			<div class='pf-hotspot' style='top:154px;left:100px;width:140px;height:170px;' onclick='u("https://www.montecristo.com.br/produto/AN2025-Anel-Rho")'></div>
			<div class='pf-hotspot' style='top:137px;left:308px;width:321px;height:187px;' onclick='u("https://montecristo.com.br/produto/PU7632-Pulseira-White-Interlaced")'></div>
			<div class='pf-hotspot' style='top:471px;left:389px;width:158px;height:337px;' onclick='u("https://www.montecristo.com.br/produto/PI31365-Pingente-Special-Cross")'></div>
			<div class='pf-hotspot' style='top:490px;left:92px;width:195px;height:318px;' onclick='u("https://www.montecristo.com.br/produto/CO31357-Escapulario-Starling")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page11.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page11_th.webp' data-page-label='t11'>
			<div class='pf-hotspot' style='top:647px;left:408px;width:17px;height:11px;' onclick='u("https://montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:649px;left:388px;width:17px;height:11px;' onclick='u("https://montecristo.com.br/produto/AN30548-Alianca")'></div>
			<div class='pf-hotspot' style='top:760px;left:470px;width:142px;height:16px;' onclick='u("https://www.montecristo.com.br/produto/BR29152-Brinco-Charm")'></div>
			<div class='pf-hotspot' style='top:449px;left:423px;width:20px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/BR29152-Brinco-Charm")'></div>
			<div class='pf-hotspot' style='top:788px;left:471px;width:140px;height:22px;' onclick='u("https://www.montecristo.com.br/produto/AN6197-Alianca-Glamour")'></div>
			<div class='pf-hotspot' style='top:568px;left:388px;width:19px;height:11px;' onclick='u("https://www.montecristo.com.br/produto/AN6197-Alianca-Glamour")'></div>
			<div class='pf-hotspot' style='top:819px;left:471px;width:130px;height:22px;' onclick='u("https://montecristo.com.br/produto/AN2543F-Anel")'></div>
			<div class='pf-hotspot' style='top:580px;left:364px;width:17px;height:15px;' onclick='u("https://montecristo.com.br/produto/AN2543F-Anel")'></div>
			<div class='pf-hotspot' style='top:845px;left:471px;width:140px;height:27px;' onclick='u("https://www.montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:583px;left:344px;width:17px;height:13px;' onclick='u("https://www.montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:880px;left:473px;width:142px;height:19px;' onclick='u("https://montecristo.com.br/produto/AN2525-Meia-Alianca-Navetes")'></div>
			<div class='pf-hotspot' style='top:602px;left:478px;width:18px;height:11px;' onclick='u("https://montecristo.com.br/produto/AN2525-Meia-Alianca-Navetes")'></div>
			<div class='pf-hotspot' style='top:907px;left:473px;width:148px;height:22px;' onclick='u("https://montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:647px;left:408px;width:17px;height:11px;' onclick='u("https://montecristo.com.br/produto/F1200L8-Alianca")'></div>
			<div class='pf-hotspot' style='top:939px;left:473px;width:145px;height:22px;' onclick='u("https://montecristo.com.br/produto/AN30548-Alianca")'></div>
			<div class='pf-hotspot' style='top:648px;left:388px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN30548-Alianca")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page12.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page12_th.webp' data-page-label='t12'>
			<div class='pf-hotspot' style='top:602px;left:406px;width:17px;height:11px;' onclick='u("https://montecristo.com.br/produto/BR21070-Argola-Mermaid")'></div>
			<div class='pf-hotspot' style='top:852px;left:24px;width:128px;height:19px;' onclick='u("https://montecristo.com.br/produto/BR21070-Argola-Mermaid")'></div>
			<div class='pf-hotspot' style='top:880px;left:24px;width:128px;height:19px;' onclick='u("https://montecristo.com.br/produto/AN31388-Anel-Nisyros")'></div>
			<div class='pf-hotspot' style='top:913px;left:24px;width:128px;height:19px;' onclick='u("https://montecristo.com.br/produto/AN2966-Anel-Samos")'></div>
			<div class='pf-hotspot' style='top:943px;left:24px;width:133px;height:19px;' onclick='u("https://montecristo.com.br/produto/AN2490-Anel-Corfu")'></div>
			<div class='pf-hotspot' style='top:302px;left:488px;width:141px;height:19px;' onclick='u("https://montecristo.com.br/produto/BR5875-Brinco-Franja")'></div>
			<div class='pf-hotspot' style='top:330px;left:488px;width:141px;height:19px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:362px;left:488px;width:141px;height:19px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:393px;left:488px;width:141px;height:19px;' onclick='u("https://montecristo.com.br/produto/PU20129-Pulseira-Paris")'></div>
			<div class='pf-hotspot' style='top:576px;left:108px;width:19px;height:11px;' onclick='u("https://montecristo.com.br/produto/PU20129-Pulseira-Paris")'></div>
			<div class='pf-hotspot' style='top:556px;left:125px;width:16px;height:11px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:540px;left:141px;width:16px;height:11px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:905px;left:429px;width:16px;height:11px;' onclick='u("https://montecristo.com.br/produto/AN31388-Anel-Nisyros")'></div>
			<div class='pf-hotspot' style='top:900px;left:452px;width:16px;height:11px;' onclick='u("https://montecristo.com.br/produto/AN2966-Anel-Samos")'></div>
			<div class='pf-hotspot' style='top:921px;left:474px;width:16px;height:11px;' onclick='u("https://montecristo.com.br/produto/AN2490-Anel-Corfu")'></div>
			<div class='pf-hotspot' style='top:29px;left:264px;width:20px;height:11px;' onclick='u("https://montecristo.com.br/produto/BR5875-Brinco-Franja")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page13.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page13_th.webp' data-page-label='t13'>
			<div class='pf-hotspot' style='top:397px;left:334px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN22854-Anel-Lucid")'></div>
			<div class='pf-hotspot' style='top:411px;left:337px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN24265-Anel-Purity-and-Love")'></div>
			<div class='pf-hotspot' style='top:426px;left:346px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN29685-Anel-Fire-Life")'></div>
			<div class='pf-hotspot' style='top:278px;left:366px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN22619-Anel-Rainbow")'></div>
			<div class='pf-hotspot' style='top:380px;left:472px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN26653-Anel-Gota-Invertida")'></div>
			<div class='pf-hotspot' style='top:506px;left:423px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN6317-Anel-Lucid-Rose")'></div>
			<div class='pf-hotspot' style='top:629px;left:413px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:748px;left:474px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AL1879F-Alianca-Arco-Iris")'></div>
			<div class='pf-hotspot' style='top:741px;left:489px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN29156a-Anel-Amsterda")'></div>
			<div class='pf-hotspot' style='top:49px;left:39px;width:138px;height:153px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:284px;left:41px;width:138px;height:161px;' onclick='u("https://montecristo.com.br/produto/AL26281-Alianca-Safira-Rosa")'></div>
			<div class='pf-hotspot' style='top:528px;left:28px;width:158px;height:147px;' onclick='u("https://montecristo.com.br/produto/AN1949F-Anel-Amsterda")'></div>
			<div class='pf-hotspot' style='top:762px;left:34px;width:144px;height:146px;' onclick='u("https://montecristo.com.br/produto/AL26280-Anel-Espessartitas")'></div>
			<div class='pf-hotspot' style='top:697px;left:222px;width:152px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN22854-Anel-Lucid")'></div>
			<div class='pf-hotspot' style='top:727px;left:222px;width:152px;height:23px;' onclick='u("https://montecristo.com.br/produto/AN24265-Anel-Purity-and-Love")'></div>
			<div class='pf-hotspot' style='top:754px;left:219px;width:152px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN29685-Anel-Fire-Life")'></div>
			<div class='pf-hotspot' style='top:783px;left:219px;width:152px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN22619-Anel-Rainbow")'></div>
			<div class='pf-hotspot' style='top:816px;left:222px;width:152px;height:23px;' onclick='u("https://montecristo.com.br/produto/AN26653-Anel-Gota-Invertida")'></div>
			<div class='pf-hotspot' style='top:852px;left:222px;width:146px;height:20px;' onclick='u("https://montecristo.com.br/produto/AN6317-Anel-Lucid-Rose")'></div>
			<div class='pf-hotspot' style='top:877px;left:222px;width:144px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:905px;left:222px;width:156px;height:28px;' onclick='u("https://montecristo.com.br/produto/AN29156a-Anel-Amsterda")'></div>
			<div class='pf-hotspot' style='top:937px;left:222px;width:156px;height:23px;' onclick='u("https://montecristo.com.br/produto/AL1879F-Alianca-Arco-Iris")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page14.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page14_th.webp' data-page-label='t14'>
			<div class='pf-hotspot' style='top:68px;left:90px;width:220px;height:151px;' onclick='u("https://montecristo.com.br/produto/BR24459-Brinco-Tanzanita")'></div>
			<div class='pf-hotspot' style='top:79px;left:335px;width:223px;height:139px;' onclick='u("https://montecristo.com.br/produto/BR29856-Brinco-Safira")'></div>
			<div class='pf-hotspot' style='top:299px;left:98px;width:180px;height:129px;' onclick='u("https://montecristo.com.br/produto/BR-MARG-07-Brinco-Margaridas")'></div>
			<div class='pf-hotspot' style='top:280px;left:344px;width:204px;height:149px;' onclick='u("https://montecristo.com.br/produto/BR-MARG-02-Brinco-Margaridas")'></div>
			<div class='pf-hotspot' style='top:517px;left:98px;width:198px;height:151px;' onclick='u("https://montecristo.com.br/produto/BR-MARG-04-Brinco-Margaridas")'></div>
			<div class='pf-hotspot' style='top:517px;left:344px;width:197px;height:144px;' onclick='u("https://montecristo.com.br/produto/BR-MARG-06-Brinco-Margaridas")'></div>
			<div class='pf-hotspot' style='top:742px;left:84px;width:198px;height:170px;' onclick='u("https://montecristo.com.br/produto/CL-BR-07-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:739px;left:344px;width:225px;height:173px;' onclick='u("https://montecristo.com.br/produto/BR-5014-Brinco-Heart")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page15.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page15_th.webp' data-page-label='t15'>
			<div class='pf-hotspot' style='top:761px;left:318px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AL1879F-Alianca-Arco-Iris")'></div>
			<div class='pf-hotspot' style='top:649px;left:493px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/AL1879F-Alianca-Arco-Iris")'></div>
			<div class='pf-hotspot' style='top:913px;left:484px;width:144px;height:18px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:940px;left:484px;width:144px;height:20px;' onclick='u("https://montecristo.com.br/produto/AN2137F-Anel-Le-Moderne")'></div>
			<div class='pf-hotspot' style='top:761px;left:318px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:649px;left:493px;width:18px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN2137F-Anel-Le-Moderne")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page16.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page16_th.webp' data-page-label='t16'>
			<div class='pf-hotspot' style='top:446px;left:295px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/PI29951-Colar-Infinito")'></div>
			<div class='pf-hotspot' style='top:419px;left:300px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/GA-PRI-01-Colar-Secret-Heart")'></div>
			<div class='pf-hotspot' style='top:596px;left:298px;width:14px;height:9px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-02-Colar-Riviera-Longa")'></div>
			<div class='pf-hotspot' style='top:883px;left:131px;width:141px;height:18px;' onclick='u("https://montecristo.com.br/produto/GA-PRI-01-Colar-Secret-Heart")'></div>
			<div class='pf-hotspot' style='top:909px;left:131px;width:141px;height:22px;' onclick='u("https://montecristo.com.br/produto/PI29951-Colar-Infinito")'></div>
			<div class='pf-hotspot' style='top:940px;left:131px;width:147px;height:17px;' onclick='u("https://montecristo.com.br/produto/BEN-GA-02-Colar-Riviera-Longa")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page17.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page17_th.webp' data-page-label='t17'>
			<div class='pf-hotspot' style='top:879px;left:40px;width:112px;height:11px;' onclick='u("https://montecristo.com.br/produto/RO-CO-33-Colar-Gota-ESmeralda")'></div>
			<div class='pf-hotspot' style='top:879px;left:183px;width:121px;height:11px;' onclick='u("https://montecristo.com.br/produto/RO-CO-31-Colar-Glamour")'></div>
			<div class='pf-hotspot' style='top:879px;left:326px;width:121px;height:11px;' onclick='u("https://montecristo.com.br/produto/RO-CO-30-Colar-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:879px;left:479px;width:121px;height:11px;' onclick='u("https://montecristo.com.br/produto/RO-CO-32-Gargantilha-Coracao-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:136px;left:224px;width:200px;height:115px;' onclick='u("https://montecristo.com.br/produto/GA26373-Colar-Ilusion")'></div>
			<div class='pf-hotspot' style='top:272px;left:337px;width:208px;height:118px;' onclick='u("https://montecristo.com.br/produto/GA30113-Colar-Fascinio")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page18.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page18_th.webp' data-page-label='t18'>
			<div class='pf-hotspot' style='top:525px;left:90px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN30859-Anel-Masculino-Stripes")'></div>
			<div class='pf-hotspot' style='top:834px;left:295px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/A17367A11L1W1-Breitling-Superocean-Automatic-44")'></div>
			<div class='pf-hotspot' style='top:872px;left:325px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:894px;left:345px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/150330-Pulseira-Rosso")'></div>
			<div class='pf-hotspot' style='top:852px;left:24px;width:131px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN30859-Anel-Masculino-Stripes")'></div>
			<div class='pf-hotspot' style='top:880px;left:24px;width:148px;height:23px;' onclick='u("https://montecristo.com.br/produto/A17367A11L1W1-Breitling-Superocean-Automatic-44")'></div>
			<div class='pf-hotspot' style='top:911px;left:24px;width:140px;height:20px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:939px;left:24px;width:131px;height:20px;' onclick='u("https://montecristo.com.br/produto/150330-Pulseira-Rosso")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page19.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page19_th.webp' data-page-label='t19'>
			<div class='pf-hotspot' style='top:56px;left:226px;width:202px;height:217px;' onclick='u("https://montecristo.com.br/produto/CO31328-Escapulario-Luminous")'></div>
			<div class='pf-hotspot' style='top:324px;left:180px;width:290px;height:186px;' onclick='u("https://montecristo.com.br/produto/PU-03-JKRE-Bracelete-Double-Knot-Prata-e-Couro-Marrom")'></div>
			<div class='pf-hotspot' style='top:592px;left:222px;width:208px;height:328px;' onclick='u("https://montecristo.com.br/produto/A17367A11L1W1-Breitling-Superocean-Automatic-44")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page20.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page20_th.webp' data-page-label='t20'>
			<div class='pf-hotspot' style='top:677px;left:251px;width:20px;height:10px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:485px;left:135px;width:20px;height:10px;' onclick='u("https://montecristo.com.br/produto/AN6888-Anel-Five-Stripes")'></div>
			<div class='pf-hotspot' style='top:701px;left:266px;width:20px;height:10px;' onclick='u("https://montecristo.com.br/produto/PU-10-IGRE-Pulseira-Rope-All-Black")'></div>
			<div class='pf-hotspot' style='top:747px;left:315px;width:17px;height:10px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Formula-1/CAZ101ACFT8024-TAG-Heuer-Formula-1")'></div>
			<div class='pf-hotspot' style='top:842px;left:127px;width:150px;height:17px;' onclick='u("https://montecristo.com.br/produto/AN6888-Anel-Five-Stripes")'></div>
			<div class='pf-hotspot' style='top:870px;left:127px;width:150px;height:20px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:899px;left:127px;width:150px;height:21px;' onclick='u("https://montecristo.com.br/produto/PU-10-IGRE-Pulseira-Rope-All-Black")'></div>
			<div class='pf-hotspot' style='top:929px;left:127px;width:150px;height:22px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Formula-1/CAZ101ACFT8024-TAG-Heuer-Formula-1")'></div>
			<div class='pf-hotspot' style='top:485px;left:135px;width:20px;height:14px;' onclick='u("https://montecristo.com.br/produto/AN6888-Anel-Five-Stripes")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page21.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page21_th.webp' data-page-label='t21'>
			<div class='pf-hotspot' style='top:786px;left:511px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Carrera/CBN2A1BBA0643-TAG-Heuer-Carrera")'></div>
			<div class='pf-hotspot' style='top:831px;left:475px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU-12-JKRE-Pulseira-Stingray-Preto")'></div>
			<div class='pf-hotspot' style='top:888px;left:431px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU29845-Pulseira-Corrente")'></div>
			<div class='pf-hotspot' style='top:122px;left:11px;width:180px;height:299px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Aquaracer/WAY201FBA0927-TAG-Heuer-Aquaracer-Calibre-7-GMT")'></div>
			<div class='pf-hotspot' style='top:550px;left:11px;width:180px;height:308px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Aquaracer/WAY201ABA0927-TAG-Heuer-Aquaracer-Calibre-5")'></div>
			<div class='pf-hotspot' style='top:883px;left:475px;width:156px;height:18px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer/Carrera/CBN2A1BBA0643-TAG-Heuer-Carrera")'></div>
			<div class='pf-hotspot' style='top:910px;left:475px;width:154px;height:20px;' onclick='u("https://montecristo.com.br/produto/PU-12-JKRE-Pulseira-Stingray-Preto")'></div>
			<div class='pf-hotspot' style='top:939px;left:475px;width:154px;height:20px;' onclick='u("https://montecristo.com.br/produto/PU29845-Pulseira-Corrente")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page22.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page22_th.webp' data-page-label='t22'>
			<div class='pf-hotspot' style='top:321px;left:229px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/A17367A11L1W1-Breitling-Superocean-Automatic-44")'></div>
			<div class='pf-hotspot' style='top:366px;left:256px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:417px;left:295px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/150330-Pulseira-Rosso")'></div>
			<div class='pf-hotspot' style='top:370px;left:24px;width:150px;height:20px;' onclick='u("https://montecristo.com.br/produto/A17367A11L1W1-Breitling-Superocean-Automatic-44")'></div>
			<div class='pf-hotspot' style='top:396px;left:24px;width:150px;height:24px;' onclick='u("https://montecristo.com.br/produto/PU-09-IGRE-Pulseira-Rope-Marrom")'></div>
			<div class='pf-hotspot' style='top:425px;left:24px;width:150px;height:24px;' onclick='u("https://montecristo.com.br/produto/150330-Pulseira-Rosso")'></div>
			<div class='pf-hotspot' style='top:566px;left:67px;width:208px;height:314px;' onclick='u("https://montecristo.com.br/produto/AB011713-Navitimer-8-Chronograph-01")'></div>
			<div class='pf-hotspot' style='top:559px;left:382px;width:210px;height:321px;' onclick='u("https://montecristo.com.br/produto/X82310D51B1S1-ENDURANCE-PRO")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page23.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page23_th.webp' data-page-label='t23'>
			<div class='pf-hotspot' style='top:365px;left:198px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/AN2004-Anel-Rho")'></div>
			<div class='pf-hotspot' style='top:615px;left:342px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:913px;left:24px;width:161px;height:19px;' onclick='u("https://montecristo.com.br/produto/AN2004-Anel-Rho")'></div>
			<div class='pf-hotspot' style='top:937px;left:24px;width:161px;height:24px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page24.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page24_th.webp' data-page-label='t24'>
			<div class='pf-hotspot' style='top:111px;left:96px;width:198px;height:338px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:111px;left:364px;width:202px;height:338px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:543px;left:324px;width:232px;height:334px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:543px;left:99px;width:184px;height:334px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page25.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page25_th.webp' data-page-label='t25'>
			<div class='pf-hotspot' style='top:391px;left:305px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU5698-Pulseira-Emerald")'></div>
			<div class='pf-hotspot' style='top:72px;left:588px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:86px;left:571px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/BR20098-Piercing-Diamantes-Luminous-Chain-White")'></div>
			<div class='pf-hotspot' style='top:105px;left:543px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/produto/BR7276-Brinco-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:411px;left:295px;width:19px;height:9px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:441px;left:289px;width:21px;height:9px;' onclick='u("https://montecristo.com.br/produto/PU30139-Pulseira-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:350px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/produto/PU5698-Pulseira-Emerald")'></div>
			<div class='pf-hotspot' style='top:378px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:411px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/produto/PU30139-Pulseira-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:439px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:469px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/produto/BR20098-Piercing-Diamantes-Luminous-Chain-White")'></div>
			<div class='pf-hotspot' style='top:499px;left:24px;width:147px;height:23px;' onclick='u("https://montecristo.com.br/produto/BR7276-Brinco-Esmeralda")'></div>
			<div class='pf-hotspot' style='top:612px;left:61px;width:157px;height:268px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:626px;left:260px;width:148px;height:255px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:614px;left:467px;width:138px;height:267px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page26.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page26_th.webp' data-page-label='t26'>
			<div class='pf-hotspot' style='top:187px;left:254px;width:144px;height:73px;' onclick='u("https://montecristo.com.br/rolex")'></div>
			<div class='pf-hotspot' style='top:435px;left:228px;width:232px;height:21px;' onclick='u("https://www.instagram.com/montecristo.joalheria/")'></div>
			<div class='pf-hotspot' style='top:464px;left:223px;width:232px;height:22px;' onclick='u("https://www.pinterest.com/mjoalheria/")'></div>
			<div class='pf-hotspot' style='top:491px;left:223px;width:232px;height:30px;' onclick='u("https://www.facebook.com/pages/Montecristo-Joalheria/378705558916382")'></div>
			<div class='pf-hotspot' style='top:559px;left:212px;width:242px;height:18px;' onclick='u("https://montecristo.com.br/")'></div>
			<div class='pf-hotspot' style='top:580px;left:116px;width:421px;height:148px;' onclick='u("https://api.whatsapp.com/send/?phone=5511964175881&text&app_absent=0")'></div>
			<div class='pf-hotspot' style='top:860px;left:61px;width:87px;height:58px;' onclick='u("https://montecristo.com.br/rolex")'></div>
			<div class='pf-hotspot' style='top:857px;left:158px;width:82px;height:61px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:857px;left:261px;width:91px;height:61px;' onclick='u("https://montecristo.com.br/relogios/Breitling")'></div>
			<div class='pf-hotspot' style='top:854px;left:367px;width:120px;height:64px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer")'></div>
			<div class='pf-hotspot' style='top:854px;left:497px;width:91px;height:64px;' onclick='u("https://montecristo.com.br/relogios/Victorinox")'></div>
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
	<script>
		var $pageflip = $('#pageflip');
		$pageflip.pageflipInit({
			PageWidth: 652,
			PageHeight: 980,
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
			ThumbnailWidth: 106,
			ThumbnailHeight: 160,
			ThumbnailsToFront: true,
			ThumbnailsAutoHide: 5000,
			ShareLink: window.location.href,
			ShareText: '',
			ShareVia: '@MaccPageFlip',
			ShareImageURL: '<?php echo $pasta ?>pageflipdata/page0.webp',
			DisableSelection: true,
			CenterSinglePage: false,
			SinglePageMode: true,
			ShowCopyright: false,
			Copyright: '©2016 pageflip-books.com',
			Key: 'HFJ0DasxtIZ/BLGvNb'
		}, "montecristo");
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