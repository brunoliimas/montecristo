<div class="home-newsletter" id="inscrever-se">
    <p>Transformamos joias em conexões para a vida. Assine nossa newsletter e conheça mais do nosso gentil desejo de
        fazer parte da sua história</p>
    <div id="_box_form_news" style="display:table;margin:0 auto;">
        <form action="<?php echo site_url('news/assinar') ?>" class="simpleForm formNews form-inline" id="formNews"
            method="post">
            <span style="display:none;"><input type="text" name="ident" value="" /></span>
            <input type="hidden" name="identificador" value="Cadastro de Newsletter">
            <input type="text" class="form-control" placeholder="email" name="email" />
            <button type="submit" class="btn btn-primary">Assinar</button>
        </form>
    </div>
</div>