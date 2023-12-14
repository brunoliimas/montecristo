<li class="<?php echo $class ?> box">
    <div class="more_info" style="border:0px" >
        <?php if($class == 'size86'): ?>
            <img class="lazy" data-original="<?php echo timthumb_url('admin/upload/colecao/'.$row->imagem, '668', '496') ?>" xdata-original="<?php echo base_url('admin/upload/colecao/'.$row->imagem, '668', '496') ?>" alt="<?php echo $row->nome ?>" />
        <?php elseif($class == 'size43'): ?>
            <img class="lazy" data-original="<?php echo timthumb_url('admin/upload/colecao/'.$row->imagem, '324', '238') ?>" xdata-original="<?php echo base_url('admin/upload/colecao/'.$row->imagem, '324', '238') ?>" alt="<?php echo $row->nome ?>" />
        <?php endif;?>

        <div class="more_info_txt more_info_txt_clean" width="100%" height="100%" style="display:none">
            <p></p>
        </div>
    </div>
</li>