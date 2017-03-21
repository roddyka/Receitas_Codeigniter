<div id="cabecalho" class="gradient0 sombra radious">
    <?php echo img('assets/imgs/logomarca.png '); ?>

    <div id="formbusca">
        <?php echo form_open(base_url().'index.php/receitas/buscar');
            echo form_label("Buscar", "busca");
            $data = array('name'=>'busca','id'=>'busca','class'=>'campo_busca');
            echo form_input($data);
            echo form_submit('button_buscar','Buscar');
            echo form_close();
       
        ?>
    </div>
</div>
<br class="clear-both">
