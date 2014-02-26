<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 2/21/14
 * Time: 10:45 PM
 */

//var_dump($genres);
//var_dump($ratings);

$stuff = 'stuffstuff';

//{{ Form::open(array('action' => 'DvdController@getResults')); }}
////
//echo '<h2> Welcome to the Search page! Search something? </h2>';
//
//echo '<p>';
//echo Form::label('title', 'Title: ');
//echo Form::text('title');
//echo '</p>';
//
//$genres['all'] = 'All';
//echo '<p>';
//echo Form::label('genre', 'Genre: ');
//echo Form::select('genre', $genres, 'all');
//echo '</p>';
//
//$ratings['all'] = 'All';
//echo '<p>';
//echo Form::label('rating', 'Rating: ');
//echo Form::select('rating', $ratings, 'all');
//echo '</p>';
//
//echo Form::submit('Search');
//
//{{ Form::close(); }}


echo '<form action="/dvds" method="post">';
echo '<br/>';

echo '<p>Title: <input type="text" name ="title"></p>';
echo '<p>Genre: <select name="genre">';
echo '<option value="All"> All </option>';
foreach ($genres as $genre)
{
    echo '<option value="';
    echo $genre->id;
    echo '">';
    echo $genre->genre_name;
    echo '</option>';
}
echo '</select></p>';

echo '<p>Rating: <select name="rating">';
echo '<option value="All"> All </option>';
foreach ($ratings as $rating)
{
    echo '<option value="';
    echo $rating->id;
    echo '">';
    echo $rating->rating_name;
    echo '</option>';
}
echo '</select></p>';

echo '
<input type="submit" value="Search">
</form>
';