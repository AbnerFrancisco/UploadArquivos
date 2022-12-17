<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de upload de arquivos</title>
</head>
<body>
    <h1>Sistema de upload de arquivos</h1>
       <?php
           set_time_limit(0);
           include('config_upload.php');

           $nome_arquivo = $_FILES['arquivo']['name'];
           $tamanho_arquivo = $_FILES['arquivo']['size'];
           $arquivo_temporario = $_FILES['arquivo']['tmp_name'];

           $upload_erro = $_FILES['arquivo']['error'];

              if(!empty($nome_arquivo)){

                   if($sobrescrever=="nao" && file_exists("$caminho_absoluto/$nome_arquivo")){
                       die("Arquivo já existe");
                   }
                   if(($limitar_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes)){

                    die("Arquivo deve ter no máximo: {$tamanho_bytes}");

                   }
                   $ext = strrchr($nome_arquivo,".");

                   if($limitar_ext == "sim" && !in_array($ext,$extensoes_autorizadas)){
                       die("Extensão de arquivos invalida para upload.");
                   }
                   if(move_uploaded_file($arquivo_temporario,"$caminho_absoluto/$nome_arquivo")){
                       echo "<p aligin=\"center\"><img width=\"500\" src=\"arquivos/$nome_arquivo\"></p>";
                       echo "<p aligin=\"center\">o upload do arquivo $nome_arquivo<br> foi concluido com sucesso. </p>";
                       echo "<p aligin=\"center\"><a href=\"./upload.php\">Novo upload</a></p>";

                   }

              }else{
                  die("Selecione o arquivo a ser enviado.");

              }
         ?>
</body>
</html>