<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aide extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'helps';

    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

  public function setDateAttribute( $value ) {
    $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
  }
}