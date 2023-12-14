<script src="<?php echo base_url('js/jquery.js') ?>"></script>
<script src="<?php echo base_url('js/jquery.form.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#formNewsPop').ajaxForm({
            dataType: 'json',
            success: function(out) {
                alert(out.msg);
                if (out.status) {
                    if (out.url) {
                        parent.window.location.href = out.url;
                    } else {
                        parent.$.fancybox.close();
                    }
                } else {
                    $('.newspop-button').html('Enviar');
                }
            },
            beforeSend: function() {
                $('.newspop-button').html('Por favor aguarde');
            }
        });
    });
</script>

<?php if ($popup == 'montecristoblack2015') : ?>

    <style>
        @font-face {
            font-family: 'times_sans_serif';
            url('../fonts/TIMESS.woff') format('woff'),
            src: url('../fonts/TIMESS.eot');
            src: url('../fontsTIMESS.eot?#iefix') format('embedded-opentype'), url('../fonts/TIMESS.woff') format('woff'), url('../fonts/TIMESS.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            margin: 0px;
            padding: 0px;
            color: #fff;
        }

        .newspop {
            width: 100%;
            xheight: 100%;
            background-color: #000;
        }

        .newspop-header {
            margin: auto;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .newspop-title {
            font-size: 30px;
            padding: 0px;
            margin: 0px;
            text-align: center;
            color: #fff;
            font-family: 'times_sans_serif';
            line-height: 40px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px
        }

        .newspop-text {
            font-size: 16px;
            color: #a36a54;
            border: 1px solid #fff;
            background-color: #fff;
            width: 100%;
            padding: 10px;
        }

        .newspop-actions {
            margin: auto;
            max-width: 540px;
            text-align: center;
        }

        .newspop-button {
            border: 0px;
            background: transparent;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            margin-top: 16px;
        }

        .newspop-deixe {
            font-size: 24px;
            line-height: 30px;
            margin-top: 20px
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-header"><img src="<?php echo base_url('img/logo-black.png') ?>?x=2"></div>

            <p class="newspop-title">Toda a linha de joias com 20% de desconto e peças selecionadas com 50% de desconto.
                <br>Só hoje! 
            </p>
            <p class="newspop-title">No site obtenha seu desconto escrevendo o código BLACKFRIDAY no checkout – código
                válido para utilização até a meia noite.</p>
            <p class="newspop-title newspop-deixe">Deixe seu e-mail para receber futuras promoções.</p>

            <div class="newspop-actions">
                <form action="<?php echo site_url('news/assinar') ?>" method="post" id="formNewsPop">
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" />
                    <br>
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php if ($popup == 'montecristovoucher2015') : ?>
    <style>
        @font-face {
            font-family: 'times_sans_serif';
            url('../fonts/TIMESS.woff') format('woff'),
            src: url('../fonts/TIMESS.eot');
            src: url('../fontsTIMESS.eot?#iefix') format('embedded-opentype'), url('../fonts/TIMESS.woff') format('woff'), url('../fonts/TIMESS.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            margin: 0px;
            padding: 0px;
            color: #9d6446;
        }

        .newspop {
            width: 100%;
            height: 100%;
            background: url('../img/bg-pop-1.webp');
            background-size: cover;
        }

        .newspop-header {
            margin: auto;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .newspop-title {
            font-size: 30px;
            padding: 0px;
            margin: 0px;
            text-align: center;
            color: #9d6446;
            font-family: 'times_sans_serif';
            line-height: 40px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 40px;
        }

        .newspop-title-2 {
            font-size: 50px;
            color: #9d6446;
            text-align: center;
            font-family: 'times_sans_serif';
            line-height: 50px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .newspop-text {
            font-size: 16px;
            color: #a36a54;
            border: 1px solid #fff;
            background-color: #fff;
            width: 100%;
            padding: 10px;
        }

        .newspop-actions {
            margin: auto;
            max-width: 540px;
            text-align: center;
        }

        .newspop-button {
            border: 0px;
            background: transparent;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            margin-top: 16px;
            background-color: #9d6446;
            color: #fff;
            padding: 10px 15px;
        }

        .newspop-deixe {
            font-size: 24px;
            line-height: 30px;
            margin-top: 20px
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <p class="newspop-title">A Montecristo Joalheria reservou um presente incrível para você.</p>
            <p class="newspop-title-2">Ganhe R$ 1.000,00 de desconto!</p>
            <p class="newspop-title newspop-deixe">Digite seu e-mail e clique em enviar para imprimir seu voucher.</p>
            <div class="newspop-actions">
                <form action="<?php echo site_url('news/assinar') ?>" method="post" id="formNewsPop">
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" />
                    <br>
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($popup == 'diasdasmulheres2016') : ?>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            color: #9d6446;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .newspop {
            width: 100%;
            height: 100%;
            xbackground: url('../img/bgmulheres2016.webp');
            background-size: cover;
            vertical-align: middle;
            display: table-cell;
        }

        .newspop img {
            vertical-align: middle;
            display: table-cell;
        }
    </style>
    <div class="newspop">
        <a href="https://www.facebook.com/permalink.php?story_fbid=913693715417561&id=378705558916382" target="_blank"><img src="<?php echo base_url('img/pophome/bgmulheres2016.webp') ?>" style="max-width:100%" /></a>
    </div>
<?php elseif ($popup == 'hematita2016') : ?>
    <style>
        @font-face {
            font-family: 'times_sans_serif';
            url('../fonts/TIMESS.woff') format('woff'),
            src: url('../fonts/TIMESS.eot');
            src: url('../fontsTIMESS.eot?#iefix') format('embedded-opentype'), url('../fonts/TIMESS.woff') format('woff'), url('../fonts/TIMESS.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            margin: 0px;
            padding: 0px;
            color: #9d6446;
        }

        .newspop {
            width: 100%;
            height: 100%;
            background: url('../img/pophome/hematita-2.webp');
            background-size: cover;
        }

        .newspop-header {
            margin: auto;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .newspop-title {
            font-size: 30px;
            padding: 0px;
            margin: 0px;
            text-align: center;
            color: #fff;
            font-family: 'times_sans_serif';
            line-height: 40px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 40px;
        }

        .newspop-title-2 {
            font-size: 50px;
            color: #fff;
            text-align: center;
            font-family: 'times_sans_serif';
            line-height: 50px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .newspop-text {
            font-size: 16px;
            color: #9d6446;
            border: 1px solid #fff;
            background-color: #fff;
            width: 100%;
            padding: 10px;
        }

        .newspop-actions {
            margin: auto;
            max-width: 540px;
            text-align: center;
        }

        .newspop-button {
            border: 0px;
            background: transparent;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            margin-top: 16px;
            background-color: #9d6446;
            color: #fff;
            padding: 10px 15px;
        }

        .newspop-deixe {
            font-size: 24px;
            line-height: 30px;
            margin-top: 20px
        }

        @media screen and (max-width: 443px) {
            body {
                margin: 0px;
                padding: 0px;
                color: #9d6446;
            }

            .newspop {
                width: 100%;
                height: 100%;
                background: url('../img/pophome/hematita-2.webp');
                background-size: cover;
            }

            .newspop-header {
                margin: auto;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .newspop-title {
                font-size: 18px;
                padding: 0px;
                margin: 0px;
                text-align: center;
                color: #fff;
                font-family: 'times_sans_serif';
                line-height: 24px;
                width: 75%;
                margin: auto;
                padding-bottom: 10px;
                padding-top: 20px;
            }

            .newspop-title-2 {
                font-size: 22px;
                color: #fff;
                text-align: center;
                font-family: 'times_sans_serif';
                line-height: 20px;
                width: 75%;
                margin: auto;
                padding-bottom: 10px;
                padding-top: 10px;
            }

            .newspop-text {
                font-size: 16px;
                color: #9d6446;
                border: 1px solid #fff;
                background-color: #fff;
                width: 100%;
                padding: 10px;
            }

            .newspop-actions {
                margin: auto;
                max-width: 80%;
                text-align: center;
            }

            .newspop-button {
                border: 0px;
                background: transparent;
                color: #fff;
                font-weight: bold;
                font-size: 12px;
                margin-top: 16px;
                background-color: #9d6446;
                color: #fff;
                padding: 10px 15px;
            }

            .newspop-deixe {
                font-size: 16px;
                line-height: 20px;
                margin-top: 10px
            }
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <p class="newspop-title">A cada R$ 1500,00 reais em compras
                <br>você leva uma pulseira de hematita!
            </p>
            <p class="newspop-title-2">Nas lojas ou pelo site,<br>quem faz a festa é você!</p>
            <p class="newspop-title newspop-deixe">* Válido para até 5 pulseiras.<br>Deixe seu e-mail e saiba mais.</p>
            <div class="newspop-actions">
                <form action="<?php echo site_url('news/assinar') ?>" method="post" id="formNewsPop">
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" />
                    <br>
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($popup == '201750offpecasselecionadas') : ?>
    <style>
        @font-face {
            font-family: 'times_sans_serif';
            url('../fonts/TIMESS.woff') format('woff'),
            src: url('../fonts/TIMESS.eot');
            src: url('../fontsTIMESS.eot?#iefix') format('embedded-opentype'), url('../fonts/TIMESS.woff') format('woff'), url('../fonts/TIMESS.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            margin: 0px;
            padding: 0px;
            color: #9d6446;
        }

        .newspop {
            width: 100%;
            height: 100%;
            background: url('../img/pophome/201750offpecasselecionadas.png');
            background-size: cover;
        }

        .newspop-header {
            margin: auto;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .newspop-title {
            font-size: 30px;
            padding: 0px;
            margin: 0px;
            text-align: center;
            color: #fff;
            font-family: 'times_sans_serif';
            line-height: 40px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 40px;
        }

        .newspop-title-2 {
            font-size: 50px;
            color: #fff;
            text-align: center;
            font-family: 'times_sans_serif';
            line-height: 50px;
            width: 75%;
            margin: auto;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        .newspop-text {
            font-size: 16px;
            font-weight: bold;
            color: #e65914;
            border: 1px solid #fff;
            background-color: #fff;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .newspop-actions {
            margin: auto;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 5;
        }

        .newspop-actions form {
            display: block;
            max-width: 345px;
            margin: auto;
            xbackground-color: #fe6601;
        }

        .newspop-button {
            border: 0px;
            background: transparent;
            color: #fff;
            font-weight: bold;
            font-size: 30px;
            margin-top: 3px;
            padding: 10px 15px;
            font-weight: bold;
        }

        .newspop-deixe {
            font-size: 22px;
            line-height: 30px;
            font-family: 'times_sans_serif';
            padding: 0px;
            margin: 0px;
            color: #fff;
        }

        @media screen and (max-width: 443px) {
            .newspop {
                width: 100%;
                height: 100%;
                background: url('../img/pophome/201750offpecasselecionadas.png');
                background-size: cover;
                background-position: -100px
            }

            .newspop-text {
                font-size: 16px;
                font-weight: bold;
                color: #e65914;
                border: 1px solid #fff;
                background-color: #fff;
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .newspop-actions {
                margin: auto;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 5;
            }

            .newspop-actions form {
                display: block;
                max-width: 90%;
                margin: auto;
            }

            .newspop-button {
                border: 0px;
                background: transparent;
                color: #fff;
                font-weight: bold;
                font-size: 20px;
                margin-top: 3px;
                padding: 3px 3px;
                font-weight: bold;
            }

            .newspop-deixe {
                font-size: 16px;
                line-height: 18px;
                font-family: 'times_sans_serif';
                padding: 0px;
                margin: 0px;
                color: #fff;
            }

            /*
            body {margin:0px; padding:0px; color:#9d6446; }
            .newspop { width:100%; height:100%; background:url('../img/pophome/hematita-2.webp'); background-size: cover;  }
            .newspop-header { margin:auto; text-align:center; margin-top:10px; margin-bottom:10px; }
            .newspop-title { font-size:18px; padding:0px; margin:0px; text-align:center; color:#fff; font-family: 'times_sans_serif'; line-height:24px; width:75%; margin:auto; padding-bottom: 10px; padding-top:20px; }
            .newspop-title-2 { font-size:22px; color:#fff; text-align:center; font-family: 'times_sans_serif'; line-height:20px; width:75%; margin:auto; padding-bottom: 10px; padding-top:10px; }
            .newspop-text { font-size:16px; color:#9d6446; border:1px solid #fff; background-color:#fff; width:100%; padding:10px; }
            .newspop-actions { margin:auto; max-width:80%; text-align:center; }
            .newspop-button { border:0px; background:transparent; color:#fff; font-weight:bold; font-size:12px; margin-top:16px; background-color:#9d6446; color:#fff; padding: 10px 15px; }
            .newspop-deixe { font-size:16px; line-height:20px; margin-top: 10px }
            */
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-actions">
                <form action="<?php echo site_url('news/assinar') ?>" method="post" id="formNewsPop">

                    <input type="hidden" id="identificador" name="identificador" value="50% OFF">
                    <input type="hidden" id="url" name="url" value="https://montecristo.com.br/joias/SALE" />

                    <p class="newspop-deixe">Deixe seu nome e e-mail</p>
                    <input type="text" placeholder="Nome" name="email" class="newspop-text" />
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" />
                    <br>
                    <button type="submit" class="newspop-button">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($popup == '2017lifeismagical') : ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Cormorant');

        body {
            margin: 0px;
            padding: 0px;
            color: #9d6446;
        }

        .newspop {
            width: 100%;
            height: 100%;
            background: url('../img/pophome/2017lifeismagical.png');
            background-size: cover;
        }

        .newspop-text {
            font-family: 'Cormorant', serif;
            font-size: 16px;
            font-weight: bold;
            color: #010101;
            border: 1px solid #fff;
            background-color: #fff;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .newspop-actions {
            margin: auto;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 5;
        }

        .newspop-actions form {
            display: block;
            max-width: 345px;
            margin: auto;
        }

        .newspop-button {
            font-family: 'Cormorant', serif;
            border: 0px;
            background: transparent;
            color: #010101;
            font-weight: bold;
            font-size: 30px;
            margin-top: 3px;
            padding: 10px 15px;
            font-weight: bold;
        }

        .newspop-deixe {
            font-size: 28px;
            line-height: 30px;
            font-family: 'Cormorant', serif;
            padding: 0px;
            margin: 0px;
            color: #010101;
        }

        @media screen and (max-width: 443px) {
            .newspop {
                width: 100%;
                height: 100%;
                background: url('../img/pophome/2017lifeismagical.png');
                background-size: cover;
                background-position: -100px
            }

            .newspop-text {
                font-size: 16px;
                font-weight: bold;
                color: #010101;
                border: 1px solid #fff;
                background-color: #fff;
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .newspop-actions {
                margin: auto;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 5;
            }

            .newspop-actions form {
                display: block;
                max-width: 90%;
                margin: auto;
            }

            .newspop-button {
                border: 0px;
                background: transparent;
                color: #010101;
                font-weight: bold;
                font-size: 20px;
                margin-top: 3px;
                padding: 3px 3px;
                font-weight: bold;
            }

            .newspop-deixe {
                font-size: 16px;
                line-height: 18px;
                font-family: 'Cormorant', serif;
                padding: 0px;
                margin: 0px;
                color: #010101;
            }
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-actions">
                <form action="<?php echo site_url('news/assinar') ?>" method="post" id="formNewsPop">

                    <input type="hidden" id="identificador" name="identificador" value="Colecao - Life is Magical" />
                    <input type="hidden" id="url" name="url" value="https://montecristo.com.br/colecao/Life-is-Magical" />

                    <p class="newspop-deixe">Deixe seu nome e e-mail</p>
                    <input type="text" placeholder="Nome" name="nome" class="newspop-text" required />
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                    <br>
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($popup == 'tour_de_force') : ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,400');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400');

        .newspop {
            width: 100%;
            background-image: url(https://montecristo.com.br/emkt/tour-de-force/formulario/img/index2.7.webp);
            margin: 0 auto;
            position: relative
        }

        .newspop-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .newspop-actions {
            width: 100%;
            margin: auto;
            padding: 20px 0px;
            position: absolute;
            bottom: 0px;
            background-color: rgba(0, 0, 0, 0.8)
        }

        .texto {
            color: #FFF;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 300
        }

        .newspop-deixe {
            color: #FFF;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 5px;
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .newspop-text {
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            margin: 0 auto;
            border: 2px solid #956659;
            margin-bottom: 5px;
            color: #956659;
            display: block;
            width: 80%;
            height: 32px;
            padding-left: 10px;
        }

        .newspop-button {
            background-color: #000;
            border: 2px solid #000;
            color: #FFF;
            padding: 5px 45px;
            font-size: 18px;
            cursor: pointer;
            float: right;
            position: relative;
            right: 55px;
        }

        .fechar {
            font-family: 'Lato', sans-serif;
            font-size: 35px;
            position: absolute;
            top: 10px;
            right: 10px;
            float: right;
            text-decoration: none;
            color: #956659;
        }

        form {}

        @media screen and (max-width: 443px) {
            .texto {
                display: none;
            }

            .newspop {
                width: 100%;
                height: 100%;
                background-image: url(https://montecristo.com.br/emkt/tour-de-force/formulario/img/index2.7.webp);
                margin: 0 auto;
                position: relative;
                background-size: cover;
            }

            .newspop-text {
                font-family: 'Lato', sans-serif;
                font-size: 14px;
                color: #956659;
                border: 2px solid #956659;
                background-color: #fff;
                width: 100%;
                height: 32px;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .newspop-actions {
                margin: auto;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 0px;
                background-color: rgba(0, 0, 0, 0.7);
                padding: 10px 0px
            }

            .newspop-actions form {
                display: block;
                max-width: 90%;
                margin: auto;
            }

            .newspop-button {
                background-color: #000;
                color: #FFF;
                font-size: 20px;
                margin-top: 3px;
                padding: 3px 3px;
                width: 100%;
                right: 0px
            }

            .newspop-deixe {
                font-size: 16px;
                line-height: 18px;
                font-family: 'Open Sans', sans-serif;
                padding: 0px;
                margin: 0px;
                color: #FFF;
            }

            .newspop_logo_colecao {
                display: none
            }
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-actions">
                <div style="text-align:center">
                    <img src="https://montecristo.com.br/emkt/tour-de-force/formulario/img/logo.png" /><br />
                    <img src="https://montecristo.com.br/emkt/tour-de-force/formulario/img/logo-tour.png" class="newspop_logo_colecao" /><br />
                    <span class="texto">A Montecristo, alta joalheria com mais de meio século de tradição<br />olhou para
                        seus arquivos dos anos 60 e 70 e reeditou peças icônicas<br />em sua mais nova coleção intitulada
                        Tour de Force.</span>
                </div>
                <form action="<?php echo site_url("news/assinar/{$popup}") ?>" method="post" id="formNewsPop" name="tour-de-force-pop-up">

                    <input type="hidden" id="identificador" name="identificador" value="tour-de-force-pop-up-5330337910500b2d2bb2" />
                    <input type="hidden" id="url" name="url" value="https://montecristo.com.br/colecao/Tour-de-Force" />

                    <p class="newspop-deixe">Inscreva-se e receba vantagens exclusivas.</p>
                    <input type="text" placeholder="Nome" name="nome" class="newspop-text" required />
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($popup == 'nuit_blanche') : ?>
    <style>
        body {
            margin: 0;
            padding: 0
        }

        .newspop {
            width: 600px;
            height: 894px;
            background-image: url('https://montecristo.com.br/img/pophome/formulario-nutblanche.webp');
            margin: 0 auto;
            position: relative
        }

        .newspop-actions {
            width: 100%;
            margin: auto;
            padding: 20px 0px;
            position: absolute;
            bottom: 0px;
            background-color: rgba(0, 0, 0, 0.8)
        }

        .texto {
            color: #FFF;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 300
        }

        .newspop-deixe {
            color: #FFF;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 5px;
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .newspop-text {
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            width: 83%;
            height: 42px;
            padding-left: 10px;
            margin: 0 auto;
            border: 2px solid #663300;
            margin-bottom: 5px;
            color: #663300;
            display: block;
        }

        .newspop-button {
            background-color: #663300;
            border: 2px solid #663300;
            font-family: 'Lato', sans-serif;
            color: #FFF;
            padding: 3px 25px;
            cursor: pointer;
            float: right;
            position: relative;
            right: 42px;
            font-size: 18px;
        }

        .fechar {
            font-family: 'Lato', sans-serif;
            font-size: 35px;
            position: absolute;
            top: 10px;
            right: 10px;
            float: right;
            text-decoration: none;
            color: #956659;
        }

        form {
            width: 83%;
            margin: 0 auto;
        }

        @media screen and (max-width: 443px) {
            .texto {
                display: none;
            }

            .newspop {
                width: 100%;
                height: 100%;
                background-image: url('https://montecristo.com.br/img/pophome/formulario-nutblanche.webp');
                margin: 0 auto;
                position: relative;
                background-size: cover;
            }

            .newspop-text {
                font-family: 'Lato', sans-serif;
                font-size: 14px;
                color: #663300;
                border: 2px solid #663300;
                background-color: #fff;
                width: 100%;
                height: 32px;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .newspop-actions {
                margin: auto;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 0px;
                background-color: rgba(0, 0, 0, 0.7);
                padding: 10px 0px
            }

            .newspop-actions form {
                display: block;
                max-width: 90%;
                margin: auto;
            }

            .newspop-button {
                background-color: #663300;
                color: #FFF;
                font-size: 20px;
                margin-top: 3px;
                padding: 3px 3px;
                width: 100%;
                right: 0px
            }

            .newspop-deixe {
                font-size: 16px;
                line-height: 18px;
                font-family: 'Open Sans', sans-serif;
                padding: 0px;
                margin: 0px;
                color: #FFF;
            }
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-actions">
                <div style="text-align:center">
                    <span class="texto">Uma cole&ccedil;&atilde;o criada no conceito de luxo atemporal, focada
                        na<br />feminilidade e for&ccedil;a das p&eacute;rolas e do diamantes.</span>
                </div>
                <form action="<?php echo site_url("news/assinar/{$popup}") ?>" method="post" id="formNewsPop" name="nuit-blanche-pop-up">

                    <input type="hidden" id="identificador" name="identificador" value="nuit-blanche-pop-up" />
                    <input type="hidden" id="url" name="url" value="https://montecristo.com.br/colecao/Nuit-Blanche" />

                    <p class="newspop-deixe">Inscreva-se e receba vantagens exclusivas.</p>
                    <input type="text" placeholder="Nome" name="nome" class="newspop-text" required />
                    <input type="text" placeholder="E-mail" name="email" class="newspop-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                    <button type="submit" class="newspop-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>

<?php elseif ($popup == 'lovers') : ?>
    <style>
        body {
            margin: 0;
            padding: 0
        }

        body {
            margin: 0;
            padding: 0
        }

        .newspop {
            width: 100%;
            margin: 0 auto;
        }

        .newspop-container {
            width: 100%;
            margin: 0 auto;
        }

        .container {
            background-color: #fff0e2;
            padding: 15px 15px;
        }

        .img_lovers {
            width: 100%;
        }

        .texto {
            color: #c6896e;
            font-family: 'Lato', sans-serif;
            font-size: 17px;
            font-weight: 400i;
            text-align: center;
            display: block;
        }

        .newspop-deixe {
            color: #c6896e;
            font-family: 'Lato', sans-serif;
            font-size: 17px;
            font-weight: 400i;
            text-align: center;
            display: block;
        }

        .newspop-logo {
            margin: 0 auto;
            display: block;
            margin-bottom: 20px;
            margin-top: 23px;
        }

        .newspop-text {
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            width: 83%;
            height: 32px;
            padding-left: 10px;
            margin: 0 auto;
            border: 2px solid #a37459;
            margin-bottom: 5px;
            color: #a37459;
            display: block;
        }

        .newspop-button {
            background-color: #a37459;
            border: 2px solid #a37459;
            font-family: 'Lato', sans-serif;
            color: #FFF;
            padding: 3px 25px;
            cursor: pointer;
            float: right;
            position: relative;
            right: 48px;
            font-size: 18px;
        }

        @media(max-width: 443px) {
            .container {
                padding: 2px 2px;
            }

            .newspop {
                width: 100%;
            }

            .newspop-logo {
                display: none;
            }

            .texto {
                display: none;
            }

            .img_lovers {
                width: 100%;
            }

            .newspop-text {
                font-family: 'Lato', sans-serif;
                font-size: 14px;
                color: #a37459;
                border: 2px solid #a37459;
                background-color: #fff;
                width: 100%;
                height: 32px;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .newspop-button {
                background-color: #a37459;
                color: #FFF;
                font-size: 20px;
                margin-top: 3px;
                padding: 3px 3px;
                width: 100%;
                right: 0px
            }
        }
    </style>
    <div class="newspop">
        <div class="newspop-container">
            <div class="newspop-actions">
                <img src="https://montecristo.com.br/emkt/lovers/formulario/img/formulario-lovers.webp" class="img_lovers" />
                <div class="container">
                    <img src="https://montecristo.com.br/emkt/lovers/formulario/img/logo_lovers.png" class="newspop-logo" />
                    <span class="texto">
                        A "Lovers" &eacute; uma linha com espirito jovem, cheia de elementos<br />l&uacute;cidos com
                        unic&oacute;rnios, cobras, raios e estrelas.
                    </span>
                    <form action="<?php echo site_url("news/assinar/{$popup}") ?>" method="post" id="formNewsPop" name="lovers-pop-up" autocomplete="on">

                        <input type="hidden" id="identificador" name="identificador" value="lovers-pop-up" />
                        <input type="hidden" id="url" name="url" value="https://montecristo.com.br/colecao/Lovers/" />

                        <p class="newspop-deixe">Inscreva-se e receba vantagens exclusivas.</p>
                        <input type="text" placeholder="Nome" name="nome" class="newspop-text" required />
                        <input type="text" placeholder="E-mail" name="email" class="newspop-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                        <button type="submit" class="newspop-button">Enviar</button>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    <?php elseif ($popup == 'blackweek2017') : ?>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Rajdhani:400,700');

            body {
                margin: 0;
                padding: 0
            }

            .newspop {
                width: 100%;
                height: 100%;
                background: url('../../img/pophome/blackweek2017.webp');
                background-size: cover;
                margin: 0 auto;
                position: relative;
                background-position: center center;
            }

            .newspop-container {
                width: 100%;
                margin: 0 auto;
                position: absolute;
                bottom: 0px;
                text-align: center
            }

            .newspop-deixe {
                color: #636262;
                font-family: 'Lato', sans-serif;
                font-size: 22px;
                text-align: center;
                display: block;
            }

            .newspop-text {
                font-family: 'Rajdhani', sans-serif;
                font-size: 25px;
                color: #010101;
                font-weight: bold;
                width: 83%;
                height: 35px;
                padding-left: 15px;
                margin: 0 auto;
                margin-bottom: 5px;
                color: #010101;
                display: block;
                background-color: #eee9e9;
                border: 0px;
            }

            .newspop-button {
                font-family: 'Rajdhani', sans-serif;
                font-size: 25px;
                color: #010101;
                font-weight: bold;
                padding: 3px 25px;
                cursor: pointer;
                border: 0px;
                margin-top: 10px;
                margin-bottom: 10px;
                background-color: transparent
            }

            @media(max-width: 443px) {
                /*
                .xcontainer{padding:2px 2px;}
                .newspop{width:100%;}
                .newspop-logo{display:none;}
                .texto{display:none;}
                .newspop-text { font-family: 'Lato', sans-serif;font-size:14px; color:#a37459;border:2px solid #a37459; background-color:#fff; width:100%; height:32px; padding:10px; margin-top:5px; margin-bottom:5px; }
                .newspop-button { background-color:#a37459; color:#FFF; font-size:20px; margin-top:3px; padding: 3px 3px; width:100%;right:0px}
                */
            }
        </style>
        <div class="newspop">
            <div class="newspop-container">
                <div class="newspop-actions">

                    <form action="<?php echo site_url("news/assinar/{$popup}") ?>" method="post" id="formNewsPop" name="blackweek2017" autocomplete="on">

                        <input type="hidden" id="identificador" name="identificador" value="<?php echo $popup ?>" />
                        <input type="hidden" id="url" name="url" value="https://montecristo.com.br/colecao/Black-Friday" />

                        <p class="newspop-deixe">Deixe seu nome/email e veja a peça:</p>
                        <input type="text" placeholder="Nome" name="nome" class="newspop-text" required />
                        <input type="text" placeholder="E-mail" name="email" class="newspop-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                        <button type="submit" class="newspop-button">ENVIAR</button>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <!--script async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/b7cb3b80-019d-4187-bc80-af6fc0b72887-loader.js"></script>
<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
<script type ='text/javascript'>
    field_mapping = {
        'nome': 'nome',
        'email': 'email',
    };
    $('form').on('submit', function(event) {
        var $form = $(event.target).closest('form');
        var inputs = $($form).find(':input').serializeArray();
        jQuery.each(inputs, function(){
            if(field_mapping[this.name]){
                this.name = field_mapping[this.name];
            }
        });
        RdIntegration.post(inputs, function(){
            return false;
        });
    } );
</script-->