<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(){
        return view('add-New');
    }

    public function storeNews(Request $request){
        $titleEnglish=$request->title_English;
        $titleArabic=$request->title_Arabic;
        $bodyEnglish=$request->body_English;
        $bodyArabic=$request->body_Arabic;
        $image=$request->file('photo');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $New=new News();
        $New->title_English=$titleEnglish;
        $New->title_Arabic=$titleArabic;
        $New->body_English=$bodyEnglish;
        $New->body_Arabic=$bodyArabic;
        $New->photo=$imageName;
        $New->save();
        return back()->with('News_added','News has been inserted');

    }
    public function News(){
        $News=News::all();
        return view('all-News',compact('News'));
    }
    public function welcome(){
        $News=News::all();
        return view('welcome',compact('News'));
    }

    public function editNews($id){
        $New =News::find($id);
        return view('edit-New',compact('New'));
    }
    public function updateStudent(Request $request){

        $titleEnglish=$request->title_English;
        $titleArabic=$request->title_Arabic;
        $bodyEnglish=$request->body_English;
        $bodyArabic=$request->body_Arabic;
        $image=$request->file('photo');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $New =News::find($request->id);
        $New->title_English=$titleEnglish;
        $New->title_Arabic=$titleArabic;
        $New->body_English=$bodyEnglish;
        $New->body_Arabic=$bodyArabic;
        $New->photo=$imageName;
        $New->save();
        return back()->with('New_updated','New updated successfully');

    }
    public function deleteNew($id){
        $New =News::find($id);
        unlink(public_path('images').'/'.$New->photo);
        $New->delete();
        return back()->with('New_deleted','New deleted Successfully');
    }
}
