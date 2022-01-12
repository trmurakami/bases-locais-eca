<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CreativeWork;

class MusicRecording extends CreativeWork
{
    use HasFactory;

    protected $table = 'creative_works';
    protected $appends = ['links'];
    protected $fillable = [
        'name'
        // 'type',
        // 'byartist',
        // 'duration',
        // 'inAlbum',
        // 'inPlaylist',
        // 'isrcCode',
        // 'recordingOf',
        // 'musicalinstruments'
    ];

    public function getLinksAttribute($links): array
    {
        return [
            'self' => '/api/creative_work/music_recording/' . $this->id
        ];
    }

}