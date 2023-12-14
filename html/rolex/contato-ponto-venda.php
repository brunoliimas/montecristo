<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>

<script>
    var digitalDataLayer = {
        page: {
            pageType: "contact page"
        }
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "JewelryStore",
        "name": "MONTECRISTO",
        "image": "https://montecristo.com.br/img/rolex/img/digital_visibility_guidelines_2020_retailer_plaque_0001_1540x770.webp",
        "@id": "",
        "url": "https://montecristo.com.br/rolex/contato",
        "telephone": "+ 55 11 3152 6660",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shopping JK Iguatemi Avenida Presidente Juscelino Kubitschek",
            "addressLocality": "São paulo",
            "postalCode": "04543-011",
            "addressCountry": "BR"
        },
        "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens": "10:00",
            "closes": "22:00"
        }, {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Sunday",
            "opens": "14:00",
            "closes": "20:00"
        }]
    }
</script>

<div class="bf-rolex">
    <section class="breadcrumbcontent">
        <div class="breadcrumb"><a href="/rolex">Rolex</a><span> &gt; </span><a href="#">Contato</a></div>
    </section>
    <div class="banner-rolex-desktop">
        <div class="box-banner">
            <a>
                <picture>
                    <source srcset="<?php echo image_compatibility(site_url("img/rolex/contato/banner_loja_contato.webp"), 'webp') ?>">
                    <img src="<?php echo image_compatibility(site_url("img/rolex/contato/banner_loja_contato.webp"), 'jpg') ?>">
                </picture>
            </a>
        </div>
    </div>
    <div class="banner-rolex-mobile">
        <div class="box-banner">
            <a>
                <picture>
                    <source srcset="<?php echo image_compatibility(site_url("img/rolex/contato/banner_loja_contato_mobile.webp"), 'webp') ?>">
                    <img src="<?php echo image_compatibility(site_url("img/rolex/contato/banner_loja_contato_mobile.webp"), 'jpg') ?>">
                </picture>
            </a>
        </div>
    </div>

    <?php
    if (!isset($_GET['enviado'])) {
    ?>
        <section class="infoscontato">
            <div class="contato">
                <span class="top-subtitle">Distribuidor Oficial Rolex</span>
                <h1 class="top-title">
                    Montecristo Joalheria <br> Seu distribuidor Oficial Rolex
                    <br>
                    <br>
                    Contato
                </h1>
                <span class="top-message">
                    Com perícia, know-how técnico e equipamentos especiais,
                    nós garantimos a autenticidade de cada peça do seu relógio rolex.
                    teremos o prazer em esclarecer suas dúvidas.
                </span><a href="#form_contato" class="btn-envie-nos">Envie-nos uma mensagem</a>
            </div>
        </section>
    <?php } else {
        if ($_GET['enviado'] == 'true') {
            $title = 'Obrigado!';
            $text = 'Agradecemos o seu interesse na Rolex. Sua mensagem foi enviada com sucesso. Sua solicitação será analisada por um dos nossos representantes e respondida o mais rápido possivel.';
        } else {
            $title = 'Mensagem não entregue';
            $text = 'Não foi possível entregar a sua mensagem.';
        } ?>
        <section class="infoscontato">
            <div class="contato">
                <h2 class="top-title">
                    <? echo $title ?>
                </h2>
                <span class="top-message">
                    <? echo $text ?>
            </div>
        </section>
        <script>
            _satellite.track('contactForm');
        </script>
    <?php } ?>
    <?php
    if (!isset($_GET['enviado'])) {
    ?>

        <section class="infosdistribuidorcontent">
            <div class="infosdistribuidor" style="min-height: 700px">
                
                <iframe src="https://montecristo.com.br/map-preview/" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="formcontato" id="form_contato">
            <div class="formcontato-header">
                <h2>Contato</h2>
                <span>Por favor, indique o meio de contato de sua preferência. nós o responderemos o mais rápido
                    possível.</span>
            </div>
            <div class="formcontato-form">
                <form id="this-form" method="post" name="contactform" action="/rolex/contato">
                    <input type="hidden" name="action" value="true">
                    <div class="row">
                        <div class="content">
                            <div width="18%" class="formcontato-form-select">
                                <select required name="title" aria-label="title" value="" id="title">
                                    <option aria-label="">Título</option>
                                    <option value="Sr.">Sr.</option>
                                    <option value="Sra.">Sra.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Dra.">Dra.</option>
                                </select>
                                <label tabindex="-1" for="title" class="formcontato-form-label">Título</label>
                            </div>
                            <div width="25%" class="formcontato-form-nome">
                                <input required name="name" aria-label="first name" id="first-name" autocomplete="given-name" type="text" placeholder="Nome">
                                <label aria-hidden="true" tabindex="-1" for="first-name">Nome</label>
                            </div>
                            <div width="50%" class="formcontato-form-sobrenome">
                                <input required name="surname" aria-label="last name" id="last-name" autocomplete="family-name" type="text" placeholder="Sobrenome">
                                <label aria-hidden="true" tabindex="-1" for="last-name">Sobrenome</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div width="56%" class="formcontato-form-email">
                                <input required name="email" type="email" id="email">
                                <span aria-hidden="true" for="email" class="formcontato-form-email-label">*E-mail</span>
                                <div class="formcontato-form-email-error">Digite um e-mail válido e/ou um número de telefone
                                </div>
                            </div>
                            <div width="12%" class="formcontato-form-ou">e/ou</div>
                            <div class="formcontato-form-ddd">
                                <div width="30%" class="formcontato-form-ddd-select">
                                    <select required name="ddi" id="phone-code">
                                        <option value="93">afghanistan (افغانستان) 93</option>
                                        <option value="355">albania (shqipëri) 355</option>
                                        <option value="213">algeria (الجزائر) 213</option>
                                        <option value="1684">american samoa 1684</option>
                                        <option value="376">andorra 376</option>
                                        <option value="244">angola 244</option>
                                        <option value="1264">anguilla 1264</option>
                                        <option value="1268">antigua and barbuda 1268</option>
                                        <option value="54">argentina 54</option>
                                        <option value="374">armenia (հայաստան) 374</option>
                                        <option value="297">aruba 297</option>
                                        <option value="61">australia 61</option>
                                        <option value="43">austria (österreich) 43</option>
                                        <option value="994">azerbaijan (azərbaycan) 994</option>
                                        <option value="1242">bahamas 1242</option>
                                        <option value="973">bahrain
                                            (البحرين) 973
                                        </option>
                                        <option value="880">bangladesh (বাংলাদেশ) 880</option>
                                        <option value="1246">barbados 1246</option>
                                        <option value="375">belarus (беларусь) 375</option>
                                        <option value="32">belgium (belgië) 32</option>
                                        <option value="501">belize 501</option>
                                        <option value="229">benin (bénin) 229</option>
                                        <option value="1441">bermuda 1441</option>
                                        <option value="975">bhutan (འབྲུག) 975</option>
                                        <option value="591">bolivia 591</option>
                                        <option value="387">bosnia and herzegovina
                                            (босна и херцеговина) 387
                                        </option>
                                        <option value="267">botswana 267</option>
                                        <option value="55" selected>+55</option>
                                        <option value="246">british indian ocean territory 246
                                        </option>
                                        <option value="1284">british virgin islands 1284</option>
                                        <option value="673">brunei 673</option>
                                        <option value="359">bulgaria (българия) 359</option>
                                        <option value="226">burkina faso 226</option>
                                        <option value="257">burundi (uburundi) 257</option>
                                        <option value="855">cambodia (កម្ពុជា) 855</option>
                                        <option value="237">cameroon (cameroun) 237</option>
                                        <option value="1">canada 1</option>
                                        <option value="238">cape verde (kabu verdi) 238</option>
                                        <option value="599">caribbean netherlands 599</option>
                                        <option value="1345">cayman islands 1345</option>
                                        <option value="236">central african
                                            republic (république centrafricaine) 236
                                        </option>
                                        <option value="235">chad (tchad) 235</option>
                                        <option value="56">chile 56</option>
                                        <option value="86">china (中国) 86</option>
                                        <option value="61">christmas island 61</option>
                                        <option value="61">cocos (keeling) islands 61</option>
                                        <option value="57">colombia 57</option>
                                        <option value="269">comoros (جزر
                                            القمر) 269
                                        </option>
                                        <option value="243">congo (drc) (jamhuri
                                            ya
                                            kidemokrasia ya kongo) 243
                                        </option>
                                        <option value="242">congo (republic)
                                            (congo-brazzaville) 242
                                        </option>
                                        <option value="682">cook islands 682</option>
                                        <option value="506">costa rica 506</option>
                                        <option value="225">côte d’ivoire 225</option>
                                        <option value="385">croatia (hrvatska) 385</option>
                                        <option value="53">cuba 53</option>
                                        <option value="599">curaçao 599</option>
                                        <option value="357">cyprus (κύπρος) 357</option>
                                        <option value="420">czech republic (česká republika)
                                            420
                                        </option>
                                        <option value="45">denmark (danmark) 45</option>
                                        <option value="253">djibouti 253</option>
                                        <option value="1767">dominica 1767</option>
                                        <option value="1">dominican republic
                                            (república
                                            dominicana) 1
                                        </option>
                                        <option value="593">ecuador 593</option>
                                        <option value="20">egypt (مصر) 20
                                        </option>
                                        <option value="503">el salvador 503</option>
                                        <option value="240">equatorial guinea (guinea
                                            ecuatorial) 240
                                        </option>
                                        <option value="291">eritrea 291</option>
                                        <option value="372">estonia (eesti) 372</option>
                                        <option value="251">ethiopia 251</option>
                                        <option value="500">falkland islands (islas malvinas)
                                            500
                                        </option>
                                        <option value="298">faroe islands (føroyar) 298</option>
                                        <option value="679">fiji 679</option>
                                        <option value="358">finland (suomi) 358</option>
                                        <option value="33">france 33</option>
                                        <option value="594">french guiana (guyane française)
                                            594
                                        </option>
                                        <option value="689">french polynesia (polynésie
                                            française) 689
                                        </option>
                                        <option value="241">gabon 241</option>
                                        <option value="220">gambia 220</option>
                                        <option value="995">georgia (საქართველო) 995</option>
                                        <option value="49">germany (deutschland) 49</option>
                                        <option value="233">ghana (gaana) 233</option>
                                        <option value="350">gibraltar 350</option>
                                        <option value="30">greece (ελλάδα) 30</option>
                                        <option value="299">greenland (kalaallit nunaat) 299
                                        </option>
                                        <option value="1473">grenada 1473</option>
                                        <option value="590">guadeloupe 590</option>
                                        <option value="1671">guam 1671</option>
                                        <option value="502">guatemala 502</option>
                                        <option value="44">guernsey 44</option>
                                        <option value="224">guinea (guinée) 224</option>
                                        <option value="245">guinea-bissau (guiné bissau) 245
                                        </option>
                                        <option value="592">guyana 592</option>
                                        <option value="509">haiti 509</option>
                                        <option value="504">honduras 504</option>
                                        <option value="852">hong kong (香港) 852</option>
                                        <option value="36">hungary (magyarország) 36</option>
                                        <option value="354">iceland (ísland) 354</option>
                                        <option value="91">india (भारत) 91</option>
                                        <option value="62">indonesia 62</option>
                                        <option value="98">iran (ایران)
                                            98
                                        </option>
                                        <option value="964">iraq
                                            (العراق)
                                            964
                                        </option>
                                        <option value="353">ireland 353</option>
                                        <option value="44">isle of man 44</option>
                                        <option value="972">israel
                                            (ישראל) 972
                                        </option>
                                        <option value="39">italy (italia) 39</option>
                                        <option value="1876">jamaica 1876</option>
                                        <option value="81">japan (日本) 81</option>
                                        <option value="44">jersey 44</option>
                                        <option value="962">jordan
                                            (الأردن) 962
                                        </option>
                                        <option value="7">kazakhstan (казахстан) 7</option>
                                        <option value="254">kenya 254</option>
                                        <option value="686">kiribati 686</option>
                                        <option value="383">kosovo 383</option>
                                        <option value="965">kuwait
                                            (الكويت) 965
                                        </option>
                                        <option value="996">kyrgyzstan (кыргызстан) 996</option>
                                        <option value="856">laos (ລາວ) 856</option>
                                        <option value="371">latvia (latvija) 371</option>
                                        <option value="961">lebanon
                                            (لبنان) 961
                                        </option>
                                        <option value="266">lesotho 266</option>
                                        <option value="231">liberia 231</option>
                                        <option value="218">libya
                                            (ليبيا)
                                            218
                                        </option>
                                        <option value="423">liechtenstein 423</option>
                                        <option value="370">lithuania (lietuva) 370</option>
                                        <option value="352">luxembourg 352</option>
                                        <option value="853">macau (澳門) 853</option>
                                        <option value="389">macedonia (fyrom) (македонија) 389
                                        </option>
                                        <option value="261">madagascar (madagasikara) 261</option>
                                        <option value="265">malawi 265</option>
                                        <option value="60">malaysia 60</option>
                                        <option value="960">maldives 960</option>
                                        <option value="223">mali 223</option>
                                        <option value="356">malta 356</option>
                                        <option value="692">marshall islands 692</option>
                                        <option value="596">martinique 596</option>
                                        <option value="222">mauritania
                                            (موريتانيا) 222
                                        </option>
                                        <option value="230">mauritius (moris) 230</option>
                                        <option value="262">mayotte 262</option>
                                        <option value="52">mexico (méxico) 52</option>
                                        <option value="691">micronesia 691</option>
                                        <option value="373">moldova (republica moldova) 373</option>
                                        <option value="377">monaco 377</option>
                                        <option value="976">mongolia (монгол) 976</option>
                                        <option value="382">montenegro (crna gora) 382</option>
                                        <option value="1664">montserrat 1664</option>
                                        <option value="212">morocco
                                            (المغرب) 212
                                        </option>
                                        <option value="258">mozambique (moçambique) 258</option>
                                        <option value="95">myanmar (burma) (မြန်မာ) 95</option>
                                        <option value="264">namibia (namibië) 264</option>
                                        <option value="674">nauru 674</option>
                                        <option value="977">nepal (नेपाल) 977</option>
                                        <option value="31">netherlands (nederland) 31</option>
                                        <option value="687">new caledonia
                                            (nouvelle-calédonie)
                                            687
                                        </option>
                                        <option value="64">new zealand 64</option>
                                        <option value="505">nicaragua 505</option>
                                        <option value="227">niger (nijar) 227</option>
                                        <option value="234">nigeria 234</option>
                                        <option value="683">niue 683</option>
                                        <option value="672">norfolk island 672</option>
                                        <option value="850">north korea (조선 민주주의 인민 공화국) 850
                                        </option>
                                        <option value="1670">northern mariana islands 1670</option>
                                        <option value="47">norway (norge) 47</option>
                                        <option value="968">oman (عُمان)
                                            968
                                        </option>
                                        <option value="92">pakistan
                                            (پاکستان) 92
                                        </option>
                                        <option value="680">palau 680</option>
                                        <option value="970">palestine
                                            (فلسطين) 970
                                        </option>
                                        <option value="507">panama (panamá) 507</option>
                                        <option value="675">papua new guinea 675</option>
                                        <option value="595">paraguay 595</option>
                                        <option value="51">peru (perú) 51</option>
                                        <option value="63">philippines 63</option>
                                        <option value="48">poland (polska) 48</option>
                                        <option value="351">portugal 351</option>
                                        <option value="1">puerto rico 1</option>
                                        <option value="974">qatar (قطر)
                                            974
                                        </option>
                                        <option value="262">réunion (la réunion) 262</option>
                                        <option value="40">romania (românia) 40</option>
                                        <option value="7">russia (россия) 7</option>
                                        <option value="250">rwanda 250</option>
                                        <option value="590">saint barthélemy 590</option>
                                        <option value="290">saint helena 290</option>
                                        <option value="1869">saint kitts and nevis 1869</option>
                                        <option value="1758">saint lucia 1758</option>
                                        <option value="590">saint martin
                                            (saint-martin (partie française)) 590
                                        </option>
                                        <option value="508">saint pierre
                                            and
                                            miquelon (saint-pierre-et-miquelon) 508
                                        </option>
                                        <option value="1784">saint vincent and the grenadines
                                            1784
                                        </option>
                                        <option value="685">samoa 685</option>
                                        <option value="378">san marino 378</option>
                                        <option value="239">são tomé and príncipe
                                            (são
                                            tomé e príncipe) 239
                                        </option>
                                        <option value="966">saudi
                                            arabia (المملكة العربية السعودية) 966
                                        </option>
                                        <option value="221">senegal (sénégal) 221</option>
                                        <option value="381">serbia (србија) 381</option>
                                        <option value="248">seychelles 248</option>
                                        <option value="232">sierra leone 232</option>
                                        <option value="65">singapore 65</option>
                                        <option value="1721">sint maarten 1721</option>
                                        <option value="421">slovakia (slovensko) 421</option>
                                        <option value="386">slovenia (slovenija) 386</option>
                                        <option value="677">solomon islands 677</option>
                                        <option value="252">somalia (soomaaliya) 252</option>
                                        <option value="27">south africa 27</option>
                                        <option value="82">south korea (대한민국) 82</option>
                                        <option value="211">south sudan
                                            (جنوب السودان) 211
                                        </option>
                                        <option value="34">spain (españa) 34</option>
                                        <option value="94">sri lanka (ශ්&zwj;රී ලංකාව) 94</option>
                                        <option value="249">sudan
                                            (السودان) 249
                                        </option>
                                        <option value="597">suriname 597</option>
                                        <option value="47">svalbard and jan mayen 47</option>
                                        <option value="268">swaziland 268</option>
                                        <option value="46">sweden (sverige) 46</option>
                                        <option value="41">switzerland (schweiz) 41</option>
                                        <option value="963">syria
                                            (سوريا)
                                            963
                                        </option>
                                        <option value="886">taiwan (台灣) 886</option>
                                        <option value="992">tajikistan 992</option>
                                        <option value="255">tanzania 255</option>
                                        <option value="66">thailand (ไทย) 66</option>
                                        <option value="670">timor-leste 670</option>
                                        <option value="228">togo 228</option>
                                        <option value="690">tokelau 690</option>
                                        <option value="676">tonga 676</option>
                                        <option value="1868">trinidad and tobago 1868</option>
                                        <option value="216">tunisia
                                            (تونس) 216
                                        </option>
                                        <option value="90">turkey (türkiye) 90</option>
                                        <option value="993">turkmenistan 993</option>
                                        <option value="1649">turks and caicos islands 1649</option>
                                        <option value="688">tuvalu 688</option>
                                        <option value="1340">u.s. virgin islands 1340</option>
                                        <option value="256">uganda 256</option>
                                        <option value="380">ukraine (україна) 380</option>
                                        <option value="971">
                                            united arab emirates (الإمارات العربية المتحدة) 971
                                        </option>
                                        <option value="44">united kingdom 44</option>
                                        <option value="1">united states 1</option>
                                        <option value="598">uruguay 598</option>
                                        <option value="998">uzbekistan (oʻzbekiston) 998</option>
                                        <option value="678">vanuatu 678</option>
                                        <option value="39">vatican city (città del vaticano)
                                            39
                                        </option>
                                        <option value="58">venezuela 58</option>
                                        <option value="84">vietnam (việt nam) 84</option>
                                        <option value="681">wallis and futuna
                                            (wallis-et-futuna) 681
                                        </option>
                                        <option value="212">western sahara
                                            (الصحراء الغربية) 212
                                        </option>
                                        <option value="967">yemen
                                            (اليمن)
                                            967
                                        </option>
                                        <option value="260">zambia 260</option>
                                        <option value="263">zimbabwe 263</option>
                                        <option value="358">åland islands 358</option>
                                    </select>
                                    <label aria-hidden="true" tabindex="-1" aria-label="phone code" for="phone-code" class="formcontato-form-ddd-label">código</label>
                                </div>
                                <div width="70%" class="formcontato-form-telefone">
                                    <input name="telephone" type="tel" id="telephone" pattern="[0-9]*">
                                    <span aria-hidden="true" for="telephone" class="formcontato-form-telefone-label">Telefone</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div readonly class="formcontato-form-cidade">
                                <select required name="city" readonly>
                                    <option>Cidade da Boutique</option>
                                    <option selected value="são paulo">São Paulo</option>
                                </select>
                                <label aria-hidden="true" tabindex="-1" aria-label="city" for="city" class="formcontato-form-cidade-label">Cidade da boutique</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div readonly class="formcontato-form-address">
                                <select required name="address" readonly>
                                    <option>Endereço da boutique</option>
                                    <option selected value="são paulo">Shopping JK Iguatemi Avenida Presidente Juscelino
                                        Kubitschek
                                        2041 loja 148
                                    </option>
                                </select>
                                <label aria-hidden="true" tabindex="-1" aria-label="city" for="city" class="formcontato-form-address-label">Endereço da boutique</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div class="formcontato-form-message">
                                <label for="message" class="formcontato-form-message-label">Sua mensagem</label>
                                <textarea required placeholder="Escreva aqui a sua mensagem" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content chkbox">
                            <div class="formcontato-form-termos1">
                                <input required name="privacy_chk" type="checkbox" id="terms_chk" aria-required="true"><span for="terms_chk" value="false" class="formcontato-form-termos1-texto">*
                                    <span>Li e aceito os
                                        <a href="https://montecristo.com.br/politica-privacidade" class="formcontato-form-termos1-texto-link" rel="noopener" target="_blank">Termos e
                                            condições e a política de privacidade.</a>
                                    </span>
                                </span>
                            </div>
                            <div class="formcontato-form-termos2">
                                <input value="yes" type="checkbox" name="marketing_chk" id="marketing_chk">
                                <span for="marketing_chk" value="false" class="formcontato-form-termos2-texto">Aceito
                                    receber de
                                    Montecristo informações publicitárias sobre a rolex.</span>
                            </div>

                            <div class="formcontato-form-termos2">
                                <div class="h-captcha" data-sitekey="32e28ce0-7665-4447-a955-d595ba15762a"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="formcontato-form-buttons">
                            <button name="send" type="submit" class="formcontato-form-buttons-enviar">
                                Enviar
                            </button>
                            <button name="cancel" type="text" class="formcontato-form-buttons-cancelar">
                                <span class="formcontato-form-buttons-enviar-texto">Cancelar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php } ?>
