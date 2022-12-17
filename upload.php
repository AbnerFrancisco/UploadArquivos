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
    <form action="executa_upload.php" method="post" enctype="multipart/form-data">
      <div>
               <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
          <input type="file" name="arquivo" size="50">
          <input type="submit" value="Enviar arquivo">
      </div>

      <div>
          
      </div>
    </form>
</body>
</html>