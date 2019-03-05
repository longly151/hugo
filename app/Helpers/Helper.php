<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Storage;

class Helper {
  public static function handleFile($file) {
    if($file) {
      $fileInfo = pathinfo($file->getClientOriginalName());
      $path = Storage::disk('s3')->putFileAs('/posts', $file,$fileInfo['filename'].'-'.date('YmdHis').'.'.$fileInfo['extension']);
      return (env('AWS_URL').'/'.$path);
    }
  }
}
