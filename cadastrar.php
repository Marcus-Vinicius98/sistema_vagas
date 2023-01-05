<?php

        require __DIR__. '/vendor/autoload.php';

        use \App\Entity\Vaga;

        if (isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])) {
            $obVaga = new Vaga; 
        }



        include __DIR__. '/includes/header.php';
        include __DIR__.'/includes/formulario.php';
        include __DIR__. '/includes/footer.php';



?>