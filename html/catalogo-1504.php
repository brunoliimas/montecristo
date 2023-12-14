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
			<div class='pf-hotspot' style='top:85px;left:-3px;width:283px;height:419px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:204px;left:361px;width:117px;height:114px;' onclick='u("https://montecristo.com.br/produto/BR30602-Brinco-Diamonds")'></div>
			<div class='pf-hotspot' style='top:225px;left:515px;width:117px;height:102px;' onclick='u("https://montecristo.com.br/produto/AN26998-Anel-Power")'></div>
			<div class='pf-hotspot' style='top:344px;left:315px;width:120px;height:254px;' onclick='u("https://montecristo.com.br/produto/BR30147-Brinco-Orquidea")'></div>
			<div class='pf-hotspot' style='top:572px;left:575px;width:145px;height:94px;' onclick='u("https://montecristo.com.br/produto/BR29152-Brinco-Charm")'></div>
			<div class='pf-hotspot' style='top:551px;left:633px;width:84px;height:25px;' onclick='u("https://montecristo.com.br/produto/BR29152-Brinco-Charm")'></div>
			<div class='pf-hotspot' style='top:697px;left:520px;width:82px;height:108px;' onclick='u("https://montecristo.com.br/produto/AN22902-Anel-Queen")'></div>
			<div class='pf-hotspot' style='top:702px;left:397px;width:75px;height:62px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:759px;left:406px;width:66px;height:58px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:844px;left:198px;width:102px;height:67px;' onclick='u("https://montecristo.com.br/produto/BR24458-Brinco-Hollow-Heart")'></div>
			<div class='pf-hotspot' style='top:697px;left:193px;width:107px;height:100px;' onclick='u("https://montecristo.com.br/produto/AN24577-Anel-Constellation")'></div>
			<div class='pf-hotspot' style='top:662px;left:328px;width:66px;height:143px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:600px;left:358px;width:139px;height:67px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:548px;left:455px;width:121px;height:58px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:521px;left:571px;width:67px;height:50px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:426px;left:633px;width:107px;height:114px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page2.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page2_th.webp' data-page-label='t2'>
			<div class='pf-hotspot' style='top:369px;left:167px;width:163px;height:25px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:411px;left:167px;width:163px;height:25px;' onclick='u("https://montecristo.com.br/produto/BR30602-Brinco-Diamonds")'></div>
			<div class='pf-hotspot' style='top:453px;left:167px;width:163px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN26998-Anel-Power")'></div>
			<div class='pf-hotspot' style='top:498px;left:167px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/produto/BR30147-Brinco-Orquidea")'></div>
			<div class='pf-hotspot' style='top:540px;left:167px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/produto/AN24577-Anel-Constellation")'></div>
			<div class='pf-hotspot' style='top:579px;left:167px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:369px;left:484px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/produto/BR29152-Brinco-Charm")'></div>
			<div class='pf-hotspot' style='top:410px;left:484px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/produto/BR24458-Brinco-Hollow-Heart")'></div>
			<div class='pf-hotspot' style='top:452px;left:484px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:495px;left:484px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:537px;left:484px;width:170px;height:26px;' onclick='u("https://montecristo.com.br/produto/AN22902-Anel-Queen")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page3.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page3_th.webp' data-page-label='t3'>
			<div class='pf-hotspot' style='top:219px;left:56px;width:70px;height:73px;' onclick='u("https://montecristo.com.br/produto/AN22254-Anel-Esmerald")'></div>
			<div class='pf-hotspot' style='top:65px;left:196px;width:104px;height:146px;' onclick='u("https://montecristo.com.br/produto/BR-MOR-01-Brinco-Oval-Charm")'></div>
			<div class='pf-hotspot' style='top:181px;left:335px;width:88px;height:146px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:141px;left:418px;width:50px;height:94px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:96px;left:462px;width:50px;height:94px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:54px;left:507px;width:45px;height:86px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:-3px;left:546px;width:50px;height:99px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:-3px;left:591px;width:40px;height:48px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:198px;left:480px;width:70px;height:73px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:164px;left:518px;width:70px;height:39px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:130px;left:550px;width:63px;height:39px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:96px;left:575px;width:63px;height:39px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:70px;left:604px;width:70px;height:31px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:-3px;left:633px;width:104px;height:79px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:230px;left:568px;width:82px;height:92px;' onclick='u("https://montecristo.com.br/produto/AN2499-Deep-Green")'></div>
			<div class='pf-hotspot' style='top:311px;left:661px;width:31px;height:128px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:364px;left:686px;width:17px;height:75px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:388px;left:698px;width:23px;height:60px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:410px;left:715px;width:17px;height:62px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:442px;left:727px;width:25px;height:48px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:460px;left:746px;width:14px;height:59px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:478px;left:755px;width:17px;height:36px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:311px;left:686px;width:26px;height:59px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:349px;left:698px;width:29px;height:44px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:375px;left:715px;width:31px;height:40px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:399px;left:728px;width:32px;height:49px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:420px;left:751px;width:31px;height:46px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:449px;left:755px;width:35px;height:34px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:460px;left:770px;width:40px;height:38px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:359px;left:174px;width:109px;height:79px;' onclick='u("https://montecristo.com.br/produto/BR30152-Brinco-Emerald")'></div>
			<div class='pf-hotspot' style='top:832px;left:50px;width:109px;height:109px;' onclick='u("https://montecristo.com.br/produto/BR2526-Brinco-Prncess")'></div>
			<div class='pf-hotspot' style='top:832px;left:403px;width:72px;height:78px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:704px;left:382px;width:83px;height:78px;' onclick='u("https://montecristo.com.br/produto/AN5672-Anel-Verita-Garden")'></div>
			<div class='pf-hotspot' style='top:736px;left:512px;width:120px;height:174px;' onclick='u("https://montecristo.com.br/produto/BR5522-Brinco-Queen")'></div>
			<div class='pf-hotspot' style='top:664px;left:485px;width:112px;height:185px;' onclick='u("https://montecristo.com.br/produto/BR5522-Brinco-Queen")'></div>
			<div class='pf-hotspot' style='top:564px;left:345px;width:65px;height:99px;' onclick='u("https://montecristo.com.br/produto/F1109L4-Anel-Green-Love-Garden")'></div>
			<div class='pf-hotspot' style='top:597px;left:109px;width:139px;height:185px;' onclick='u("https://montecristo.com.br/produto/CO30102-Gargantilha-Emerald")'></div>
			<div class='pf-hotspot' style='top:485px;left:18px;width:161px;height:118px;' onclick='u("https://montecristo.com.br/produto/CO30102-Gargantilha-Emerald")'></div>
			<div class='pf-hotspot' style='top:319px;left:-3px;width:129px;height:174px;' onclick='u("https://montecristo.com.br/produto/CO30102-Gargantilha-Emerald")'></div>
			<div class='pf-hotspot' style='top:399px;left:401px;width:26px;height:79px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:393px;left:421px;width:44px;height:76px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page4.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page4_th.webp' data-page-label='t4'>
			<div class='pf-hotspot' style='top:330px;left:157px;width:165px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN22254-Anel-Esmerald")'></div>
			<div class='pf-hotspot' style='top:369px;left:157px;width:165px;height:30px;' onclick='u("https://montecristo.com.br/produto/BR-MOR-01-Brinco-Oval-Charm")'></div>
			<div class='pf-hotspot' style='top:410px;left:157px;width:165px;height:34px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:449px;left:157px;width:319px;height:41px;' onclick='u("https://montecristo.com.br/joalheria/Pingentes")'></div>
			<div class='pf-hotspot' style='top:493px;left:157px;width:162px;height:36px;' onclick='u("https://montecristo.com.br/produto/AN2499-Deep-Green")'></div>
			<div class='pf-hotspot' style='top:536px;left:157px;width:162px;height:33px;' onclick='u("https://montecristo.com.br/produto/BR30152-Brinco-Emerald")'></div>
			<div class='pf-hotspot' style='top:581px;left:157px;width:165px;height:34px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:623px;left:157px;width:165px;height:39px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:330px;left:491px;width:165px;height:30px;' onclick='u("https://montecristo.com.br/joalheria/Pulseiras")'></div>
			<div class='pf-hotspot' style='top:364px;left:491px;width:175px;height:38px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-03-Pulseira")'></div>
			<div class='pf-hotspot' style='top:403px;left:491px;width:175px;height:41px;' onclick='u("https://montecristo.com.br/produto/CO30102-Gargantilha-Emerald")'></div>
			<div class='pf-hotspot' style='top:449px;left:491px;width:175px;height:41px;' onclick='u("https://montecristo.com.br/produto/F1109L4-Anel-Green-Love-Garden")'></div>
			<div class='pf-hotspot' style='top:493px;left:491px;width:175px;height:41px;' onclick='u("https://montecristo.com.br/produto/BR2526-Brinco-Prncess")'></div>
			<div class='pf-hotspot' style='top:541px;left:491px;width:175px;height:33px;' onclick='u("https://montecristo.com.br/produto/AN5672-Anel-Verita-Garden")'></div>
			<div class='pf-hotspot' style='top:581px;left:491px;width:175px;height:34px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:623px;left:491px;width:175px;height:46px;' onclick='u("https://montecristo.com.br/produto/BR5522-Brinco-Queen")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page5.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page5_th.webp' data-page-label='t5'>
			<div class='pf-hotspot' style='top:201px;left:176px;width:121px;height:104px;' onclick='u("https://montecristo.com.br/produto/BR-5014-Brinco-Heart")'></div>
			<div class='pf-hotspot' style='top:321px;left:255px;width:110px;height:145px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-05-Pulseira")'></div>
			<div class='pf-hotspot' style='top:347px;left:386px;width:100px;height:71px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:419px;left:488px;width:135px;height:165px;' onclick='u("https://montecristo.com.br/produto/BR5879-Brinco-Passion-Rubi")'></div>
			<div class='pf-hotspot' style='top:522px;left:373px;width:100px;height:114px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:656px;left:-3px;width:497px;height:125px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-07-Pulseira-Real-Expression")'></div>
			<div class='pf-hotspot' style='top:811px;left:224px;width:478px;height:139px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-06-Pulseira-Princess-Expression")'></div>
			<div class='pf-hotspot' style='top:756px;left:656px;width:83px;height:60px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-06-Pulseira-Princess-Expression")'></div>
			<div class='pf-hotspot' style='top:251px;left:-3px;width:145px;height:243px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:380px;left:122px;width:91px;height:183px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:477px;left:191px;width:91px;height:141px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:577px;left:88px;width:73px;height:60px;' onclick='u("https://montecristo.com.br/produto/AN6327-Anel-Red-Sea")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page6.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page6_th.webp' data-page-label='t6'>
			<div class='pf-hotspot' style='top:396px;left:183px;width:161px;height:28px;' onclick='u("https://montecristo.com.br/produto/BR-5014-Brinco-Heart")'></div>
			<div class='pf-hotspot' style='top:432px;left:183px;width:161px;height:34px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-05-Pulseira")'></div>
			<div class='pf-hotspot' style='top:472px;left:183px;width:163px;height:34px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:516px;left:183px;width:163px;height:34px;' onclick='u("https://montecristo.com.br/produto/CO28250-Gargantilha-Flamboiement")'></div>
			<div class='pf-hotspot' style='top:562px;left:183px;width:163px;height:39px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:396px;left:472px;width:163px;height:28px;' onclick='u("https://montecristo.com.br/produto/BR5879-Brinco-Passion-Rubi")'></div>
			<div class='pf-hotspot' style='top:432px;left:472px;width:163px;height:34px;' onclick='u("https://montecristo.com.br/produto/AN6327-Anel-Red-Sea")'></div>
			<div class='pf-hotspot' style='top:477px;left:472px;width:163px;height:28px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-07-Pulseira-Real-Expression")'></div>
			<div class='pf-hotspot' style='top:516px;left:472px;width:163px;height:39px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-06-Pulseira-Princess-Expression")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page7.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page7_th.webp' data-page-label='t7'>
			<div class='pf-hotspot' style='top:32px;left:177px;width:109px;height:92px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:142px;left:177px;width:223px;height:157px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:156px;left:394px;width:30px;height:117px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:156px;left:419px;width:30px;height:88px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:142px;left:444px;width:41px;height:66px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:25px;left:480px;width:30px;height:150px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:-3px;left:504px;width:93px;height:68px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:119px;left:202px;width:134px;height:29px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:-9px;left:282px;width:54px;height:133px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:267px;left:407px;width:72px;height:54px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:238px;left:431px;width:72px;height:35px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:203px;left:456px;width:78px;height:41px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:170px;left:485px;width:79px;height:38px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:104px;left:512px;width:109px;height:74px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:59px;left:568px;width:93px;height:50px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:-3px;left:599px;width:126px;height:68px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:267px;left:528px;width:153px;height:197px;' onclick='u("https://montecristo.com.br/produto/BR30605-Brinco-Diamond")'></div>
			<div class='pf-hotspot' style='top:459px;left:528px;width:126px;height:162px;' onclick='u("https://montecristo.com.br/produto/BR30605-Brinco-Diamond")'></div>
			<div class='pf-hotspot' style='top:676px;left:512px;width:83px;height:73px;' onclick='u("https://montecristo.com.br/produto/AN5406-Anel-Vehemence")'></div>
			<div class='pf-hotspot' style='top:414px;left:349px;width:94px;height:84px;' onclick='u("https://montecristo.com.br/produto/AN6195-Anel-Extreme-Bright")'></div>
			<div class='pf-hotspot' style='top:596px;left:220px;width:38px;height:21px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:595px;left:254px;width:14px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:596px;left:251px;width:14px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:588px;left:264px;width:12px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:579px;left:270px;width:13px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:568px;left:277px;width:10px;height:18px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:565px;left:22px;width:117px;height:88px;' onclick='u("https://montecristo.com.br/produto/BR22318-Brinco-Hollow-Heart-Gold")'></div>
			<div class='pf-hotspot' style='top:889px;left:64px;width:28px;height:29px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:878px;left:86px;width:35px;height:29px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:860px;left:98px;width:40px;height:23px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:855px;left:43px;width:38px;height:39px;' onclick='u("https://montecristo.com.br/produto/AN21910-Anel-Solitarie")'></div>
			<div class='pf-hotspot' style='top:855px;left:75px;width:17px;height:33px;' onclick='u("https://montecristo.com.br/produto/AN21910-Anel-Solitarie")'></div>
			<div class='pf-hotspot' style='top:850px;left:86px;width:18px;height:33px;' onclick='u("https://montecristo.com.br/produto/AN21910-Anel-Solitarie")'></div>
			<div class='pf-hotspot' style='top:849px;left:97px;width:15px;height:17px;' onclick='u("https://montecristo.com.br/produto/AN21910-Anel-Solitarie")'></div>
			<div class='pf-hotspot' style='top:692px;left:176px;width:59px;height:63px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:710px;left:229px;width:54px;height:66px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:732px;left:277px;width:41px;height:63px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:755px;left:313px;width:47px;height:73px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:785px;left:355px;width:55px;height:84px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:818px;left:404px;width:282px;height:94px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:664px;left:224px;width:47px;height:33px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:683px;left:254px;width:47px;height:32px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:696px;left:286px;width:40px;height:38px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:712px;left:317px;width:72px;height:43px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:738px;left:365px;width:83px;height:50px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:761px;left:434px;width:174px;height:50px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:705px;left:602px;width:159px;height:94px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:253px;left:-3px;width:152px;height:99px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:346px;left:-3px;width:59px;height:105px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:346px;left:50px;width:47px;height:86px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:346px;left:92px;width:44px;height:41px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:437px;left:62px;width:55px;height:59px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:388px;left:92px;width:46px;height:54px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:357px;left:133px;width:28px;height:44px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:341px;left:144px;width:28px;height:21px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:299px;left:150px;width:35px;height:47px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:615px;left:245px;width:18px;height:25px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:610px;left:256px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:606px;left:264px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:602px;left:269px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:594px;left:271px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:588px;left:277px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:583px;left:277px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:578px;left:282px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:572px;left:285px;width:17px;height:12px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page8.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page8_th.webp' data-page-label='t8'>
			<div class='pf-hotspot' style='top:330px;left:149px;width:165px;height:26px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:363px;left:149px;width:174px;height:38px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:409px;left:149px;width:165px;height:34px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:453px;left:149px;width:165px;height:32px;' onclick='u("https://montecristo.com.br/produto/BR30605-Brinco-Diamond")'></div>
			<div class='pf-hotspot' style='top:493px;left:149px;width:180px;height:38px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:538px;left:149px;width:165px;height:33px;' onclick='u("https://montecristo.com.br/produto/PU6638-Pulseira-Ouro-Amarelo")'></div>
			<div class='pf-hotspot' style='top:583px;left:149px;width:165px;height:33px;' onclick='u("https://montecristo.com.br/produto/BR22318-Brinco-Hollow-Heart-Gold")'></div>
			<div class='pf-hotspot' style='top:623px;left:149px;width:165px;height:41px;' onclick='u("https://montecristo.com.br/produto/AN5406-Anel-Vehemence")'></div>
			<div class='pf-hotspot' style='top:330px;left:419px;width:165px;height:26px;' onclick='u("https://montecristo.com.br/produto/PU30103-Pulseira-Power")'></div>
			<div class='pf-hotspot' style='top:363px;left:419px;width:174px;height:38px;' onclick='u("https://montecristo.com.br/produto/PU30361-Pulseira-Diamond")'></div>
			<div class='pf-hotspot' style='top:409px;left:419px;width:174px;height:34px;' onclick='u("https://montecristo.com.br/produto/AN21910-Anel-Solitarie")'></div>
			<div class='pf-hotspot' style='top:453px;left:419px;width:174px;height:32px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:497px;left:419px;width:165px;height:29px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:538px;left:419px;width:165px;height:33px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:583px;left:419px;width:250px;height:39px;' onclick='u("https://montecristo.com.br/produto/AN6195-Anel-Extreme-Bright")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page9.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page9_th.webp' data-page-label='t9'>
			<div class='pf-hotspot' style='top:369px;left:220px;width:83px;height:79px;' onclick='u("https://montecristo.com.br/produto/AN-50-PAT-Anel-Agathonisi")'></div>
			<div class='pf-hotspot' style='top:207px;left:494px;width:112px;height:120px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:695px;left:19px;width:140px;height:77px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:702px;left:322px;width:105px;height:88px;' onclick='u("https://montecristo.com.br/produto/BR5526-3-Brinco-Princess")'></div>
			<div class='pf-hotspot' style='top:844px;left:385px;width:83px;height:65px;' onclick='u("https://montecristo.com.br/produto/AN6196-Anel-Pleotanz")'></div>
			<div class='pf-hotspot' style='top:911px;left:365px;width:214px;height:73px;' onclick='u("https://montecristo.com.br/produto/PU22724-Pulseira-Shiny-With-Drop")'></div>
			<div class='pf-hotspot' style='top:884px;left:573px;width:45px;height:100px;' onclick='u("https://montecristo.com.br/produto/PU22724-Pulseira-Shiny-With-Drop")'></div>
			<div class='pf-hotspot' style='top:884px;left:191px;width:178px;height:100px;' onclick='u("https://montecristo.com.br/produto/PU22724-Pulseira-Shiny-With-Drop")'></div>
			<div class='pf-hotspot' style='top:585px;left:191px;width:63px;height:81px;' onclick='u("https://montecristo.com.br/produto/F1809L05-Anel-Drop")'></div>
			<div class='pf-hotspot' style='top:560px;left:119px;width:77px;height:70px;' onclick='u("https://montecristo.com.br/produto/AN5323-Anel-Dusk")'></div>
			<div class='pf-hotspot' style='top:466px;left:388px;width:112px;height:130px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:395px;left:494px;width:66px;height:110px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:333px;left:555px;width:63px;height:120px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:290px;left:613px;width:72px;height:110px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:228px;left:680px;width:63px;height:110px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:175px;left:738px;width:56px;height:110px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:155px;left:788px;width:33px;height:88px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:543px;left:499px;width:67px;height:77px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:480px;left:561px;width:83px;height:110px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:448px;left:604px;width:91px;height:94px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:401px;left:646px;width:100px;height:52px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:355px;left:686px;width:108px;height:52px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:333px;left:731px;width:86px;height:28px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:280px;left:751px;width:70px;height:58px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:266px;left:797px;width:24px;height:20px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:238px;left:51px;width:145px;height:259px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-04-Pulseira-Fusion")'></div>
			<div class='pf-hotspot' style='top:472px;left:174px;width:107px;height:88px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-04-Pulseira-Fusion")'></div>
			<div class='pf-hotspot' style='top:536px;left:249px;width:83px;height:60px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-04-Pulseira-Fusion")'></div>
			<div class='pf-hotspot' style='top:578px;left:303px;width:67px;height:120px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-04-Pulseira-Fusion")'></div>
			<div class='pf-hotspot' style='top:591px;left:564px;width:81px;height:75px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page10.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page10_th.webp' data-page-label='t10'>
			<div class='pf-hotspot' style='top:155px;left:-26px;width:33px;height:88px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:280px;left:-63px;width:70px;height:58px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:266px;left:-18px;width:24px;height:20px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:369px;left:159px;width:168px;height:38px;' onclick='u("https://montecristo.com.br/produto/PU-PRI-04-Pulseira-Fusion")'></div>
			<div class='pf-hotspot' style='top:411px;left:159px;width:150px;height:42px;' onclick='u("https://montecristo.com.br/produto/AN-50-PAT-Anel-Agathonisi")'></div>
			<div class='pf-hotspot' style='top:457px;left:159px;width:168px;height:40px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:500px;left:159px;width:319px;height:41px;' onclick='u("https://montecristo.com.br/produto/PI5834-Pingente-Princess")'></div>
			<div class='pf-hotspot' style='top:543px;left:159px;width:162px;height:38px;' onclick='u("https://montecristo.com.br/joalheria/Colares")'></div>
			<div class='pf-hotspot' style='top:591px;left:159px;width:168px;height:38px;' onclick='u("https://montecristo.com.br/joalheria/AnEis")'></div>
			<div class='pf-hotspot' style='top:369px;left:487px;width:168px;height:42px;' onclick='u("https://montecristo.com.br/produto/AN5323-Anel-Dusk")'></div>
			<div class='pf-hotspot' style='top:411px;left:487px;width:150px;height:42px;' onclick='u("https://montecristo.com.br/produto/F1809L05-Anel-Drop")'></div>
			<div class='pf-hotspot' style='top:457px;left:487px;width:168px;height:36px;' onclick='u("https://montecristo.com.br/joalheria/Brincos")'></div>
			<div class='pf-hotspot' style='top:500px;left:487px;width:173px;height:41px;' onclick='u("https://montecristo.com.br/produto/BR5526-3-Brinco-Princess")'></div>
			<div class='pf-hotspot' style='top:543px;left:487px;width:178px;height:38px;' onclick='u("https://montecristo.com.br/produto/AN6196-Anel-Pleotanz")'></div>
			<div class='pf-hotspot' style='top:585px;left:487px;width:168px;height:43px;' onclick='u("https://montecristo.com.br/produto/PU22724-Pulseira-Shiny-With-Drop")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page11.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page11_th.webp' data-page-label='t11'>
			<div class='pf-hotspot' style='top:594px;left:161px;width:199px;height:131px;' onclick='u("https://montecristo.com.br/produto/BR5103-Brinco-Carre")'></div>
			<div class='pf-hotspot' style='top:554px;left:482px;width:189px;height:154px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:488px;left:619px;width:86px;height:72px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:451px;left:659px;width:63px;height:42px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:432px;left:691px;width:40px;height:24px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:373px;left:712px;width:40px;height:65px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:499px;left:666px;width:151px;height:112px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:325px;left:596px;width:29px;height:154px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:427px;left:619px;width:17px;height:52px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:325px;left:625px;width:89px;height:102px;' onclick='u("https://montecristo.com.br/produto/AN5323-Anel-Dusk")'></div>
			<div class='pf-hotspot' style='top:189px;left:589px;width:115px;height:24px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:246px;left:589px;width:101px;height:42px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:199px;left:678px;width:30px;height:24px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:222px;left:694px;width:23px;height:24px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:246px;left:694px;width:41px;height:24px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:478px;left:23px;width:41px;height:127px;' onclick='u("https://montecristo.com.br/produto/AN20976-Anel-Rainbow")'></div>
			<div class='pf-hotspot' style='top:460px;left:59px;width:86px;height:157px;' onclick='u("https://montecristo.com.br/produto/AN24265-Anel-Purity-and-Love")'></div>
			<div class='pf-hotspot' style='top:450px;left:239px;width:133px;height:140px;' onclick='u("https://montecristo.com.br/produto/PI5955-Colar-Olympia")'></div>
			<div class='pf-hotspot' style='top:357px;left:158px;width:133px;height:140px;' onclick='u("https://montecristo.com.br/produto/PI5955-Colar-Olympia")'></div>
			<div class='pf-hotspot' style='top:292px;left:95px;width:133px;height:140px;' onclick='u("https://montecristo.com.br/produto/PI5955-Colar-Olympia")'></div>
			<div class='pf-hotspot' style='top:0px;left:60px;width:133px;height:385px;' onclick='u("https://montecristo.com.br/produto/PI5955-Colar-Olympia")'></div>
			<div class='pf-hotspot' style='top:65px;left:428px;width:136px;height:485px;' onclick='u("https://montecristo.com.br/produto/CO24460-Colar-Drop-Abundance")'></div>
			<div class='pf-hotspot' style='top:65px;left:559px;width:65px;height:100px;' onclick='u("https://montecristo.com.br/produto/CO24460-Colar-Drop-Abundance")'></div>
			<div class='pf-hotspot' style='top:65px;left:393px;width:40px;height:310px;' onclick='u("https://montecristo.com.br/produto/CO24460-Colar-Drop-Abundance")'></div>
			<div class='pf-hotspot' style='top:65px;left:366px;width:33px;height:118px;' onclick='u("https://montecristo.com.br/produto/CO24460-Colar-Drop-Abundance")'></div>
			<div class='pf-hotspot' style='top:178px;left:232px;width:91px;height:59px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:163px;left:317px;width:50px;height:59px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:232px;left:274px;width:97px;height:42px;' onclick='u("https://montecristo.com.br/produto/AN6327-Anel-Red-Sea")'></div>
			<div class='pf-hotspot' style='top:217px;left:320px;width:51px;height:20px;' onclick='u("https://montecristo.com.br/produto/AN6327-Anel-Red-Sea")'></div>
			<div class='pf-hotspot' style='top:285px;left:574px;width:125px;height:33px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:232px;left:574px;width:21px;height:53px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:212px;left:596px;width:88px;height:28px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:222px;left:678px;width:18px;height:26px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:285px;left:694px;width:23px;height:20px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
		</div>
		<div class='page' data-background-file='<?php echo $pasta ?>pageflipdata/page12.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page12_th.webp' data-page-label='t12'>
			<div class='pf-hotspot' style='top:373px;left:191px;width:154px;height:23px;' onclick='u("https://montecristo.com.br/produto/AN20976-Anel-Rainbow")'></div>
			<div class='pf-hotspot' style='top:402px;left:191px;width:154px;height:44px;' onclick='u("https://montecristo.com.br/produto/AN24265-Anel-Purity-and-Love")'></div>
			<div class='pf-hotspot' style='top:450px;left:191px;width:168px;height:34px;' onclick='u("https://montecristo.com.br/produto/BR5103-Brinco-Carre")'></div>
			<div class='pf-hotspot' style='top:491px;left:191px;width:154px;height:40px;' onclick='u("https://montecristo.com.br/produto/CO24036-Colar-Drop-Sky-Serene")'></div>
			<div class='pf-hotspot' style='top:533px;left:191px;width:168px;height:40px;' onclick='u("https://montecristo.com.br/produto/PI5955-Colar-Olympia")'></div>
			<div class='pf-hotspot' style='top:578px;left:191px;width:154px;height:38px;' onclick='u("https://montecristo.com.br/produto/CO24460-Colar-Drop-Abundance")'></div>
			<div class='pf-hotspot' style='top:373px;left:456px;width:151px;height:23px;' onclick='u("https://montecristo.com.br/produto/AN4170-Alianca-Jazz-White")'></div>
			<div class='pf-hotspot' style='top:402px;left:456px;width:168px;height:44px;' onclick='u("https://montecristo.com.br/produto/AN6327-Anel-Red-Sea")'></div>
			<div class='pf-hotspot' style='top:450px;left:456px;width:151px;height:38px;' onclick='u("https://montecristo.com.br/produto/AN24256-Anel-Gummy-Bears-White")'></div>
			<div class='pf-hotspot' style='top:491px;left:456px;width:160px;height:35px;' onclick='u("https://montecristo.com.br/produto/AN24260-Anel-Gummy-Bears")'></div>
			<div class='pf-hotspot' style='top:535px;left:456px;width:160px;height:38px;' onclick='u("https://montecristo.com.br/produto/AN6021-Alianca-Jazz")'></div>
			<div class='pf-hotspot' style='top:578px;left:456px;width:168px;height:38px;' onclick='u("https://montecristo.com.br/produto/AN5323-Anel-Dusk")'></div>
		</div>
		<div class='cover' data-background-file='<?php echo $pasta ?>pageflipdata/page13.webp' data-thumbnail-image='<?php echo $pasta ?>pageflipdata/page13_th.webp' data-page-label='t13'>
			<div class='pf-hotspot' style='top:793px;left:371px;width:298px;height:68px;' onclick='u("https://montecristo.com.br/lojas#Shopping-JK-Iguatemi")'></div>
			<div class='pf-hotspot' style='top:855px;left:371px;width:298px;height:68px;' onclick='u("https://montecristo.com.br/lojas#Shopping-Iguatemi-SP")'></div>
			<div class='pf-hotspot' style='top:722px;left:399px;width:228px;height:31px;' onclick='u("https://montecristo.com.br/")'></div>
			<div class='pf-hotspot' style='top:631px;left:644px;width:115px;height:42px;' onclick='u("https://br.pinterest.com/mjoalheria/")'></div>
			<div class='pf-hotspot' style='top:631px;left:451px;width:198px;height:42px;' onclick='u("https://www.facebook.com/montecristojoalheria/")'></div>
			<div class='pf-hotspot' style='top:631px;left:240px;width:216px;height:42px;' onclick='u("https://www.instagram.com/montecristo.joalheria/")'></div>
			<div class='pf-hotspot' style='top:452px;left:328px;width:82px;height:68px;' onclick='u("https://montecristo.com.br/relogios/Rolex")'></div>
			<div class='pf-hotspot' style='top:454px;left:451px;width:102px;height:68px;' onclick='u("https://montecristo.com.br/relogios/Cartier")'></div>
			<div class='pf-hotspot' style='top:454px;left:589px;width:115px;height:68px;' onclick='u("https://montecristo.com.br/relogios/Breitling")'></div>
			<div class='pf-hotspot' style='top:526px;left:559px;width:120px;height:60px;' onclick='u("https://montecristo.com.br/relogios/Victorinox")'></div>
			<div class='pf-hotspot' style='top:533px;left:377px;width:158px;height:52px;' onclick='u("https://montecristo.com.br/relogios/Tag-Heuer")'></div>
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
			PageWidth: 814,
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
			ThumbnailWidth: 132,
			ThumbnailHeight: 160,
			ThumbnailsToFront: true,
			ThumbnailsAutoHide: 5000,
			ShareLink: window.location.href,
			ShareText: 'PDF to flipbook converter https://pageflip-books.com',
			ShareVia: '@MaccPageFlip',
			ShareImageURL: '<?php echo $pasta ?>pageflipdata/page0.webp',
			DisableSelection: true,
			CenterSinglePage: false,
			SinglePageMode: true,
			ShowCopyright: false,
			Copyright: '©2016 pageflip-books.com',
			Key: '88MdvHvLld2ctgKJrb'
		}, "diadasmaes");
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