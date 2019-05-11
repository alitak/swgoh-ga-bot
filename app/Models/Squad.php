<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    /*
      |--------------------------------------------------------------------------
      | GLOBAL VARIABLES
      |--------------------------------------------------------------------------
     */

    protected $table = 'squads';
    protected $primaryKey = 'id';
    public $timestamps = TRUE;
    protected $guarded = ['id'];
    protected $fillable = [
        'character_1_id',
        'character_2_id',
        'character_3_id',
        'character_4_id',
        'character_5_id',
    ];
    // protected $hidden = [];
    protected $dates = [
        'create_at',
        'updated_at',
    ];
    protected $casts = [];

    // protected $hidden = [];
    // protected $dates = [];

    /*
      |--------------------------------------------------------------------------
      | FUNCTIONS
      |--------------------------------------------------------------------------
     */
    public function getSquadCharacters()
    {
        return [
            $this->character_1,
            $this->character_2,
            $this->character_3,
            $this->character_4,
            $this->character_5,
        ];
    }

    /*
      |--------------------------------------------------------------------------
      | RELATIONS
      |--------------------------------------------------------------------------
     */

    public function character_1()
    {
        return $this->belongsTo(Character::class);
    }

    public function character_2()
    {
        return $this->belongsTo(Character::class);
    }

    public function character_3()
    {
        return $this->belongsTo(Character::class);
    }

    public function character_4()
    {
        return $this->belongsTo(Character::class);
    }

    public function character_5()
    {
        return $this->belongsTo(Character::class);
    }

    /*
      |--------------------------------------------------------------------------
      | SCOPES
      |--------------------------------------------------------------------------
     */

    /*
      |--------------------------------------------------------------------------
      | ACCESORS
      |--------------------------------------------------------------------------
     */

    /*
      |--------------------------------------------------------------------------
      | MUTATORS
      |--------------------------------------------------------------------------
     */
}
