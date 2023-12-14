<div class="posts-list">

    <?php if ((sizeof(@$posts) == 0) && (!@$post)): ?>
        <div class="alert alert-danger">Nenhum post nessa categoria ...</div>
    <?php endif; ?>

    <!-- POST -->
    <?php if(@$post): ?>

        <a href="<?php echo site_url('blog/artigo/'.$post->chave)?>" data-id="<?php echo $post->id ?>"  class="post-item js-post-det">

            <?php list($year, $month, $day) = explode('-', substr($post->data_publicacao,0,10)); ?>

            <a class="post-item-date">
                <span class="year"><?php echo $year ?></span>
                <span class="day-month"><?php echo $day ?>/<?php echo $month ?></span>
            </a>

            <div class="post-item-title">
                <!-- <span class="tags">
                    <?php // $blogtags = get_blogtags($post->id); ?>
                    <?php // foreach($blogtags as $blogtag): ?>
                        <a href="<?php // echo site_url('blog/tag/'.$blogtag->slug); ?>">• <?php // echo $blogtag->nome ?></a>
                    <?php // endforeach; ?>
                </span> -->
                <h2><?php echo $post->titulo ?></h2>
            </div>

            <div class="post-item-content">

                <?php if($post->img1 != ''): ?>
                    <img src="<?php echo base_url('admin/upload/post/'.$post->img1) ?>" />
                <?php endif; ?>

                <div class="post-item-content-txt js-post-container-<?php echo $post->id ?>">
                    <?php
                    echo $post->conteudo;
                    ?>
                </div>
            </div>

        </div>

    <?php endif; ?>

    <!--  -->
    <?php foreach(is_array(@$posts)?$posts:array() as $post): ?>

        <a href="<?php echo site_url('blog/artigo/'.$post->chave)?>" data-id="<?php echo $post->id ?>" class="post-item js-post-det">

            <?php list($year, $month, $day) = explode('-', substr($post->data_publicacao,0,10)); ?>

            <div class="post-item-date">
                <span class="year"><?php echo $year ?></span>
                <span class="day-month"><?php echo $day ?>/<?php echo $month ?></span>
            </div>

            <div class="post-item-title">
                <!-- <span class="tags">
                    <?php // $blogtags = get_blogtags($post->id); ?>
                    <?php // foreach($blogtags as $blogtag): ?>
                        <a href="<?php // echo site_url('blog/tag/'.$blogtag->slug); ?>">• <?php // echo $blogtag->nome ?></a>
                    <?php // endforeach; ?>
                </span> -->
                <h2><?php echo $post->titulo ?></h2>
            </div>

            <div class="post-item-content">

                <?php if($post->img1 != ''): ?>
                    <img src="<?php echo base_url('admin/upload/post/'.$post->img1) ?>" />
                <?php endif; ?>

                <div class="post-item-content-txt js-post-container-<?php echo $post->id ?>">
                    <p>
                        <?php echo character_limiter(strip_tags($post->conteudo), 227, '...' ); ?>
                    </p>
                </div>
            </div>

            <div class="post-item-more">
                <?php if($post->link != ''): ?>
                    <a href="<?php echo prep_url($post->link) ?>" target="_blank">Ver mais</a>
                <?php else: ?>
                    <span>Ver mais</span>
                <?php endif; ?>

            </div>

        </a>

    <?php endforeach; ?>


    <!--div class="post-item">

        <div class="post-item-date">
            <span class="year">2014</span>
            <span class="day-month">29/12</span>
        </div>

        <div class="post-item-title">
            <span class="tags">
                <a href="#">• Crianças</a> <a href="#">• Crianças</a> <a href="#">• Crianças</a>
            </span>
            <h2>ROLEX APOIA CRIANÇAS NECESSITADAS DO NORDESTE</h2>
        </div>

        <br clear="all">

        <div class="post-item-content">

            <img src="<?php echo base_url('admin/upload/post/img1-asdfasdf-183-141.webp?x') ?>" />

            <div class="post-item-content-txt">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor odio, vestibulum et dui in, fermentum eleifend eros. Integer placerat, diam vel porttitor tempor, est velit vestibulum ligula, eu venenatis nulla metus id tellus. Vivamus sed molestie purus. Aliquam luctus volutpat lectus non facilisis. Praesent eu sapien ac dui sagittis lobortis. Nulla diam massa, eleifend id augue id, tempus dictum odio. Etiam pharetra augue non aliquet placerat.
                </p>
            </div>
        </div>

        <div class="post-item-more">
            <a href="#">Ver mais</a>
        </div>

    </div>

    <div class="post-item">

        <div class="post-item-date">
            <span class="year">2014</span>
            <span class="day-month">29/12</span>
        </div>

        <div class="post-item-title">
            <span class="tags">
                <a href="#">• Crianças</a> <a href="#">• Crianças</a> <a href="#">• Crianças</a>
            </span>
            <h2>ROLEX APOIA CRIANÇAS NECESSITADAS DO NORDESTE</h2>
        </div>

        <br clear="all">

        <div class="post-item-content">

            <img src="<?php echo base_url('admin/upload/post/img1-asdfasdf-183-141.webp?x') ?>" />

            <div class="post-item-content-txt">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tortor odio, vestibulum et dui in, fermentum eleifend eros. Integer placerat, diam vel porttitor tempor, est velit vestibulum ligula, eu venenatis nulla metus id tellus. Vivamus sed molestie purus. Aliquam luctus volutpat lectus non facilisis. Praesent eu sapien ac dui sagittis lobortis. Nulla diam massa, eleifend id augue id, tempus dictum odio. Etiam pharetra augue non aliquet placerat.
                </p>
            </div>
        </div>

        <div class="post-item-more">
            <a href="#">Ver mais</a>
        </div>

    </div-->

</div>

