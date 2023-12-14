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
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page0.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page0_th.jpg?d=1306' data-page-label='t0'></div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page1.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page1_th.jpg?d=1306' data-page-label='t1'>
			<div class='pf-hotspot' style='top:541px;left:467px;width:122px;height:143px;' onclick='u("https://montecristo.com.br/joalheria/colares")'></div>
			<div class='pf-hotspot' style='top:883px;left:460px;width:128px;height:143px;' onclick='u("https://montecristo.com.br/produto/F1625L8-Colar-Pizza")'></div>
			<div class='pf-hotspot' style='top:1201px;left:443px;width:160px;height:154px;' onclick='u("https://montecristo.com.br/produto/CO22739-Gargantilha-Amores")'></div>
			<div class='pf-hotspot' style='top:1542px;left:475px;width:103px;height:111px;' onclick='u("https://montecristo.com.br/produto/CO8362-Colar-Coracoes")'></div>
			<div class='pf-hotspot' style='top:1303px;left:853px;width:103px;height:111px;' onclick='u("https://montecristo.com.br/produto/CO8362-Colar-Coracoes")'></div>
			<div class='pf-hotspot' style='top:1303px;left:102px;width:103px;height:111px;' onclick='u("https://montecristo.com.br/produto/CO8362-Colar-Coracoes")'></div>
			<div class='pf-hotspot' style='top:473px;left:1102px;width:35px;height:198px;' onclick='u("https://montecristo.com.br/joalheria/colares")'></div>
			<div class='pf-hotspot' style='top:875px;left:1102px;width:35px;height:198px;' onclick='u("https://montecristo.com.br/produto/F1625L8-Colar-Pizza")'></div>
			<div class='pf-hotspot' style='top:1275px;left:1102px;width:35px;height:198px;' onclick='u("https://montecristo.com.br/produto/CO22739-Gargantilha-Amores")'></div>
			<div class='pf-hotspot' style='top:1681px;left:1102px;width:35px;height:198px;' onclick='u("https://montecristo.com.br/produto/CO8362-Colar-Coracoes")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page2.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page2_th.jpg?d=1306' data-page-label='t2'>
			<div class='pf-hotspot' style='top:637px;left:369px;width:480px;height:227px;' onclick='u("https://montecristo.com.br/produto/BR1500-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:931px;left:441px;width:361px;height:170px;' onclick='u("https://montecristo.com.br/produto/CL-BR-07-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:1149px;left:503px;width:287px;height:170px;' onclick='u("https://montecristo.com.br/produto/BR5521A-Brinco-Solitario-de-Coracao")'></div>
			<div class='pf-hotspot' style='top:1353px;left:565px;width:259px;height:170px;' onclick='u("https://montecristo.com.br/produto/BR8602-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:1550px;left:629px;width:284px;height:182px;' onclick='u("https://montecristo.com.br/produto/BR2963-Brinco-Solitario-de-Coracao")'></div>
			<div class='pf-hotspot' style='top:377px;left:24px;width:25px;height:194px;' onclick='u("https://montecristo.com.br/produto/BR1500-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:740px;left:17px;width:32px;height:170px;' onclick='u("https://montecristo.com.br/produto/CL-BR-07-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:1083px;left:17px;width:32px;height:188px;' onclick='u("https://montecristo.com.br/produto/BR5521A-Brinco-Solitario-de-Coracao")'></div>
			<div class='pf-hotspot' style='top:1448px;left:17px;width:32px;height:175px;' onclick='u("https://montecristo.com.br/produto/BR8602-Brinco-Coracao")'></div>
			<div class='pf-hotspot' style='top:1779px;left:17px;width:32px;height:194px;' onclick='u("https://montecristo.com.br/produto/BR2963-Brinco-Solitario-de-Coracao")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page3.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page3_th.jpg?d=1306' data-page-label='t3'>
			<div class='pf-hotspot' style='top:757px;left:610px;width:165px;height:165px;' onclick='u("https://montecristo.com.br/joalheria/colares")'></div>
			<div class='pf-hotspot' style='top:1036px;left:601px;width:186px;height:276px;' onclick='u("https://montecristo.com.br/produto/CO7152-Colar-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1416px;left:616px;width:323px;height:370px;' onclick='u("https://montecristo.com.br/produto/AN30141-Anel-Quadrado")'></div>
			<div class='pf-hotspot' style='top:1382px;left:89px;width:478px;height:335px;' onclick='u("https://montecristo.com.br/produto/BR7276-Brinco-Diamonds")'></div>
			<div class='pf-hotspot' style='top:477px;left:1102px;width:30px;height:182px;' onclick='u("https://montecristo.com.br/joalheria/colares")'></div>
			<div class='pf-hotspot' style='top:883px;left:1102px;width:30px;height:183px;' onclick='u("https://montecristo.com.br/produto/CO7152-Colar-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1280px;left:1102px;width:32px;height:205px;' onclick='u("https://montecristo.com.br/produto/BR7276-Brinco-Diamonds")'></div>
			<div class='pf-hotspot' style='top:1685px;left:1102px;width:32px;height:188px;' onclick='u("https://montecristo.com.br/produto/AN30141-Anel-Quadrado")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page4.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page4_th.jpg?d=1306' data-page-label='t4'>
			<div class='pf-hotspot' style='top:650px;left:450px;width:384px;height:1061px;' onclick='u("https://montecristo.com.br/produto/BR25116-Brinco-Sublime")'></div>
			<div class='pf-hotspot' style='top:1774px;left:14px;width:41px;height:184px;' onclick='u("https://montecristo.com.br/produto/BR25116-Brinco-Sublime")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page5.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page5_th.jpg?d=1306' data-page-label='t5'>
			<div class='pf-hotspot' style='top:621px;left:262px;width:487px;height:138px;' onclick='u("https://montecristo.com.br/produto/AN30704-Alianca-Navete")'></div>
			<div class='pf-hotspot' style='top:857px;left:280px;width:469px;height:154px;' onclick='u("https://montecristo.com.br/produto/MA25072-Anel-Solitario-Eternity")'></div>
			<div class='pf-hotspot' style='top:1086px;left:262px;width:502px;height:138px;' onclick='u("https://montecristo.com.br/produto/AL25282-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:1303px;left:280px;width:476px;height:173px;' onclick='u("https://montecristo.com.br/produto/AN2048-Solitario-Real")'></div>
			<div class='pf-hotspot' style='top:1597px;left:280px;width:476px;height:138px;' onclick='u("https://montecristo.com.br/produto/AN2525-Meia-Alianca-Navetes")'></div>
			<div class='pf-hotspot' style='top:433px;left:1096px;width:36px;height:194px;' onclick='u("https://montecristo.com.br/produto/AN30704-Alianca-Navete")'></div>
			<div class='pf-hotspot' style='top:755px;left:1102px;width:36px;height:194px;' onclick='u("https://montecristo.com.br/produto/MA25072-Anel-Solitario-Eternity")'></div>
			<div class='pf-hotspot' style='top:1075px;left:1102px;width:36px;height:196px;' onclick='u("https://montecristo.com.br/produto/AL25282-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:1405px;left:1102px;width:36px;height:188px;' onclick='u("https://montecristo.com.br/produto/AN2048-Solitario-Real")'></div>
			<div class='pf-hotspot' style='top:1719px;left:1098px;width:43px;height:194px;' onclick='u("https://montecristo.com.br/produto/AN2525-Meia-Alianca-Navetes")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page6.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page6_th.jpg?d=1306' data-page-label='t6'>
			<div class='pf-hotspot' style='top:1021px;left:501px;width:282px;height:199px;' onclick='u("https://montecristo.com.br/produto/CO8605-Colar-Infinito")'></div>
			<div class='pf-hotspot' style='top:1314px;left:441px;width:237px;height:246px;' onclick='u("https://montecristo.com.br/produto/CO22739-Gargantilha-Amores")'></div>
			<div class='pf-hotspot' style='top:1459px;left:10px;width:52px;height:184px;' onclick='u("https://montecristo.com.br/produto/CO8605-Colar-Infinito")'></div>
			<div class='pf-hotspot' style='top:1779px;left:10px;width:52px;height:184px;' onclick='u("https://montecristo.com.br/produto/CO22739-Gargantilha-Amores")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page7.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page7_th.jpg?d=1306' data-page-label='t7'>
			<div class='pf-hotspot' style='top:492px;left:628px;width:75px;height:177px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:422px;left:247px;width:386px;height:177px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:594px;left:132px;width:160px;height:95px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:684px;left:73px;width:119px;height:95px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:774px;left:73px;width:119px;height:120px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:652px;left:537px;width:95px;height:95px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:665px;left:628px;width:200px;height:224px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:759px;left:229px;width:161px;height:167px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:860px;left:187px;width:46px;height:275px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:921px;left:277px;width:602px;height:214px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:885px;left:537px;width:342px;height:41px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:1133px;left:229px;width:273px;height:252px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:1576px;left:480px;width:359px;height:201px;' onclick='u("https://montecristo.com.br/produto/BR29537-Brinco-Graceful")'></div>
			<div class='pf-hotspot' style='top:952px;left:144px;width:48px;height:146px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:890px;left:73px;width:119px;height:36px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:921px;left:119px;width:54px;height:36px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:473px;left:1096px;width:45px;height:190px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:877px;left:1096px;width:45px;height:188px;' onclick='u("https://montecristo.com.br/produto/PU5841-Pulseira-White-Orbit")'></div>
			<div class='pf-hotspot' style='top:1280px;left:1096px;width:45px;height:188px;' onclick='u("https://montecristo.com.br/produto/PU6545-Pulseira-escrava-Single")'></div>
			<div class='pf-hotspot' style='top:1689px;left:1096px;width:45px;height:182px;' onclick='u("https://montecristo.com.br/produto/BR29537-Brinco-Graceful")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page8.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page8_th.jpg?d=1306' data-page-label='t8'>
			<div class='pf-hotspot' style='top:930px;left:642px;width:406px;height:256px;' onclick='u("https://montecristo.com.br/produto/BR8738-Brinco-Flores-Diamond")'></div>
			<div class='pf-hotspot' style='top:1557px;left:373px;width:229px;height:212px;' onclick='u("https://montecristo.com.br/produto/GA8740-Colar-Flor-Diamond")'></div>
			<div class='pf-hotspot' style='top:1452px;left:14px;width:35px;height:197px;' onclick='u("https://montecristo.com.br/produto/BR8738-Brinco-Flores-Diamond")'></div>
			<div class='pf-hotspot' style='top:1772px;left:14px;width:35px;height:186px;' onclick='u("https://montecristo.com.br/produto/GA8740-Colar-Flor-Diamond")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page9.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page9_th.jpg?d=1306' data-page-label='t9'>
			<div class='pf-hotspot' style='top:509px;left:520px;width:222px;height:135px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Flores")'></div>
			<div class='pf-hotspot' style='top:640px;left:302px;width:313px;height:135px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:770px;left:488px;width:175px;height:135px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:900px;left:582px;width:175px;height:135px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:1030px;left:680px;width:126px;height:135px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:1160px;left:738px;width:96px;height:231px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:795px;left:145px;width:233px;height:120px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:912px;left:313px;width:167px;height:120px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:1030px;left:452px;width:126px;height:120px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:1145px;left:550px;width:126px;height:125px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:1265px;left:635px;width:94px;height:203px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:957px;left:-3px;width:320px;height:192px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:1145px;left:274px;width:183px;height:154px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:1265px;left:451px;width:165px;height:154px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:1419px;left:550px;width:84px;height:172px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:1235px;left:-4px;width:282px;height:220px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1355px;left:274px;width:182px;height:220px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1495px;left:452px;width:103px;height:271px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1604px;left:550px;width:44px;height:163px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1463px;left:632px;width:84px;height:128px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:640px;left:659px;width:192px;height:135px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Flores")'></div>
			<div class='pf-hotspot' style='top:770px;left:778px;width:135px;height:135px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Flores")'></div>
			<div class='pf-hotspot' style='top:900px;left:859px;width:86px;height:400px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Flores")'></div>
			<div class='pf-hotspot' style='top:1717px;left:1096px;width:44px;height:197px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1395px;left:1096px;width:44px;height:197px;' onclick='u("https://montecristo.com.br/produto/PU6644-Pulseira-Riviera-Coracao")'></div>
			<div class='pf-hotspot' style='top:1073px;left:1096px;width:44px;height:203px;' onclick='u("https://montecristo.com.br/joalheria/pulseiras")'></div>
			<div class='pf-hotspot' style='top:748px;left:1100px;width:40px;height:203px;' onclick='u("https://montecristo.com.br/produto/SPU135-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:424px;left:1100px;width:32px;height:201px;' onclick='u("https://montecristo.com.br/produto/PU25475-Pulseira-Flores")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page10.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page10_th.jpg?d=1306' data-page-label='t10'>
			<div class='pf-hotspot' style='top:1326px;left:411px;width:284px;height:207px;' onclick='u("https://montecristo.com.br/produto/AN30678-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:522px;left:501px;width:374px;height:207px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:724px;left:789px;width:301px;height:207px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:927px;left:949px;width:141px;height:948px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:1729px;left:581px;width:373px;height:146px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:1557px;left:411px;width:175px;height:318px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:1169px;left:104px;width:312px;height:489px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
			<div class='pf-hotspot' style='top:1443px;left:19px;width:37px;height:206px;' onclick='u("https://montecristo.com.br/produto/AN30678-Alianca-Diamond")'></div>
			<div class='pf-hotspot' style='top:1772px;left:19px;width:37px;height:206px;' onclick='u("https://montecristo.com.br/produto/GA8652-Colar-Speciale")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page11.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page11_th.jpg?d=1306' data-page-label='t11'>
			<div class='pf-hotspot' style='top:1085px;left:465px;width:227px;height:246px;' onclick='u("https://montecristo.com.br/produto/CO630-Escapulario-Prata")'></div>
			<div class='pf-hotspot' style='top:659px;left:618px;width:239px;height:246px;' onclick='u("https://montecristo.com.br/produto/CO630-Escapulario-Prata")'></div>
			<div class='pf-hotspot' style='top:1458px;left:305px;width:201px;height:188px;' onclick='u("https://montecristo.com.br/produto/ESC-CO-01-Escapulario-Prata")'></div>
			<div class='pf-hotspot' style='top:1713px;left:507px;width:201px;height:188px;' onclick='u("https://montecristo.com.br/produto/ESC-CO-01-Escapulario-Prata")'></div>
			<div class='pf-hotspot' style='top:1414px;left:1096px;width:43px;height:165px;' onclick='u("https://montecristo.com.br/produto/CO630-Escapulario-Prata")'></div>
			<div class='pf-hotspot' style='top:1745px;left:1096px;width:43px;height:165px;' onclick='u("https://montecristo.com.br/produto/ESC-CO-01-Escapulario-Prata")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page12.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page12_th.jpg?d=1306' data-page-label='t12'>
			<div class='pf-hotspot' style='top:292px;left:104px;width:532px;height:374px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:784px;left:878px;width:276px;height:224px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:582px;left:614px;width:175px;height:246px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:691px;left:104px;width:515px;height:216px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1038px;left:878px;width:276px;height:224px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:823px;left:608px;width:276px;height:286px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1395px;left:330px;width:574px;height:553px;' onclick='u("https://montecristo.com.br/produto/ALMS2BN-Alianca-Infinity-Love-Double")'></div>
			<div class='pf-hotspot' style='top:699px;left:784px;width:99px;height:128px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:476px;left:8px;width:56px;height:197px;' onclick='u("https://montecristo.com.br/joalheria/joias-masculinas")'></div>
			<div class='pf-hotspot' style='top:878px;left:8px;width:47px;height:205px;' onclick='u("https://montecristo.com.br/produto/PU30674-Pulseira-Geracion")'></div>
			<div class='pf-hotspot' style='top:1294px;left:8px;width:56px;height:197px;' onclick='u("https://montecristo.com.br/produto/ALMS2BN-Alianca-Infinity-Love-Double")'></div>
			<div class='pf-hotspot' style='top:1693px;left:8px;width:56px;height:192px;' onclick='u("https://montecristo.com.br/produto/ALMS2BN-Alianca-Infinity-Love-Double")'></div>
		</div>
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page13.jpg?d=1306' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page13_th.jpg?d=1306' data-page-label='t13'>
			<div class='pf-hotspot' style='top:1273px;left:396px;width:359px;height:38px;' onclick='u("https://montecristo.com.br/")'></div>
			<div class='pf-hotspot' style='top:1393px;left:366px;width:460px;height:38px;' onclick='u("https://api.whatsapp.com/send/?phone=5511964175881&text&app_absent=0")'></div>
			<div class='pf-hotspot' style='top:1824px;left:34px;width:460px;height:118px;' onclick='u("https://montecristo.com.br/lojas#Shopping-Iguatemi-SP")'></div>
			<div class='pf-hotspot' style='top:1824px;left:534px;width:538px;height:118px;' onclick='u("https://montecristo.com.br/lojas#Shopping-JK-Iguatemi")'></div>
			<div class='pf-hotspot' style='top:194px;left:370px;width:411px;height:60px;' onclick='u("https://montecristo.com.br/")'></div>
			<div class='pf-hotspot' style='top:448px;left:209px;width:124px;height:85px;' onclick='u("https://montecristo.com.br/rolex")'></div>
			<div class='pf-hotspot' style='top:469px;left:470px;width:165px;height:57px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:453px;left:760px;width:184px;height:88px;' onclick='u("https://montecristo.com.br/relogios/Breitling")'></div>
			<div class='pf-hotspot' style='top:625px;left:716px;width:159px;height:73px;' onclick='u("https://montecristo.com.br/relogios/Victorinox")'></div>
			<div class='pf-hotspot' style='top:649px;left:314px;width:264px;height:47px;' onclick='u("https://montecristo.com.br/relogios/tag-heuer")'></div>
			<div class='pf-hotspot' style='top:1145px;left:53px;width:348px;height:42px;' onclick='u("https://www.instagram.com/montecristo.joalheria/")'></div>
			<div class='pf-hotspot' style='top:1142px;left:429px;width:326px;height:42px;' onclick='u("https://www.facebook.com/montecristojoalheria/")'></div>
			<div class='pf-hotspot' style='top:1145px;left:768px;width:336px;height:36px;' onclick='u("https://www.linkedin.com/company/montecristojoalheria/")'></div>
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
			PageWidth: 1152,
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
			ThumbnailWidth: 90,
			ThumbnailHeight: 160,
			ThumbnailsToFront: true,
			ThumbnailsAutoHide: 5000,
			ShareLink: window.location.href,
			ShareText: 'PDF to flipbook converter https://pageflip-books.com',
			ShareVia: '@MaccPageFlip',
			ShareImageURL: '<?php echo $pasta ?>pageflipdata/page0.jpg?d=1306',
			DisableSelection: true,
			CenterSinglePage: false,
			SinglePageMode: true,
			ShowCopyright: false,
			Copyright: '©2016 pageflip-books.com',
			Key: 'lSOkXrxSNZ3jV1LQMc'
		}, "bluediamond");
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
	<div class="pageflip-credits">Powered by <a href="http://pageflip-books.com" target="_blank">Pageflip 5</a></div>
</section>
<?php require_once 'footer.php' ?>