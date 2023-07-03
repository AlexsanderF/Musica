<h1>Álbum</h1>
    <a href="?page=novo_album" class="btn btn-success">Adicionar  Novo  álbum</a>
    <hr>
<div class="row">
    <?php
         $albums = getAlbums();

        // for($i = 1; $i <= 10; $i++):
            foreach ($albums as  $album):
                $inforAlbum = explode('/', $album);
                $nameAlbum = $inforAlbum[1];
                $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
    <div class="col-3 album">
            <a class="btn btn-outline-secondary" href="?page=musica&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$album?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
            </a>
            
    </div>
    <?php
        endforeach;
       // endfor;
    ?>
</div>