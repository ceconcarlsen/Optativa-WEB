<?php

    if (isset($_FILES['image'])){ #se existir vetor de arquivos de 'image'
        
        $errors = array(); #vetor de erros
        $file_name = $_FILES['image']['name']; #nome do arquivo
        $file_size = $_FILES['image']['size']; #tamanho do arquivo
        $file_tmp = $_FILES['image']['tmp_name']; #nome temporário do arquivo
        $file_type = $_FILES['image']['type']; #tipo do arquivo 

        $splitted_name = explode('.', $file_name); #separa a extensão 

        $file_ext = strtolower(end($splitted_name)); #transforma str em lower

        $extensions = array('jpeg', 'jpg', 'png'); #vetor de extensões

        if( in_array($file_ext, $extensions) === false){ #se no vetor de extensões não tiver a extensão do file
            $errors[] = "Extensions not allowed. Choose a JPEG or PNG.";
        }
        
        if(empty($errors)){ #se o vetor de erros estiver vazio
            move_uploaded_file($file_tmp, "images/" .$file_name); #verificação e manejamento
            echo "Sucesso!"; 
        }else{
            print_r($errors); 
        }
    }

?>