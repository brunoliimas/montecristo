<?php if (@$banners  && sizeof($banners) > 0) :

?>
    <div id="banner-topo" class="carousel slide">
        <div class="carousel-inner">
            <?php

            $i = 0;
            foreach ($banners as $row) :
            ?>
                <div class="item <?php echo $i == 0 ? 'active' : '' ?>" style="
                 background-repeat:no-repeat;
                 min-height:450px;
                 background-position: center;
                 background-color:#3F3F3F;
             <?php
                if ($row->imagem_tema <> '') {
                ?>
                     background-image:url('<?php echo base_url('admin/upload/banner/' . $row->imagem_tema . '?v=20220319') ?>');
                     /*background-attachment: fixed;*/
                     /*background-size: cover;*/
                 <?php
                }
                    ?>
            ">
                    <div class="container">
                        <div class="row">
                            <!--div class="col-lg-offset-2 col-lg-6 col-md-8"-->
                            <div class="col-lg-6 col-md-8">
                                <!--img src="<?php echo base_url('admin/' . $row->img1 . '?v=20220319') ?>" alt="<?php echo $row->titulo ?>"-->
                                <div class="carousel-caption">
                                    <h3>
                                        <?php
                                        echo anchor($row->link, $row->titulo);
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
<?php
endif;
