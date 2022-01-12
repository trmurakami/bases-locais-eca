<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CreativeWork;

class MusicAlbum extends CreativeWork
{
    use HasFactory;

    protected $table = 'creative_works';
    protected $appends = ['links'];
    protected $fillable = [
        'name'
        // 'numTracks',
        // 'track',
        // 'albumProductionType',
        // 'albumReleaseType',
        // 'byArtist',
        // 'musicalinstruments'
    ];

    public function getLinksAttribute($links): array
    {
        return [
            'self' => '/api/creative_work/music_album/' . $this->id
        ];
    }
}