<div class="container"> 
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?> 
    
        <h2> Primeiro Cadastro </h2>

        <p></p>
        <a class="btn btn-dark" href="<?php echo base_url() . 
                                            'contato' ; ?>">Cadastro</a>  
        <p></p>
        <?php if($this->session->userdata('logado')->perfilAcesso=="ADM"){?>
        <a class="btn btn-primary" href="<?php echo base_url() . 
                                            'funcao' ; ?>">Função</a> 
        <p></p>
        <a class="btn btn-dark" href="<?php echo base_url() . 
                                            'usuario' ; ?>">Usuario</a> 
        <?php }?>
<!--        <p></p>       
        <a class="btn btn-primary" href="<?php echo base_url() . 
                                            'login/sair' ; ?>">Sair</a> -->
       

</div>    
