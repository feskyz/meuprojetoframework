<!DOCTYPE html>

<div class="container">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Cadastro</h2>
    <?php echo form_open('contato/inserir'); ?>
    <div group

        
    <div class="form-group">
        <label for="Nome">Nome</label>
            <input name="nome" type="text" class="col-sm-6 form-control"  id="nome">
        <p></p>
        <label>E-mail</label>
            <input name="email" type="text" class="col-sm-6 form-control"  >
        <p></p>
       

    <div class="form-group">
            <label for="funcao">Função</label>
            <select class="col-sm-3 col-form-label form-control" id="funcao" name="idfuncao" required>
            <option> Selecionar Função </option> 
            <?php foreach ($funcao as $funcao) : ?>
                <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomefuncao; ?></option>
            <?php endforeach; ?>
         </select>
                    </div>

        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <input class="btn btn-light" type="reset" value="Limpar"/>
        <input class="btn btn-dark" id="btn-lista" value="Listar Contatos"/>

        <?php form_close(); ?>
        <p></p>


            <div id="div-lista" class="hide">


                <table id="contato" class="table table-striped">
                    <caption>Contatos</caption>
                    <thead class="thead-dark"
                           <tr>

                <th class="table-dark">Nome</th>
                <th class="table-dark">E-mail</th>
                <th class="table-dark">Função</th>
                <th class="table-dark">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($contatos == FALSE): ?>
                            <tr><td>Nenhum contato encontrado!</td></tr>
                        <?php else: ?>
                            <?php foreach ($contatos as $row): ?>
                                <tr>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->nomefuncao; ?></td>
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'contato/editar/' . $row->id;
                                        ?>">Editar</a>
                                        |
                                        <a href="<?php
                                        echo base_url() . ''
                                        . 'contato/deletar/' . $row->id;
                                        ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <a href="<?php
        echo base_url() .
        'home';
        ?>">Voltar</a>

    </div>


    <script type="text/javascript">
        $("#btn-lista").click(function () {
            $("#div-lista").toggleClass("hide");
        });


        $(document).ready(function () {
            $('#contato').DataTable({
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
    </script> 