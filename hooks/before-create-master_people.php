<?php

use Core\Utility;

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

use Core\Database;

$db = new Database;
$user = $db->insert('users', [
    'name' => $data['name'],
    'username' => $data['code'],
    'password' => md5($data['code']),
]);

$data['user_id'] = $user->id;