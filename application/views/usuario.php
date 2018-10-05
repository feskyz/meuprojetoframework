 <!DOCTYPE html>
 
    <div class="container">
 
        <div class="row"></div>
 
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
<!--        <div class="col-xs-10 col-sm-10 col-lg-6">-->
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
        <h2>Usuario</h2>
        <?php echo form_open('usuario/inserir'); ?>
 <div class="form-group">
            <label for="nomeusuario">Nome Usuario:</label>
            <input name="nomeusuario" type="text" class="col-sm-6 form-control"  id="nomeusuario">
        </div>
        
         <div class="form-group">
            <label for="user">User:</label>
            <input name="user" type="text" class="col-sm-6 form-control"  id="user">
        </div>
        
         <div class="form-group">
            <label for="senha">Senha:</label>
            <input name="senha" type="password" required placeholder="Mínimo 8 caracteres" minlength="8" class="col-sm-6 form-control"  id="senha">
        </div>
        
         <div class="form-group">
            <label for="perfilAcesso">Perfil Acesso:</label>
            <select name="perfilAcesso" type="text" class="col-sm-6 form-control"  id="perfilAcesso">          
             <option value=""></option>
            <option value="ADM">Administrador</option>
            <option value="USER">Usuário</option>
            </select>
         </div>       
        <p></p>
        
        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <input class="btn btn-light" type="reset" value="Limpar"/>
        <input class="btn btn-dark" id="btn-lista" value="Listar Contatos"/>
        <?php form_close(); ?>
        <p></p>
 
 
 
 
  <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-dark">Usuário</th>
                <th class="table-dark">User</th>
                <th class="table-dark">Perfil Acesso</th>
                <th class="table-dark">Funções</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if ($usuario == FALSE): ?>
                <tr><td>Nenhum usuario encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeusuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'usuario/editar/' . $row->idusuario;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'usuario/deletar/' . $row->idusuario;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
    </table>
 
    <p></p>
    <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    </div>
        </div>
   
    <script type="text/javascript">
         $("#btn-lista").click(function () {
            $("#div-lista").toggleClass("hide");
        });
//        $(document).ready(function () {
//        $('#funcao').DataTable({
//            language: {
//                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
//            },
//             iDisplayLength: 10,  
//             dom: 'Bfrtip',
//    buttons: [
//        'copy',
//        'excel',
//        'print',
//        'pdf'
//    ]
//        });
//    });
</script>