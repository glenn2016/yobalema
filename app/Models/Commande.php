<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trajet;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['etat', 'destination','prix'];


    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }

    public function passager()
    {
        return $this->belongsTo(User::class, 'passager_id');
    }

    public function chauffeur()
    {
        return $this->belongsTo(User::class, 'chauffeur_id');
    }

}
