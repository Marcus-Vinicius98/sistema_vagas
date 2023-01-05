<?php

        require __DIR__. '/vendor/autoload.php';

        use \App\Entity\Vaga;

        //VALIDAÇÃO DO POST 
       if (isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])) {
          $obVaga = new Vaga;

          $obVaga->setTitulo = $_POST['titulo'];
           $obVaga->Setdescricao = $_POST['descricao'];
            $obVaga->setAtivo = $_POST['ativo'];

            $obVaga->cadastrar();
            
       }


        include __DIR__. '/includes/header.php';
        include __DIR__.'/includes/formulario.php';
        include __DIR__. '/includes/footer.php';



?>