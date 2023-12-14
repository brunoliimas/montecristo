<?php

$categorias =
    $this->db->select('*')
        ->from('categoria')
        ->where('categoria.st_ativo','S')
        ->where('categoria.st_lista_menu','S')
        ->where('categoria.categoria_id = 1')
        ->order_by('ordem')
        // ->order_by()
        ->get()
        ->result();
        
$vitrineitem = array();
$itens = array('0');

foreach($categorias as $categoria){

    $item =
        $this->db->select('item.*')
            ->from('item')
            ->where('item.st_ativo','S')
            ->join('itemcategoria b','b.item_id = item.id and b.categoria_id = '.$categoria->id)
            ->where('item.id NOT IN ('.join(',',$itens).')')
            ->where('EXISTS( select c.id from itemcategoria as c where c.item_id = item.id AND c.categoria_id=52 LIMIT 1 )')
            // ->order_by('item.data_cadastro desc')
            ->limit(1)
            ->get()->row();
    

    if($item){
        $vitrineitem[] = array(
            'categoria' => $categoria->nome,
            'imagem' => base_url('admin/upload/item/'.$item->imagem),
            'link' => 'produtos/categoria/'.$categoria->slug
        );
        $itens[] = $item->id;
    }
    else {

        $item =
            $this->db->select('item.*')
                ->from('item')
                ->where('item.st_ativo','S')
                ->join('itemcategoria b','b.item_id = item.id and b.categoria_id = '.$categoria->id)
                ->where('item.id NOT IN ('.join(',',$itens).')')
                // ->order_by('item.data_cadastro desc')
                ->limit(1)
                ->get()->row();

        if($item){
            $vitrineitem[] = array(
                'categoria' => $categoria->nome,
                'imagem' => base_url('admin/upload/item/'.$item->imagem),
                'link' => 'produtos/categoria/'.$categoria->slug
            );
            $itens[] = $item->id;
        }
    }
}
?>
<div class="carrossel-produtos-home">
    <div class="container swiper-home">
        <h2>Joias</h2>
        <hr>
        <div class="swiper-container swiper-produtos-home"> 
            <div class="swiper-wrapper">
                <?php
                foreach(array_chunk($vitrineitem,4) as $bloco){

                    if(sizeof($bloco) != 4){
                        break;
                    }

                    foreach($bloco as $vitrineitem){
                        $_view = $this->load->view(
                            'html/includes/home/carrossel-produtos-thumb.php',
                                array(
                                    'categoria' => $vitrineitem['categoria'],
                                    'imagem' => $vitrineitem['imagem'],
                                    'link' => $vitrineitem['link']
                                ),
                            true
                        );
                        print $_view;
                    }
                }
                ?>
            </div>
            <div class="swiper-button-prev swiper-navigation-style">
                <i class="fa fa-chevron-left navigation-style" aria-hidden="true"></i>
                <!-- &lsaquo; -->
            </div>
            <div class="swiper-button-next swiper-navigation-style">
                <i class="fa fa-chevron-right navigation-style" aria-hidden="true"></i>
                <!-- &rsaquo; -->
            </div>
        </div>
    </div>
</div>