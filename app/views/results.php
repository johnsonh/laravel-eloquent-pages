<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 2/23/14
 * Time: 4:27 PM
 */

//echo 'results page';
//echo $title;

echo '<table>';
echo '
<tr>
  <th>Title</th>
  <th>Rating</th>
  <th>Genre</th>
  <th>Label</th>
  <th>Sound</th>
  <th>Format</th>
  <th>Release Date</th>
</tr>';

//var_dump($results);

foreach ($results as $dvd)
{
    echo '<tr>';
    echo '<td>' . $dvd->title . '</td>';
    echo '<td>' . $dvd->rating_name . '</td>';
    echo '<td>' . $dvd->genre_name . '</td>';
    echo '<td>' . $dvd->label_name . '</td>';
    echo '<td>' . $dvd->sound_name . '</td>';
    echo '<td>' . $dvd->format_name . '</td>';
    echo '<td>' . $dvd->release_date . '</td>';
    echo '</tr>';
}
echo '</table>';

