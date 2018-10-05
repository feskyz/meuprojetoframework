<div class="container">

    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Editar Contato</h2>
    <div class="form-group">
        <?php echo form_open('contato/atualizar'); ?>
        <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
        <label for="nome">Nome </label>
        <input name="nome" type="text" id="nome" class="form-control" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
    </div>
    <p></p>
    <label>e-mail</label>
    <input name="email" type="email" class="form-control" value="<?php echo $contatoEditar[0]->email; ?>" required/>
    <div class="form-group">
        <label for="funcao">Função</label>
        <select class="col-sm-3 col-form-label form-control" id="funcao" name="idfuncao" required>
            <option> Selecionar Função </option> 
            <?php foreach ($funcao as $funcao) : ?>
                <option value="<?php echo $funcao->idfuncao; ?>" <?php if ($funcao->idfuncao===$contatoEditar[0]->idfuncao) echo 'selected'?> ><?php echo $funcao->nomefuncao; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <p></p>

    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <?php form_close(); ?>
    <p></p>
    <a href="<?php echo base_url() . 'contato' ?>">Voltar</a>
</div>        


