<?php namespace Motty\Hearthstone;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';

    protected $fillable = [
        'name',
        /*
         * Example:
         * Description:
         */
        'cost',
        /*
         * Example:
         * Description:
         */
        'type',
        /*
         * Example:
         * Description:
         */
        'rarity',
        /*
         * Example:
         * Description:
         */
        'faction',
        /*
         * Example:
         * Description:
         */
        'race',
        /*
         * Example:
         * Description:
         */
        'playerClass',
        /*
         * Example:
         * Description:
         */
        'text',
        /*
         * Example:
         * Description:
         */
        'inPlayText',
        /*
         * Example:
         * Description:
         */
        'mechanics',
        /*
         * Example:
         * Description:
         */
        'flavor',
        /*
         * Example:
         * Description:
         */
        'artist',
        /*
         * Example:
         * Description:
         */
        'attack',
        /*
         * Example:
         * Description:
         */
        'health',
        /*
         * Example:
         * Description:
         */
        'durability',
        /*
         * Example:
         * Description:
         */
        'id',
        /*
         * Example:
         * Description:
         */
        'collectible',
        /*
         * Example:
         * Description:
         */
        'elite',
        /*
         * Example:
         * Description:
         */
        'howToGet',
        /*
         * Example: "Unlocked at Level 40."
         * Description: How to get the gold version of this card. Only present if it's gotten via a method other than opening a booster pack.
         */
        'howToGetGold'
    ];
}
