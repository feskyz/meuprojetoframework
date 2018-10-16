<div class="container"> 
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?> 
    
    <h2> <center> Primeiro Cadastro </center>  </h2>

    <center>
        <a class="btn btn-primary" href="<?php echo base_url() . 
                                            'contato' ; ?>">Cadastro</a>  
        
        <?php if($this->session->userdata('logado')->perfilAcesso=="ADM"){?>
        <a class="btn btn-light" href="<?php echo base_url() . 
                                            'funcao' ; ?>">Função</a> 
        
        <a class="btn btn-dark" href="<?php echo base_url() . 
                                            'usuario' ; ?>">Usuario</a> 
    </center>
        <?php }?>
<!--        <p></p>       
        <a class="btn btn-primary" href="<?php echo base_url() . 
                                            'login/sair' ; ?>">Sair</a> -->
       
        <br>
    <body background="imagem/blue2.png" height="70%" width="100%">
</body>
     </br>

</div>    
