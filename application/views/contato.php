<!DOCTYPE html>

<div class="container">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Contato</h2>
    <?php echo form_open('contato/inserir'); ?>
    <div group

    <label>Nome</label>
    <input name="nome" type="text" required/>
    <p></p>
    <label>E-mail</label>
    <input name="email" type="email" required/>
    <p></p>
    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <input class="btn btn-primary" type="reset" value="Limpar"/>
    <?php form_close(); ?>
    <p></p>

    <table class="table table-striped">
            <caption>Contatos</caption>
            <thead class="thead-dark"
                <tr>
                
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Função</th>
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

        <a href="<?php
echo base_url() .
 'home';
?>">Voltar</a>
    
</div>