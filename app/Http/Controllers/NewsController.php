<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 11/12/2017
 * Time: 09.58
 */

namespace App\Http\Controllers;

use App\news;
use App\Http\Requests\newsFormRequest;
use App\Page;
use App\Registration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        //return homepage
        return view('backend.news.add_news');
    }

    public function store(newsFormRequest $request){

        $news = News::create($request->all());

        if($request->news_photo){

            foreach ($request->news_photo as $photo) {

                $filename = $photo->store('news_photo');
                print_r($filename);
            }

        }

        //alert()->success('Page has been added.');

        return redirect()->action('NewsController@view')->with('Message', 'News has been added');;
    }

    public function edit($news_id)
    {
        $oNews = DB::table('news')->where('news_id', $news_id)->get();

        return view('backend.news.edit_news', compact('oNews'));
    }

    public function update(newsFormRequest $request)
    {
        News::where('news_id', $request->news_id)->update($request->except(['_token']));

        alert()->success('Page has been updated.');

        return back()->with('Message', 'news has been updated');
    }

    public function view()
    {
        //return homepage
        $sortBy = 'created_at';
        $sortDirection = 'ASC';

        if (request('sortby') || request('sortdir')) {
            $sortBy = request('sortby');
            $sortDirection = request('sortdir');
        }

        $news = News::orderBy($sortBy, $sortDirection)->paginate(6)->where('news_active', 1);

        return view('backend.news.view_news', compact('news'));
    }

    public function destroy($news_id){

        DB::table('news')->
        where('news_id', $news_id)->
        update(['news_active' => 0]);

        //alert()->success('news Deleted');

        return redirect()->action('NewsController@view')->with('Message', 'News has been deleted');
        //return redirect('/view_news');
    }

}