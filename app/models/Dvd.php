<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 2/21/14
 * Time: 11:24 PM
 */

class Dvd extends Illuminate\Database\Eloquent\Model
{
    public function scopeTitle($query, $title)
    {
        if ($title == '')
        {
            return;
        }
        return $query->where('title', '=', $title);
    }

    public function scopeGenre($query, $genre)
    {
        if ($genre == 'All')
        {
            return $query->join('genres', 'genres.id', '=', 'dvds.genre_id');
        }
        return $query->join('genres', 'genres.id', '=', 'dvds.genre_id')
            ->where('genre_id', '=', $genre);
    }

    public function scopeRating($query, $rating)
    {
        if ($rating == 'All')
        {
            return $query->join('ratings', 'ratings.id', '=', 'dvds.rating_id');
        }
        return $query->join('ratings', 'ratings.id', '=', 'dvds.rating_id')
            ->where('rating_id', '=', $rating);
    }

    public function scopeLabel($query, $label)
    {
        if ($label == 'All')
        {
            return $query->join('labels', 'labels.id', '=', 'dvds.label_id');
        }
        return $query->join('labels', 'labels.id', '=', 'dvds.label_id')
            ->where('label_id', '=', $label);
    }

    public function scopeSound($query, $sound)
    {
        if ($sound == 'All')
        {
            return $query->join('sounds', 'sounds.id', '=', 'dvds.sound_id');
        }
        return $query->join('sounds', 'sounds.id', '=', 'dvds.sound_id')
            ->where('sound_id', '=', $sound);
    }

    public function scopeFormat($query, $format)
    {
        if ($format == 'All')
        {
            return $query->join('formats', 'formats.id', '=', 'dvds.format_id');
        }
        return $query->join('formats', 'formats.id', '=', 'dvds.format_id')
            ->where('format_id', '=', $format);
    }




}