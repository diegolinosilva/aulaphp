<?php

session_start();
    $catetorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    $nome = $_POST ['nome'];
    $idade = $_POST ['idade'];

     if(empty($nome)) 
     {                        
        $_SESSION ['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o!';
          header ("location:index.php");
          return;
      }

     else if(strlen($nome) <3 )
     { 
        $_SESSION ['mensagem-de-erro'] = 'O nome tem que conter mais que 3 caracteres, por favor preencha-o!';
        header ("location:index.php");
        return;
      }
     else if(strlen($nome) > 40){
        $_SESSION ['mensagem-de-erro'] = 'O nome é muito extenso';
        header ("location:index.php");
        return;
     }
     else if(!is_numeric($idade))
         {
            $_SESSION ['mensagem-de-erro'] = 'Por favor, informe um numero para a idade';
        header ("location:index.php");
        return;
         }

              if ($idade >= 6 && $idade <= 12)
    
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
               ($categorias[$i] == 'infantil')
                {
                    $_SESSION['mensagem-de-erro'] = "O nadador "  $nome  "compete na categoria" $categorias[$i];
                    header ('location:index.php');
                      return;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ", $nome , " compete na categoria" ,$categorias;
                header ("location:index.php");
                return;
                }
            }
        }
        else if($idade > 18)
        {
            for($i = 0;$i <= count($categorias);$i++)
            {
                if($categorias [$i] == 'adulto')
                {
                    $_SESSION['mensagem-de-sucesso'] = "O nadador ", $nome , " compete na categoria" ,$categorias;
                header ("location:index.php");
                return;
                }
            }
        }
        
            
?>