<?php $data = date("d-m-Y");$imagem="";$url="#";$tempop=false; ?>
<?php if(isset($_GET['data']))$data=$_GET['data']; ?>
<?php 
switch($data){
	case "10-11-2016":
		$imagem = base_url("img/_popups/AN018.webp");
		$url = "https://montecristo.com.br/produto/AN018-AN018";
		$tempop=true;
		break;
	case "11-11-2016":
		$imagem = base_url("img/_popups/BR045.webp");
		$url = "https://montecristo.com.br/produto/BR045-Brinco-Black-Star";
		$tempop=true;
		break;
	case "12-11-2016":
		$imagem = base_url("img/_popups/CO184.webp");
		$url = "https://montecristo.com.br/produto/CO184-Gargantilha-Butterfly";
		$tempop=true;
		break;
	case "13-11-2016":
		$imagem = base_url("img/_popups/PU200.webp");
		$url = "https://montecristo.com.br/produto/PU200-Pulseira-Caleidoscopio";
		$tempop=true;
		break;
	case "14-11-2016":
		$imagem = base_url("img/_popups/AN039.webp");
		$url = "https://montecristo.com.br/produto/AN039-Anel-Divino";
		$tempop=true;
		break;
	case "15-11-2016":
		$imagem = base_url("img/_popups/BR124.webp");
		$url = "https://montecristo.com.br/produto/BR124-Brinco-Caleidoscopio";
		$tempop=true;
		break;
	case "16-11-2016":
		$imagem = base_url("img/_popups/PI055.webp");
		$url = "https://montecristo.com.br/produto/PI055-PI055";
		$tempop=true;
		break;
	case "17-11-2016":
		$imagem = base_url("img/_popups/PU206.webp");
		$url = "https://montecristo.com.br/produto/PU206-Pulseira-El-Divino";
		$tempop=true;
		break;
	case "18-11-2016":
		$imagem = base_url("img/_popups/AN228.webp");
		$url = "https://montecristo.com.br/produto/AN228-Anel-Sunrise";
		$tempop=true;
		break;
	case "19-11-2016":
		$imagem = base_url("img/_popups/BR127.webp");
		$url = "https://montecristo.com.br/produto/BR127-Brinco-Caleidoscopio";
		$tempop=true;
		break;
	case "20-11-2016":
		$imagem = base_url("img/_popups/AN128.webp");
		$url = "https://montecristo.com.br/produto/AN128-Anel-Colore";
		$tempop=true;
		break;
	case "21-11-2016":
		$imagem = base_url("img/_popups/BR133.webp");
		$url = "https://montecristo.com.br/produto/BR133-Brinco-Piel";
		$tempop=true;
		break;
	case "22-11-2016":
		$imagem = base_url("img/_popups/AN130.webp");
		$url = "https://montecristo.com.br/produto/AN130-Anel-Colore";
		$tempop=true;
		break;
	case "23-11-2016":
		$imagem = base_url("img/_popups/BR201.webp");
		$url = "https://montecristo.com.br/produto/BR201-Brinco-Pitanga";
		$tempop=true;
		break;
	case "24-11-2016":
		$imagem = base_url("img/_popups/PU192.webp");
		$url = "https://montecristo.com.br/produto/PU192-Pulseira-Caleidoscopio";
		$tempop=true;
		break;
	case "25-11-2016":
		$imagem = base_url("img/_popups/ANELSKY.webp");
		$url = "https://montecristo.com.br/produto/AN0541-Anel-Sky";
		$tempop=true;
		break;
		
}

if(isset($_GET['debug'])){
	$imagem = base_url("img/_popups/BR045.webp");
		$url = "https://montecristo.com.br/produto/BR045-Brinco-Black-Star";
		$tempop=true;
	$tempop=true;
}
?>

<?php if($tempop): ?>
<div id='popupS' style="background-color:#000;position:relative;width:100%;max-width:612px;">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700" rel="stylesheet">
	<style>
		.popinput::-webkit-input-placeholder {
		   color: #000;
		   font: 1.2em  'Rajdhani', sans-serif;
		   font-weight:700;
		}

		.popinput:-moz-placeholder {
		   color: #000;
		   font: 1.2em  'Rajdhani', sans-serif;
		   font-weight:700;
		}

		.popinput::-moz-placeholder {
		   color: #000;
		   font: 1.2em  'Rajdhani', sans-serif;
		   font-weight:700;
		}

		.popinput:-ms-input-placeholder {  
		   color: #000;
		   font: 1.2em  'Rajdhani', sans-serif;
		   font-weight:700;
		}
		@media(max-width:500px){
			#box-formpop{
				max-width:480px !important;
				font-size:.8em;
			}
		}
	</style>
	<img style="width:100%;" src='<?php echo $imagem ?>' alt='' />
	<div id="box-formpop" style="position:absolute;bottom:3px;;width:100%;">
		<center>
			<p style="font-family: 'Rajdhani', sans-serif;margin:0;color:#c67d5f;font-size:25px;">Deixe seu nome/ e-mail e veja a peça:</p>
			<?php if(isset($_GET['data'])):?>
			<a style="color:red;" target="_blank" href="<?php echo $url ?>"><?php echo $url ?></a>
			<?php endif; ?>
			<form method='POST' name='popForm' id='FormPop' action='<?php echo site_url('news/cadNewsPop') ?>'>
				<input type="hidden" id="identificador" name="identificador" value="Black Friday" >
				<input type="hidden" id="url" name="url" value="<?php echo $url ?>" />
				<table style="width:100%;"><tr><td align="center">
				<input class="popinput" style="margin:3px;padding:6px 0 6px 20px; font: 1.2em  'Rajdhani', sans-serif; color:#000;background-color:#c67d5f;border:none;width:100%;max-width:316px;" type='text' name='nome' value=''  placeholder='Nome' required /></td></tr><tr><td align="center">
				<input class="popinput" style="margin:3px;padding:6px 0 6px 20px; font: 1.2em  'Rajdhani', sans-serif; color:#000;background-color:#c67d5f;border:none;width:100%;max-width:316px;" type='text' name='email' value='' placeholder='E-mail' required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
				</td></tr><tr><td align="center">
				<input style="margin:0 7px 3px 7px;border:0;background-color:#000;color:#c67d5f;font:30px 'Rajdhani', sans-serif; font-weight:700;" type='submit' value='Enviar' />
				</td></tr></table>
			</form>
		</center>
	</div>
</div>

<script>
	$(document).ready(function(){		
		url = "<?php echo $url ?>";
		$.fancybox(
			document.getElementById("popupS"),
		{
			padding: 0
			// ,maxWidth: 1000
			,width: '100%'
			,height: '100%'
			,maxWidth: '612px'
			,maxHeight: '612px'
		});
		
		 $('#FormPop').ajaxForm({
			dataType: 'json'
			,success: function(out){
				if(out.status){
					//alert(url);
					location.href = url;
				}
				alert(out.msg);
			}
		});
	
	});
</script>
<?php endif; ?>