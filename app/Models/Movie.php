<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Movie extends Model
{
    public function getFormattedDate()
    {
        $date = new DateTime($this->date);
        return date_format($date, 'j M Y');
    }
}
