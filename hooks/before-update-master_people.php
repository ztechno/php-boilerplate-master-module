<?php

use Core\Utility;

if(isset($_FILES['pic_url']['name']) && !empty($_FILES['pic_url']['name']))
{
    $parentPath = Utility::parentPath();
    $storageFolder = $parentPath . 'storage/media/people';
    if(!file_exists($storageFolder))
    {
        mkdir($storageFolder, 0777);
    }
    
    $ext = end(explode('.', $_FILES['pic_url']['name']));
    $namaFile  = strtotime('now') . mt_rand(111111, 999999) .".$ext";
    $lokasiTmp = $_FILES['pic_url']['tmp_name'];
    
    $lokasiBaru = "{$storageFolder}/{$namaFile}";
    move_uploaded_file($lokasiTmp, $lokasiBaru);
    
    $data['pic_url'] = 'storage/people/' . $namaFile;
}