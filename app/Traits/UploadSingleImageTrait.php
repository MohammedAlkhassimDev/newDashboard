<?php 

namespace App\Traits;

trait UploadSingleImageTrait {

    public function  UploadSinglePhoto($file,$folder)
    {
        // $file = $request->image;
        $filename = time() . $file->getClientOriginalName();
        // $filename = uniqid() . $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();;

        $explodeImage = explode('.', $filename);

        $extension = end($explodeImage);

        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'];

        if (in_array($extension, $imageExtensions)) {
            $file->move(public_path($folder), $filename);
        }

        return $filename;
    }


} 



?>