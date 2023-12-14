<?php
require_once 'header.php';
$pasta = base_url('_catalogo') . '/';
?>

<!-- start custom fonts -->
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Fauna+One">
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:400,700">
<!-- end custom fonts -->

<!-- start needed css style files -->
<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip.css">
<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip-custom.css">
<!-- end needed css style files -->

<!-- start needed js libraries -->
<!--script src="<?php echo $pasta ?>js/jquery-3.0.0.min.js"></script-->
<script src="<?php echo $pasta ?>js/pageflip5-min.js"></script>
<script src="<?php echo $pasta ?>js/key.js"></script>
<!-- end needed js libraries -->

<!-- div fix for FullScale needed if the book have top margin -->
<style>
    .pageflip-container {
        padding-top: 1px;
    }
</style>

<div id="pageflip"></div>
<!-- end embed pageflip -->

<script>
    var $pageflip = $('#pageflip'),
        pageflip = $pageflip.pageflip();
</script>

<?php require_once 'footer.php' ?>