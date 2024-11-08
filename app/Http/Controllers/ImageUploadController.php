<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ArticleImage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            // บันทึกลงในตาราง ArticleImage
            $image = new ArticleImage();
            $image->image_name = $fileName; // คุณสามารถกำหนดชื่อคอลัมน์ตามโครงสร้างที่คุณตั้งไว้
            $image->image_path = $filePath; // หรือแก้ไขเป็น field ที่เหมาะสมใน ArticleImage
            $image->save();

            // ส่งกลับ URL ของรูปภาพที่อัปโหลด
            $url = Storage::url($filePath);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $fileName,
                'url' => $url
            ]);
        }

        return response()->json(['uploaded' => 0, 'error' => ['message' => 'Upload failed.']]);
    }
}
