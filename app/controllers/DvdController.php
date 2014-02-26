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

    protected $fillable = array('title','rating_id','genre_id',
        'label_id', 'sound_id', 'format_id');

//    public static $unguarded = true;
    protected $guarded = array();

    public function getSearchMenuOptions()
    {
        //query the model first
        //$thing = new Dvd();
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
        $dvd = new Dvd;
        $dvd->title = Input::get('title');
        $dvd->rating_id = Input::get('rating');
        $dvd->genre_id = Input::get('genre');
        $dvd->label_id = Input::get('label');
        $dvd->sound_id = Input::get('sound');
        $dvd->format_id = Input::get('format');
        $dvd->save();

        echo 'bsbbsbsbs';
//        return Redirect::to('dvds/create')->with('message', 'Record was inserted successfully!');
    }







}