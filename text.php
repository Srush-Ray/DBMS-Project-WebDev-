<?php
$m = new MongoClient();
$gridfs = $m->selectDB('test')->getGridFS();
$id = $gridfs->storeFile('avatar1.jpg', array('contentType' => 'image/pjpeg'));
$gridfsFile = $gridfs->get($id);
var_dump($gridfsFile->file);
?>
