<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    //

    public function index()
    {
        $articles = Article::with('category')->latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function web()
    {
        $articles = Article::with('category')->where('category_id',1)->latest()->get();
        $articles3 = Article::with('category')->where('category_id',3)->latest()->get();
        return view('articles.web', compact('articles','articles3'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // ตรวจสอบไฟล์ภาพที่อัปโหลด
        ]);
        // กำหนดค่า default ให้กับ imagePath
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            // กำหนด path สำหรับบันทึกในฐานข้อมูล โดยไม่ใช้ Storage::url()
            $imagePath = 'storage/uploads/' . $fileName;
        }

        // บันทึกข้อมูลบทความลงใน articles รวมถึง path ของรูปภาพ
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath, // บันทึก path ของรูปภาพใน articles
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully with image.');
    }
    public function show($id)
    {
        $articles = Article::with('category')->latest()->limit(4)->get();
        $article = Article::with('category')->findOrFail($id);
        return view('articles.show', compact('article','articles'));
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();

        return view('articles.edit', compact('article', 'categories'));
    }
    public function update(Request $request, $id)
{
   

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
       
    ]);

    $article = Article::findOrFail($id);

    // เตรียมข้อมูลสำหรับการอัปเดต
    $updateData = [
        'title' => $request->title,
        'content' => $request->content,
        'category_id' => $request->category_id,
    ];
    

    // ตรวจสอบว่ามีการอัปโหลดรูปภาพใหม่หรือไม่
    $imagePath = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        
        // กำหนด path สำหรับบันทึกในฐานข้อมูล โดยไม่ใช้ Storage::url()
        $imagePath = 'storage/uploads/' . $fileName;
        $updateData['image_path'] = $imagePath;
    }

    // อัปเดตข้อมูลทั้งหมดในคราวเดียว
    $article->update($updateData);

    return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
}

public function destroy($id)
{
    $article = Article::findOrFail($id);

    // ตรวจสอบและลบไฟล์รูปภาพที่เกี่ยวข้อง (ถ้ามี)
    if ($article->image_path) {
        // ลบไฟล์จาก storage โดยใช้เส้นทางที่บันทึกในฐานข้อมูล
        $filePath = str_replace('storage/', 'public/', $article->image_path); // เปลี่ยนเส้นทางให้ตรงกับโฟลเดอร์จริง
        Storage::delete($filePath);
    }

    // ลบข้อมูลบทความ
    $article->delete();

    return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
}




}
