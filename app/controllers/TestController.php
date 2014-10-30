<?php
class TestController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function index()
    {
    	$page=DB::table('pages')->;
        return View::make('test')->with('page',$page);

    }
}