<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Storage;
use Image;

class Helper {
  public static function s3Upload($path,$file) {
    if($file) {
      Storage::disk('s3')->put($path,$file);
      return (env('AWS_URL').'/'.$path);
    }
  }
  public static function resizeImage($width,$file) {
    if($file) {
      $img = Image::make($file)
            ->resize(null, $width, function($constraint) {
                $constraint->aspectRatio();
            })->stream('jpg',80);
      return $img;
    }
  }
  public static function resizeAvatar($width,$file) {
    if($file) {
      $img = Image::make($file)
            ->fit($width,$width, function($constraint) {
                $constraint->aspectRatio();
            })->stream('jpg',80);
      return $img;
    }
  }
  public static function createS3Url($folder,$file) {
    if($file) {
      $fileInfo = pathinfo($file->getClientOriginalName());
      $path = $folder.'/'.$fileInfo['filename'].'.'.$fileInfo['extension'];
      return $path;
    }
  }
}
