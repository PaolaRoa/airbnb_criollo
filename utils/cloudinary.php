<?php
//cloudinary
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
class cloudinary{

public static function getUrl(){

    $cloudinary = new Cloudinary('CLOUDINARY_URL=cloudinary://965546619951899:_Y3qVVM3o9XMoEvYgUThMHPR4y0@hb9dmhdvu');

}
public function upload($file, $options = [])

}