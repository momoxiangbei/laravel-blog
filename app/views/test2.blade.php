<?php
 
// namespace App\Controllers\Admin;
  
// use Page;
// use Input, Notification, Redirect, Sentry, Str;
 
// use App\Services\Validators\PageValidator;
 
class PagesController extends BaseController {
  
    public function index()
    {
        $pages=DB::table('pages')->paginate(10);
        return View::make('pages.index')->with('pages',$pages);
    }
 
    public function show()
    {
        $id = Input::get('id');
        return View::make('pages.show')->with('page', Page::find($id));
    }
 
    public function create()
    {
        return View::make('pages.create');
    }
 
    public function store()
    {
        return Input::all();
        // $validation = new PageValidator;
  
        // if ($validation->passes())
        // {
        //                 $page          = new Page;
        //                 $page->title   = Input::get('title');
        //                 $page->body    = Input::get('body');
        //                 $page->user_id = Sentry::getUser()->id;
        //     $page->save();
  
        //     Notification::success('新增页面成功！');
  
        //     return Redirect::route('pages.edit', $page->id);
        // }
  
        // return Redirect::back()->withInput()->withErrors($validation->errors);
    }
 
    public function edit()
    {
        $id=Input::get('id');
        $pages=DB::table('pages')->where('id',$id);
        return View::make('pages.edit')->with('page',$pages);
    }
 
    // public function update($id)
    // {
    //     $validation = new PageValidator;
 
    //     if ($validation->passes())
    //     {
    //                     $page          = Page::find($id);
    //                     $page->title   = Input::get('title');
    //                     $page->body    = Input::get('body');
    //                     $page->user_id = Sentry::getUser()->id;
    //         $page->save();
 
    //         Notification::success('更新页面成功！');
 
    //         return Redirect::route('admin.pages.edit', $page->id);
    //     }
 
    //     return Redirect::back()->withInput()->withErrors($validation->errors);
    // }
 
    public function destroy()
    {
        $id = Input::get('id');
        $page = Page::find($id);
        $page->delete(); 
        return Redirect::route('pages');
    }
 
}