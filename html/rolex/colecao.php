<?php
require_once APPPATH . 'views/html/rolex/head.php';
require_once APPPATH . 'views/html/rolex/header.php';
?>

<script id="rlx-corner">
(function(b, c, a, d, f, g, h, k, l) {
    var e = c.getElementsByTagName(a)[0];
    a = c.createElement(a);
    var m = function(a) {
        delete b[d];
        a(c.getElementById(f), [g, k, h, l])
    };
    b[d] = b[d] || m;
    a.async = !0;
    a.src = "https://corners.rolex.com/rlx-corner.js";
    e.parentNode.insertBefore(a, e)
})(window, document, "script", "rlxCornerCallback", "rlx-corner", "cfc7ad7d527c12a9bbf73cb6b91b74f3",
    "https://montecristo.com.br/politica-privacidade", "pt-br", "watches");
</script>

<?php require_once APPPATH . 'views/html/rolex/footer.php' ?>
<?php require_once APPPATH . 'views/html/footer.php' ?>