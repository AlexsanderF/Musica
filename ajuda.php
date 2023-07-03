<?php
function getAlbums()  {
    $albums = glob('Albums/*');

    return $albums;
};
function getMusics($album){
    $musics = glob("Albums/{$album}/musics/*.mp3");
    return $musics;
};