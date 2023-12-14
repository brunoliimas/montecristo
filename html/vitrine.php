<?php
if (isset($banner_categoria)) $preload = '<img src="' . base_url('admin/' . $banner_categoria->imagem_tema . '?v=20220319') . '" style="visibility:hidden;position:absolute;z-index:-2;top:0;left:0;width:100%;"/>';
if (isset($banner_colecao)) $preload = '<img src="' . base_url('admin/' . $banner_colecao->imagem_big . '?v=20220319') . '" style="visibility:hidden;position:absolute;z-index:-2;top:0;left:0;width:100%;"/>';
require_once 'header.php';

ob_start();
// require_once 'banners.php';
$this->load->view('html/includes/listagem/banner-categoria.php');
$this->load->view('html/includes/listagem/banner-colecao.php');
?>

<button class="toggle-menu hidden-sm hidden-md hidden-lg" aria-label="Menu" role="button"></button>


<section class="container produtos-container" id="_produtos_container">
    <div class="row">

        <div class="col-sm-2">
            <?php
                print '<input type="hidden" id="categoria_id" value="' . @$categoria->id . '">';
                require 'includes/filtro-caracteristicas.php';
            ?>
        </div>
        <div class="col-sm-10">

            <?php
            $i = 0;
            $iimagem = 0;
            $x = 0;

            while (true) {

                if (!isset($produtos[$x])) {
                    break;
                }

                print "<div class='row produtos-row'>";

                for ($a = 0; $a < 3; $a++) {

                    if (!isset($produtos[$x])) {
                        break;
                    }

                    $this->load->view('html/includes/produto.php', array('row' => $produtos[$x]));
                    $x++;
                }

                print "</div>";
            }

            $this->pagination->initialize(array(
                'base_url' => site_url(array('joalheria', $vitrine->slug)),
                'uri_segment' => 3,
                'total_rows' => $total_rows,
                'per_page' => 15,
                'page_query_string' => FALSE,
                'use_page_numbers' => true
            ));

            print $this->pagination->create_links();

            ?>
            <!-- <a href="<?php echo site_url("vitrine/scroll/1/?" . http_build_query(
                                array(
                                    'vitrine_id' => @$vitrine->id,
                                    'categoria_id' => @$categoria->id,
                                    'caracvalor' => array_merge(is_array(@$caracvalor) ? $caracvalor : array(), is_array(@$caracteristicas_selecionadas) ? $caracteristicas_selecionadas : array()),
                                    'colecao' => @$colecao,
                                    'offset' => isset($offset) ? $offset : null
                                )
                            )) ?>" class="next-page" xstyle="display:none"></a> -->
        </div>
    </div>

</section>
<?php
require_once 'footer.php';


if ($ancora) {
    echo '<script>
    $(document).ready( function(){
        setTimeout( function(){
            $("html, body").animate({
                scrollTop: $("#_produtos_container").offset().top
            }, 1000);
        },700);
    });
    </script>';
}

$x = ob_get_contents();
ob_end_clean();
echo $x;
