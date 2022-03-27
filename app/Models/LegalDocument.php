<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class LegalDocument extends Model implements HasMedia
{
    use InteractsWithMedia;
    use SoftDeletes;

    //

}
