<a href="?page=album" class="espaco btn btn-outline-primary">Voltar para os álbums</a>
<h1>Música do Álbum <?=$_GET['album']?></h1>
<a href="?page=nova_musica&album=<?=$_GET['album']?>" class="btn btn-outline-info">Adicionar Nova Música</a>
<hr>
<?php
    $album = $_GET['album'];
    $musics = getMusics($album);
    foreach ($musics as $music):
?>
<div class="col-12">
    
    <audio src="<?=$music?>" controls></audio>
</div>
<?php
    endforeach;
     
?>

