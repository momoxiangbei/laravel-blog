<?php

class PagesController extends \BaseController {

	public function index()
	{
		$pages=DB::table('pages')->paginate(10);
        return View::make('pages.index')->with('pages',$pages);
	}

	public function create()
	{
		return View::make('pages.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$page  = new Page;
		$page->title   = Input::get('title');
		$page->body    = Input::get('body');
        $page->save();

        return Redirect::route('pages.index', $page->id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('pages.show')->with('page', Page::find($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('pages.edit')->with('page', Page::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$page  = Page::find($id);
		$page->title   = Input::get('title');
		$page->body    = Input::get('body');
        $page->save();

        return Redirect::route('pages.index', $page->id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$page = Page::find($id);
        $page->delete();
        return Redirect::route('pages.index');
	}


}
