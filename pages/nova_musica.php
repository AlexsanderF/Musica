<a href="?page=musica&album=<?=$_GET['album']?>" class="espaco btn btn-outline-primary">Voltar para o álbum <?=$_GET['album']?></a>

<h1>Cadastrar Nova Música Para o Álbum <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
   <!--  <div class="form-group">
    <input type="text" name="name" placeholder="Nome:" class="espaco form-control">
    </div> -->
    <div class="form-group">
    <input type="file" name="audio" class="espaco form-control">  
    </div>
    <div class="form-group">
    <input type="submit" value="Cadastrar" class="espaco btn btn-success">
    </div>
</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_GET['album'];
        $path = "Albums/{$album}/musics/";
        //VERIFICA SE TEM OU NÃO A PASTA PARA SALVAR AS MÚSICAS
        if (!is_dir($path)){
            mkdir($path);
        }
        // REALIZA O UPLOAD DA MÚSICA
        if (move_uploaded_file(c['tmp_name'], $path . $_FILES['audio']['name'])){
            header("Location: ?page=musica&album={$album}");
        } else {
            echo "Erro no Upload!";
        }
        
    }


?>