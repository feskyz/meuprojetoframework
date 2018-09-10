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
            <p></p>
            <input class="btn btn-primary" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() . 'home' ; ?>">Voltar</a>
         </div>        
    

