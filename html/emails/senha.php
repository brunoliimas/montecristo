<?php $titulo = 'Alterar minha senha' ?>
<?php require 'top.php' ?>

Prezado(a) <strong><?php echo $cadastro->nome ?> <?php echo $cadastro->sobrenome ?></strong>, obrigado por escolher a <?php echo $this->config->item('EMPRESA') ?>
<br><a href="<?php echo site_url('conta/reset/?token='.$token) ?>">Clique aqui para alterar sua senha</a>
<br>
<br>* Este link tem um prazo de validade de 24 horas

<?php require 'bottom.php' ?>
