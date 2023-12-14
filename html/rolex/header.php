<div class="rolex-container">
    <header style="max-width: 1350px !important;">
        <div class="conteudo-header">
            <div class="d-logo-rolex">
                <picture>
                    <source
                        srcset="<?php echo base_url('img/rolex/img/digital_visibility_guidelines_2020_retailer_plaque_0001_1540x770.webp') ?>"
                        type="image/webp">
                    <img src="<?php echo base_url('img/rolex/img/digital_visibility_guidelines_2020_retailer_plaque_0001_1540x770.png') ?>"
                        alt="Logo Revendedor Oficial Rolex" width="240" height="120" loading="lazy">
                </picture>

            </div>
            <div class="d-menu">
                <div class="d-menu-mobi">
                    <span onclick="$('.menu-mobile-rolex').slideToggle();">Menu &nbsp;<i class="fa fa-chevron-down"
                            aria-hidden="true"></i></span>
                </div>
                <div class="d-menu-desk" xstyle="display:none">
                    <ul class="ul-menu" style="display: flex; align-items: center;">
                        <?php
                        $menu = array(
                            'rolex' => 'ROLEX NA MONTECRISTO',
                            'rolex/colecao' => 'COLEÇÃO ROLEX',
                            // 'rolex/selecao-para-as-festas' => 'SELEÇÃO PARA AS FESTAS',
                            // 'rolex/novos-modelos-2020' => 'NOVOS MODELOS 2020',
                            // 'rolex/novos-modelos-2021' => 'NOVOS MODELOS 2021',
                            // 'rolex/novosmodelos2022' => 'NOVOS MODELOS 2022',
                            'rolex/novosmodelos' => 'NOVOS MODELOS 2023',
                            'rolex/manutencao' => 'A MANUTENÇÃO ROLEX',
                            'rolex/nossahistoria' => 'NOSSA HISTÓRIA',
                            'rolex/watchmaking' => 'A ARTE DA RELOJOARIA',
                            'rolex/contato' => 'CONTATO'
                        );
                        foreach ($menu as $link => $label) {

                            if ($link == 'rolex/contato') {
                        ?>

                        <li class="">
                            <a href="<?php echo site_url($link) ?>"
                                <?php print(($link == $current) ? 'class="contato selected"' : 'class="contato"'); ?>><?php echo $label ?>
                            </a>
                        </li>
                        <?php
                            } else {
                            ?>

                        <li class="">
                            <a href="<?php echo site_url($link) ?>"
                                <?php print(($link == $current) ? 'class="selected"' : ''); ?>><?php echo $label ?>
                            </a>
                        </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-mobile-rolex">
                <ul class="ul-menu">
                    <?php
                    $menu = array(
                        'rolex' => 'ROLEX NA MONTECRISTO',
                        'rolex/colecao' => 'COLEÇÃO ROLEX',
                        // 'rolex/selecao-para-as-festas' => 'SELEÇÃO PARA AS FESTAS',
                        // 'rolex/novos-modelos-2020' => 'NOVOS MODELOS 2020',
                        // 'rolex/novos-modelos-2021' => 'NOVOS MODELOS 2021',
                        // 'rolex/novosmodelos2022' => 'NOVOS MODELOS 2022',
                        'rolex/novosmodelos' => 'NOVOS MODELOS 2023',
                        'rolex/manutencao' => 'A MANUTENÇÃO ROLEX',
                        'rolex/nossahistoria' => 'NOSSA HISTÓRIA',
                        'rolex/watchmaking' => 'A ARTE DA RELOJOARIA',
                        'rolex/contato' => 'CONTATO'
                    );
                    foreach ($menu as $link => $label) {
                        // print $link."<br>";
                        //contatoprint $current."<br>";
                        if ($link == 'rolex/contato') {
                    ?>
                    <li class="">
                        <a href="<?php echo site_url($link) ?>"
                            <?php print(($link == $current) ? 'class="rolex-contact selected"' : 'class="contato"'); ?>><?php echo $label ?>
                        </a>
                    </li>
                    <?php
                        } else {
                        ?>
                    <li class="">
                        <a href="<?php echo site_url($link) ?>"
                            <?php print(($link == $current) ? 'class="selected"' : ''); ?>><?php echo $label ?>
                        </a>
                    </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    
    <?php

    $this->load->view('html/rolex/cookies-rolex.php');

    if (!empty($script_rolex_hybrid)) echo $script_rolex_hybrid;
    ?>