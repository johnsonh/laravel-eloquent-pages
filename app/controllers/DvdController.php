<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 2/23/14
 * Time: 4:12 PM
 */

class DvdController extends BaseController
{
    //public $restful = true;

    public function getMenuOptions()
    {
        //query the model first
        //$thing = new Dvd();
        //$thing->
        $genres = Genre::all();
        $ratings = Rating::all();

        return View::make('search', [
            'genres' => $genres,
            'ratings' => $ratings
        ]);
    }

    public function getResults()
    {
        //echo 'dfdfdf';

        $title = Input::get('title');
        $ratingID = Input::get('rating');
        $genreID = Input::get('genre');

        //do some query stuff
        $results = Dvd::query()
            ->Title($title)
            ->Rating($ratingID)
            ->Genre($genreID)
            ->Label('All')
            ->Sound('All')
            ->Format('All')
            ->take(30)
            ->get();

        //dd($results);

        return View::make('results', [
            'results' => $results//->toArray()
        ]);
    }

}