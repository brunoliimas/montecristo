<?php require_once 'header.php';
echo '<link rel="stylesheet" type="text/css" href="' . base_url('css/jquery.fancybox.min.css') . '" />';
?>

<style>
.timeline .fancybox-skin {
    background-color: #fff;
    background-image: none;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    padding-top: 25px !important;
}

.timeline .fancybox-title {
    margin-bottom: 15px;
    padding: 0px;
    text-align: center;
    font-size: 20px;
    font-size: 2.5rem;
    line-height: 0.8;
    color: #3a3b3c;
    color: #626365;
    height: 40px;
    font-family: ''Open Sans', sans-serif';
}

.timeline .fancybox-title span {
    border-bottom: 1px solid #626365;
}

.timeline .fancybox-legend {
    text-align: center;
    color: #3a3b3c;
    font-size: 18px;
    padding: 20px;
    font-weight: normal;
    display: none;
}

.timeline .fancybox-next {
    right: -85px;
    top: -5%;
    top: -20%;
    display: block;
}

.timeline .fancybox-prev {
    left: -85px;
    top: -5%;
    top: -20%;
    display: block;
}

.timeline .fancybox-nav span {
    font-size: 30px !important;
    font-size: 3.5rem;
    line-height: 0.8;
    color: #3a3b3c;
    height: 40px;
    color: #fff;
    text-align: center;
    font-family: ''Open Sans', sans-serif';
}

.timeline .fancybox-next span {
    background-image: url(<?php echo base_url('img/arrow-next.gif') ?>);
    width: 32px;
    height: 63px;
    background-position: 0 -63px;

    width: 32px;
    height: 127px;
    background-position: 0 35px;
    background-repeat: repeat-x;
    text-indent: -20px;
}

.timeline .fancybox-prev span {
    background-image: url(<?php echo base_url('img/arrow-prev.gif') ?>);
    width: 32px;
    height: 63px;
    background-position: 0 -63px;


    width: 32px;
    height: 127px;
    background-position: 0 35px;
    background-repeat: repeat-x;
    text-indent: -14px;
}

.timeline .fancybox-nav {
    width: 90px;
}

.timeline .fancybox-nav span {
    visibility: visible !important;
}

.timeline .fancybox-inner {
    text-align: center;
}

.timeline .fancybox-inner img {
    max-width: 100%;
}

.timeline .fancybox-inner p {
    padding: 10px;
}

.chrono-title {
    padding-top: 15px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 20px;
    font-size: 2.5rem;
    line-height: 0.8;
    color: #3a3b3c;
    height: 40px;
}

.chrono-arrow-title {
    font-size: 30px !important;
    font-size: 3.5rem;
    line-height: 0.8;
    color: #3a3b3c;
    height: 40px;
    color: #fff;
    text-align: center;
}

.timeline .chrono-separator {
    margin-bottom: 15px;
    text-align: center;
}

.timeline .chrono-separator {
    display: inline-block;
    display: block;
    zoom: 1;
    height: 1px;
    background: #979797;
    width: 50px;
    margin: auto;
    margin-bottom: 15px;
}

.chrono-arrow-wrapper--prev {
    left: -110px;
}

.chrono-arrow-wrapper--next {
    right: -110px;
}

.chrono-arrow-wrapper,
.chrono-arrow-wrapper--prev,
.chrono-arrow-wrapper--next {
    position: absolute;
    top: 0;
    top: 25%;
    top: 30%;
    width: 110px;
}

.chrono-arrow .after {
    content: '';
    display: none;
    visibility: hidden;
    height: 120px;
    width: 100%;
    background: red;
    border-top: solid 1px #747576;
    border-bottom: solid 1px #747576;
    border-bottom: solid 1px #fff;
}

.back-link-container {
    background: transparent !important;
    padding-top: 0px !important;
}
</style>


<!-- container start here -->
<section class="container" style="padding-top:26px;">
    <div class="inside-container">
        <ul class="products">
            <?php foreach ($banners_timeline as $row) : ?>
            <li class="size86 box">
                <a xhref="<?php echo site_url('timeline/itens/' . $row->id) ?>" rel="group"
                    href="<?php echo base_url('admin/upload/timeline/' . $row->img2) ?>" class="js-itens"
                    title="<?php echo strtolower($row->custom1) ?>"
                    fancybox-title="<?php echo strtolower($row->custom1) ?>">
                    <!-- WEBP DESKTOP -->
                    <source srcset="<?php echo base_url('admin/upload/timeline/' . $row->img1) ?>" type="image/webp">
                    <!-- PNG DESKTOP -->
                    <source
                        srcset="<?php echo image_compatibility(base_url('admin/upload/timeline/' . $row->img1), 'jpg'); ?>"
                        type="image/png">
                    <!-- DEFAULT -->
                    <img style="width:100%;"
                        src="<?php echo image_compatibility(base_url('admin/upload/timeline/' . $row->img1), 'jpg'); ?>"
                        alt="<?php echo $row->titulo ?>">
                    <h2 style="display:none"><?php echo $row->titulo ?></h2>
                    <!--div class="txt">
<div class="txt-inside">

<span class="ano"><?php echo strtolower($row->custom1) ?></span>
<span class="historia"><?php echo $row->titulo ?></span>
</div>
</div-->

                </a>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>

    <div class="tmp" xstyle="display:none">
    </div>

    <div class="bktop">
        <a href="#" title="Voltar Ao Topo">Voltar Ao Topo</a>
    </div>
</section>
<!-- container end here -->
<?php require_once 'footer.php' ?>