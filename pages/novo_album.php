<a href="?page=album" class="espaco btn btn-outline-primary">Voltar para os álbums</a>

<h1>Cadastrar Novo Álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="text" name="name" placeholder="Nome:" class="espaco form-control">
    </div>
    <div class="form-group">
    <input type="file" name="image" class="espaco form-control">  
    </div>
    <div class="form-group">
    <input type="submit" value="Cadastrar" class="espaco btn btn-success">
    </div>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //PEGAR O NOME DO ÁLBUM INFORMADO
        $album = $_POST['name'];
        //DEFINIR O CAMINHO PARA SALVAR A MÚSICA
        $path = "Albums/{$album}";
        //CRIA O DIRETÓRIO CASO NÃO EXISTA
        if (!is_dir($path)){
            mkdir($path);
        };
        //PEGA AS INFORMAÇÕES DO ÁRQUIVO
        $file = $_FILES['image'];
        //EXPLODE O NOME DO ARQUIVO E A EXTENSÃO, SALVA EM UM ARRAY
        $fileInfo = explode('.', $file['name']);
        //PEGA A EXTENSÃO DO ARQUIVO
        $extension = $fileInfo[1];
        //DEFINE O NOME DO ÁRQUIVO COM O NOME QUE A PESSOA ADICIONOU
        $nameImage = $album . '.' . $extension;
        //REALIZA O UPLOAD DO LOCAL TEMPORÁRIO QUE O ARQUIVO ESTAR E ENVIA PARA $PATH
       if ( move_uploaded_file($file['tmp_name'], $path . '/' . $nameImage)){
        header('Location: ?page=album');
       } else {
        echo 'Falha no Upload...';
       };
    };
?>