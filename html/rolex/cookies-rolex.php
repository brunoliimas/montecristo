<div class="cookie-popup" hidden>
    <div class="content">
        <object class="logo" data="<?php echo base_url('img/logo.svg') ?>" type="image/svg+xml" width="336" height="58" aria-label="Joalheria Montecristo - Joias e Relógios"></object>

        <div class="close-icon"></div>

        <div class="description">
            <strong>Valorizamos a sua privacidade</strong>
            <p>
                Em nosso site, usamos serviços (inclusive de terceiros) que nos ajudam a melhorar nossa presença online. As seguintes categorias de cookies são usadas por nós e podem ser gerenciadas nas configurações de cookies. Precisamos do seu consentimento antes de podermos usar esses serviços. Como alternativa, você pode clicar para recusar o consentimento ou acessar informações mais detalhadas e alterar suas preferências antes de consentir. Suas preferências serão aplicadas apenas a este site. Você pode alterar suas preferências a qualquer momento retornando a este site ou visitando nossa política de privacidade.
            </p>

            <p>
                Ao autorizar serviços de terceiros, você permite a colocação e a leitura de cookies e o uso de tecnologias de rastreamento necessárias para manter nosso site confiável e seguro
            </p>


            <div class="cookies">
                <label for="essential">
                    <div>
                        <strong>Essencial</strong>
                        <p>
                            Montecristo e os cookies: usamos cookies para personalizar anúncios e melhorar a sua experiência no site. Ao continuar navegando, você concorda com a nossa <a href="https://montecristo.com.br/politica-privacidade" target="_blank">Política de Privacidade</a>.
                            Durante a navegação na seção Rolex do nosso site, você poderá ser redirecionado para o site www.rolex.com. Neste caso, os Termos de Uso, a Política de Privacidade e a Política de Cookies do site <a href="www.rolex.com" target="_blank">www.rolex.com</a> serão aplicados
                        </p>
                    </div>
                    <div>
                        <input type="checkbox" id="essential" checked readonly disabled>
                        <span></span>
                    </div>
                </label>

            </div>

            <div class="partners" hidden>
                <label for="rolex">
                    <div>
                        <p><strong>Rolex (Adobe Analytics and Content Square)</strong></p>
                        <p>Política de privacidade: <a href="https://www.rolex.com/legal-notices/cookies.html">https://www.rolex.com/legal-notices/cookies.html</a></p>
                        <p>Política de privacidade <a href="https://www.adobe.com/br/privacy/policy.html" target="_blank">Adobe Analytics</a></p>
                        <p>Política de privacidade <a href="https://contentsquare.com/website-privacy-policy/" target="_blank">ContentSquare</a></p>
                        <p>Finalidades (consentimento)</p>
                        <p>Finalidade de Interesse Legítimo(s)</p>
                    </div>
                    <div>
                        <input type="checkbox" id="rolex" checked>
                        <span></span>
                    </div>
                </label>

            </div>



            <div class="check-zone">
                <button id="decline">Recusar todos</button>
                <button id="options">Mais opções</button>
                <button id="save-exit" hidden>Salvar & sair</button>
                <button id="accept">Aceitar todos</button>

            </div>

        </div>

    </div>
</div>


<script>
    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie);
        const cArr = cDecoded.split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        })
        return res
    }

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }


    // window.onload = () => {



    let popup = document.querySelector(".cookie-popup")
    let iframe = document.getElementById("rlx-corner") ? true : false
    let rolex_page = location.href.includes('https://montecristo.com.br/rolex')

    // Toggle "More Options" section
    document.querySelector("#options").onclick = () => toggle_info()

    function toggle_info() {
        let elements = document.querySelectorAll(".cookies, .partners, #decline, #save-exit, #options")

        elements.forEach(element => {
            element.toggleAttribute("hidden")
        });
    }

    // Rolex cookies integration
    function rolex_cookie(choice) {
        if (choice === "accepted") {

            setCookie("rlx-consent", "true")

            if (rolex_page) {
                if (iframe) {
                    if (getCookie("signed-cookie") == "false") {
                        document.getElementById("rlx-corner").contentWindow.postMessage("consentTrue", "https://corners.rolex.com");
                        document.getElementById("rlx-corner").contentWindow.postMessage("consentValidation", "https://corners.rolex.com");
                        setCookie("signed-cookie", "true")
                    }
                } else {
                    _satellite.setVar("Analyticsconsent", "true");
                    _satellite.track("PageView");
                    setCookie("signed-cookie", "true")
                }
            }
        } else {

            setCookie("rlx-consent", "false")

            if (rolex_page) {
                if (!iframe) {
                    _satellite.setVar("Analyticsconsent", "false");
                    setCookie("signed-cookie", "true")
                }
            }
        }
    }

    // If is a Rolex page, check cookie consent and execute script
    if (rolex_page && getCookie('rlx-consent') != undefined) {
        if (getCookie("rlx-consent") === "true") {
            rolex_cookie("accepted")
        } else {
            rolex_cookie("refused")
        }
    }


    // Setting cookie consent (if not exists) after first visit
    if (getCookie('rlx-consent') === undefined) {
        setCookie("rlx-consent", "false")
        setCookie("signed-cookie", "false")

        popup.hidden = false
    }

    // Accept button
    document.querySelector("#accept").onclick = () => {
        rolex_cookie("accepted")
        popup.hidden = true
    }

    // Save & Exit button
    document.querySelector("#save-exit").onclick = () => {

        rlx_cookie = document.querySelector(".partners input#rolex").checked // true / false

        if (rlx_cookie) {
            rolex_cookie("accepted")
        } else {
            rolex_cookie("refused")
        }

        popup.hidden = true
    }

    // Decline button
    document.querySelector("#decline").onclick = () => {
        rolex_cookie("refused")
        popup.hidden = true
    }

    // Close button
    document.querySelector(".close-icon").onclick = () => {

        var cookieButton = document.getElementById('icon_cookie');
        rolex_cookie("refused")
        popup.hidden = true
        cookieButton.style.display = 'block';
    }

    // Change consent anchor
    if (document.querySelector("a[title='Alterar consentimento de cookies Rolex']")) {
        document.querySelector("a[title='Alterar consentimento de cookies Rolex']").onclick = () => {
            popup.hidden = false
        }
    }

    function openCookiePopup() {
        var cookiePopup = document.querySelector('.cookie-popup');
        var cookieButton = document.getElementById('icon_cookie');
        if (cookiePopup) {
            cookiePopup.removeAttribute('hidden');
            cookieButton.style.display = 'none';
        }
    }

    // }
</script>