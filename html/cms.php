<?php require_once 'header.php' ?>
<section class="container">


    <?php if(!empty($cms) && trim($cms->titulo)!='Educacional'):  /** Tirar a validação do titulo == Educacional quando for ativar a página */ ?>

        <div class="page-header">
            <h1><?php echo $cms->titulo ?></h1>
            <hr>
        </div>

        <?php if($cms->img1 != ''): ?>
            <!--img src="<?php echo site_url('admin/upload/pagina/'.$cms->img1) ?>" alt="<?php echo $cms->titulo ?>" class="fullWidth" style=""/-->
            <div class='cms_container' style="padding: 40px 0;max-width:1100px;">
                <?php
                if($cms->conteudo2 != ''){
                    print $cms->conteudo2;
                }
                else {
                    print $cms->conteudo;
                }
                ?>
            </div>
        <?php else: ?>
            <div>
                <?php
                if($cms->conteudo2 != ''){
                    print $cms->conteudo2;
                }
                else {
                    print $cms->conteudo;
                }
                ?>
            </div>
        <?php endif; ?>

    <?php else: ?>
        <div style="text-align:center;color:#999;padding:120px 0;">
            <h2 style="font-size:44px">EM BREVE</h2>
            <p style="font-size: 19px;margin-bottom: 70px;">TUTORIAL MONTECRISTO</p>

            <p style="font-size: 13px;">SIGA-NOS NAS REDES SOCIAIS</p>

            <table style="width:60%;margin:0 auto;">
                <tr>
                    <td style="width:33%; padding: 6px;"><a style="font-size: 11px; display: flex;justify-content: center;" href="http://instagram.com/montecristo.joalheria" target="_blank"><i style="font-size: 13px;" class="fa fa-instagram"></i>&nbsp;MONTECRISTO.JOALHERIA</a></td>
                    <td style="width:33%; padding: 6px;"><a style="font-size: 11px; display: flex;justify-content: center;" href="https://www.facebook.com/pages/Montecristo-Joalheria/378705558916382" target="_blank"><i style="font-size: 13px;" class="fa fa-facebook"></i>&nbsp;MONTECRISTOJOALHERIA </a></td>
                    <td style="width:33%; padding: 6px;"><a style="font-size: 11px; display: flex;justify-content: center;" href="http://www.pinterest.com/mjoalheria/" taget="_blank"><i style="font-size: 13px;" class="fa fa-pinterest"></i>&nbsp;MJOALHERIA</a></td>
                </tr>
            </table>
        </div>

    <?php endif; ?>

</section>
<?php require_once 'footer.php' ?>