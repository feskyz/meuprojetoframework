<!DOCTYPE html>
 
    <div class="container">
 
        <div class="row"></div>
 
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
        <h2>Função</h2>
        <?php echo form_open('funcao/inserir'); ?>
        <div class="form-group">
            <label for="nomefuncao">Nome</label>
            <input name="nomefuncao" type="text" class="col-sm-6 form-control"  id="nomefuncao">
        </div>
 
<!--        <div class="form-group">
            <label for="email">e-mail</label>
            <input class="col-sm-3 col-form-label form-control" id="email" name="email" type="email" required/>
        </div>-->
       
        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <input class="btn btn-dark" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>
 
 
 
 
        <table id="funcao" class="table table-striped">
<!--        <caption>Função</caption>-->
 
 
        <thead>
            <tr>
                <th class="table-dark">Função</th>
<!--                <th class="table-dark">e-mail</th>-->
                <th class="table-dark">Funções</th>
            </tr>
 
        </thead>
        <tbody>
            <?php if ($funcao == FALSE): ?>
                <tr><td>Nenhum contato encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($funcao as $row): ?>
                    <tr>
                        <td><?php echo $row->nomefuncao; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'funcao/editar/' . $row->idfuncao;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'funcao/deletar/' . $row->idfuncao;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
        <br>
    <body background="imagem/blue2.png" height="70%" width="100%">
</body>
     </br>
    </table>
 
    <p></p>
    <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    </div>
        </div>
   
<!--    <script type="text/javascript">
        $(document).ready(function () {
        $('#funcao').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
             iDisplayLength: 10,  
             dom: 'Bfrtip',
    buttons: [
        'copy',
        'excel',
        'print',
        'pdf'
    ]
        });
    });
</script>-->