</div>

<script>
    document.querySelector('#informacao-funcionamento') && (document.querySelector('#informacao-funcionamento').onclick =
        () => {
            document.querySelector('#opening-hours-list').toggleAttribute('hidden')
        })
</script>

</div><!-- End wrapper -->

<div class="clear"></div>

<!-- End content -->

<script src='https://js.hcaptcha.com/1/api.js' async defer></script>


<?php

if (isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
    $data = array(
        'secret' => "0x9cb1D987ca58eB1a1945238dCdDCEFc8E5f87CfE",
        'response' => $_POST['h-captcha-response']
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    // var_dump($response);
    $responseData = json_decode($response);
    if ($responseData->success) {
        // your success code goes here
    } else {
        // return error to user; they did not pass
    }
}

?>

<?php

if (isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
    $secret = '0x9cb1D987ca58eB1a1945238dCdDCEFc8E5f87CfE';
    $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret=' . $secret . '&response=' . $_POST['h-captcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        $succMsg = 'Your request have submitted successfully.';
    } else {
        $errMsg = 'Robot verification failed, please try again.';
    }
}
?>

<script>
    document.querySelector("#this-form").onsubmit = () => {

        let hcaptchaVal = document.querySelector('[name=h-captcha-response]').value;
        if (hcaptchaVal === "") {
            event.preventDefault();
            alert("Por favor, complete o Captcha");
        }
    };

    window.onload = () => {
        location.href == "https://montecristo.com.br/rolex/contato?enviado=true" && _satellite.track('contactForm')
    }
</script>


<?php
require_once APPPATH . 'views/html/rolex/footer.php';
require_once APPPATH . 'views/html/footer.php';
