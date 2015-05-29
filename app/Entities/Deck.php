<?php namespace Motty\Hearthstone;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $table = 'decks';

    protected $fillable = [
        'name'
    ];

    public function owner()
    {
        return $this->belongsTo('Motty\Hearthstone\Entites\User');
    }

    public function cards()
    {
        return $this->hasMany('Motty\Hearthstone\Entities\Cards');
    }
}