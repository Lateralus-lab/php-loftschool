<?php

require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('i.jpeg');

$img->resize(200, null, function ($constraint) {
  $constraint->aspectRatio();
});

$img->text('Hypertext Preprocessor', $img->getWidth() - 10, $img->getHeight() - 10, function ($font) {
  $font->size(18);
  $font->color('#000000');
  $font->align('right');
  $font->valign('bottom');
});

$img->save('test.jpeg');

echo $img->response('jpeg');
