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

    public function getSearchMenuOptions()
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

    public function getInsertMenuOptions()
    {
        $genres = Genre::all();
        $ratings = Rating::all();
        $labels = Label::all();
        $sounds = Sound::all();
        $formats = Format::all();

        return View::make('insert', [
            'genres' => $genres,
            'ratings' => $ratings,
            'labels' => $labels,
            'sounds' => $sounds,
            'formats' => $formats
        ]);
    }

    public function putDvd()
    {
        echo 'dfsdfsdf';

        $dvd = Dvd::create(array(
            'title' => Input::get('title'),
            'rating_id' => Input::get('rating'),
            'genre_id' => Input::get('genre'),
            'label_id' => Input::get('label'),
            'sound_id' => Input::get('sound'),
            'format_id' => Input::get('format')
        ));

        $dvd->save();

    }







}