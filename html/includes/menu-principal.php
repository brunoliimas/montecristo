<div class="menu-principal hidden-xs hidden-sm">
    <div class="menu-principal-itens">
        <ul class="list-inline">
            <li>
                <a href="<?php echo site_url() ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('joias') ?>" id="menu-joias">Joias</a>
            </li>
            <li>
                <a href="<?php echo site_url('rolex') ?>">Rolex</a>
            </li>
            <li>
                <a href="<?php echo site_url('relogios') ?>" id="menu-relogios">Rel&oacute;gios</a>
            </li>
            <li>
                <a href="<?php echo site_url('acessorios') ?>" id="menu-acessorios">Acessórios</a>
            </li>
            <li>
                <a href="<?php echo site_url('colecoes') ?>" id="menu-colecoes">Coleções</a>
            </li>
            <li>
                <a href="<?php echo site_url('tutorial') ?>" id="menu-educacional">Tutorial</a>
            </li>
            <li>
                <a href="#" id="menu-universo">Universo</a>
            </li>
            <li>
                <a href="<?php echo site_url('catalogo') ?>">Catálogo</a>
            </li>
            <li>
                <a href="<?php echo site_url('sale') ?>">Sale</a>
            </li>
        </ul>
    </div>

    <ul class="menu-principal-auxiliar" id="menu-joias-sub">
        <?php
        foreach (get_categorias(1) as $row) : ?>
            <li><a href="<?php echo strtolower(site_url('joias/' . strtolower($row->slug))) ?>">
                    <?php echo $row->nome; ?></a>
            </li>
        <?php endforeach;
        ?>
    </ul>

    <ul class="menu-principal-auxiliar" id="menu-relogios-sub">
        <?php
        foreach (get_categorias(2) as $row) :
            if (strtolower($row->slug) == 'rolex') { ?>
                <li><a href="<?php echo site_url(strtolower($row->slug)) ?>">
                        <?php echo $row->nome; ?></a>
                </li>
            <?php } else {
            ?>
                <li><a href="<?php echo site_url('relogios/' . strtolower($row->slug)) ?>">
                        <?php echo $row->nome; ?></a>
                </li>
        <?php }
        endforeach;
        ?>
    </ul>

    <ul class="menu-principal-auxiliar" id="menu-acessorios-sub">
        <?php
        foreach (get_categorias(32) as $row) : ?>
            <li><a href="<?php echo site_url('acessorios/' . strtolower($row->slug)) ?>">
                    <?php echo $row->nome; ?></a>
            </li>
        <?php endforeach;
        ?>
    </ul>

    <ul class="menu-principal-auxiliar" id="menu-universo-sub">
        <li><a href="<?php echo site_url('nossa-historia') ?>">Nossa história</a></li>
        <li><a href="<?php echo site_url('blog') ?>">Journal</a></li>
    </ul>

</div>

<div class="menu-principal-mobile hidden-md hidden-lg">
    <picture>
        <source srcset="<?php echo base_url("img/menu.webp") ?>">
        <img onclick="openMenuMobile();" class="menu-icon" src="<?php echo base_url("img/menu.png"); ?>" title="Abrir menu lateral" alt="Menu lateral" width="24" height="18" loading="lazy">
    </picture>
    <span class="btn-buscar screen-reader-text">
        <span></span>
        <i class="fa fa-search"></i>
    </span>
</div>

<div id="menu_itens_mob" style='display:none;' class="menu-itens-mob">
    <div class="col-xs-3"></div>
    <div class="redes-links-menu-mob col-xs-12" style="padding-bottom:15px;">
        <ul class="social-area cf">
            <li>
                <a aria-label="Facebook" href="https://www.facebook.com/pages/Montecristo-Joalheria/378705558916382" title="Facebook" rel="noopener">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a aria-label="Instagram" href="http://instagram.com/montecristo.joalheria" class="btn-instagram" title="Instagram" rel="noopener">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a aria-label="Pinterest" href="http://www.pinterest.com/mjoalheria/" class="btn-pinterest" title="Pinterest" rel="noopener">
                    <i class="fa fa-pinterest"></i>
                </a>
            </li>
            <li>
                <a href="#inscrever-se" aria-label="Newsletter">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
            <li>
                <a aria-label="Contato" href="<?php echo site_url("contato"); ?>" class="btn-contato" title="Contato" rel="noopener">
                    <i class="fa fa-phone "></i>
                </a>
            </li>
        </ul>
    </div>
    <ul>
        <li>
            <span href="#" id="menu-joias-mob" onclick="openSubMenuMobile('joias');">Joias</span>
            <div class="sub-menu-mob">
                <ul class="menu-principal-auxiliar-mob" id="menu-joias-mob-sub" style="display: none;">
                    <?php
                    foreach (get_categorias(1) as $row) : ?>
                        <li><a href="<?php echo strtolower(site_url('joias/' . strtolower($row->slug))) ?>">
                                <?php echo $row->nome; ?></a>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <a href="<?php echo site_url('rolex') ?>">Rolex</a>
        </li>
        <li>
            <a href="#" id="menu-relogios-mob" onclick="openSubMenuMobile('relogios');">Rel&oacute;gios</a>
            <div class="sub-menu-mob">
                <ul class="menu-principal-auxiliar-mob" id="menu-relogios-mob-sub" style="display: none;">
                    <?php
                    foreach (get_categorias(2) as $row) : ?>
                        <li><a href="<?php echo site_url('relogios/' . strtolower($row->slug)) ?>">
                                <?php echo $row->nome; ?></a>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
        </li>

        <li>
            <span id="menu-acessorios-mob" onclick="openSubMenuMobile('acessorios');">Acessórios</span>
            <div class="sub-menu-mob">
                <ul class="menu-principal-auxiliar-mob" id="menu-acessorios-mob-sub" style="display: none;">
                    <?php
                    foreach (get_categorias(32) as $row) : ?>
                        <li><a href="<?php echo site_url('acessorios/' . strtolower($row->slug)) ?>">
                                <?php echo $row->nome; ?></a>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <a href="<?php echo site_url('colecoes') ?>" id="menu-colecoes-mob">Coleções</a>
        </li>
        <li>
            <a href="<?php echo site_url('tutorial') ?>" id="menu-educacional-mob">Tutorial</a>
        </li>
        <li>
            <span onclick="openSubMenuMobile('universo');" id="menu-universo-mob">Universo</span>
            <div class="sub-menu-mob">
                <ul class="menu-principal-auxiliar-mob" id="menu-universo-mob-sub" style="display: none;">
                    <li><a href="<?php echo site_url('nossa-historia') ?>">Nossa história</a></li>
                    <li><a href="<?php echo site_url('blog') ?>">Journal</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="<?php echo site_url('catalogo') ?>">Catálogo</a>
        </li>
        <li>
            <a href="<?php echo site_url('sale') ?>">Sale</a>
        </li>
    </ul>
</div>