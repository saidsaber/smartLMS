<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadImage
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|file',
        ]);

        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $newFileName = time() . '_' . preg_replace('/\s+/', '_', $fileName);

        $uploadDir = getcwd() . '/uploads/products/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            return $newFileName;
        } else {
            return false;
        }
    }
}
