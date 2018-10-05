<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar Usuario</h2>
       
        <?php echo form_open('usuario/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idusuario" id="nomeusuario" value="<?php echo $usuarioEditar[0]->nomeusuario; ?>">
            <label for="nomeusuario">Nome Usuario</label>
            <input name="nomeusuario" type="text" id="nomeusuario" class="col-sm-3 col-form-label form-control" value="<?php echo $usuarioEditar[0]->nomeusuario; ?>" required/>
            </div>
        <p></p>
            <div class="form-group">
            <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
            <label for="user">Usuario</label>
            <input name="user" type="text" id="user" class="col-sm-3 col-form-label form-control" value="<?php echo $usuarioEditar[0]->user; ?>" required/>
            </div>
            <p></p>
            
            <div class="form-group">
            <label for="perfilAcesso">Perfil Acesso:</label>
            <select name="perfilAcesso" type="text" class="col-sm-6 form-control"  id="perfilAcesso">          
             <option value=""></option>
            <option value="ADM">Administrador</option>
            <option value="USER">Usuário</option>
            </select>
         </div>       
           
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'usuario'; ?>">Cancelar</a>
       
        </div>
   