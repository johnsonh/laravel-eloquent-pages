<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 2/25/14
 * Time: 11:08 PM
 */

/*
 * <th>Title</th>
  <th>Rating</th>
  <th>Genre</th>
  <th>Label</th>
  <th>Sound</th>
  <th>Format</th>
  <th>Release Date</th>
 */

echo '<h2> Welcome to the Insert page! Insert something? </h2>';

echo '<form action="/dvd/inserttemp" method="post">';

echo '<p>Title: <input type="text" name ="title"></p>';
echo '<p>Genre: <select name="genre">';
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
foreach ($ratings as $rating)
{
    echo '<option value="';
    echo $rating->id;
    echo '">';
    echo $rating->rating_name;
    echo '</option>';
}
echo '</select></p>';

echo '<p>Label: <select name="label">';
foreach ($labels as $label)
{
    echo '<option value="';
    echo $label->id;
    echo '">';
    echo $label->label_name;
    echo '</option>';
}
echo '</select></p>';

echo '<p>Sound: <select name="sound">';
foreach ($sounds as $sound)
{
    echo '<option value="';
    echo $sound->id;
    echo '">';
    echo $sound->sound_name;
    echo '</option>';
}
echo '</select></p>';

echo '<p>Format: <select name="format">';
foreach ($formats as $format)
{
    echo '<option value="';
    echo $format->id;
    echo '">';
    echo $format->format_name;
    echo '</option>';
}
echo '</select></p>';

echo '
<input type="submit" value="Search">
</form>
';