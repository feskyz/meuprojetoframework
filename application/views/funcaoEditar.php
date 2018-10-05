<div class="container">

    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Editar Função</h2>
    <div class="form-group">
        <?php echo form_open('funcao/atualizar'); ?>
        <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
        <label for="nomefuncao">Nome </label>
        <input name="nomefuncao" type="text" id="nomefuncao" class="form-control" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
    </div>
    <p></p>
    
    <p></p>
    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <?php form_close(); ?>
    <p></p>
    <a href="<?php echo base_url() . 'funcao' ?>">Voltar</a>
</div>        


