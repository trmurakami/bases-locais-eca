<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreativeWork extends Model
{
    use HasFactory;

    protected $table = 'creative_works';

    // protected $casts = [
    //     'about' => 'array',
    //     'actor' => 'array',
    //     'author' => 'array',
    //     'byartist' => 'array',
    //     'character' => 'array',
    //     'countryOfOrigin' => 'array',
    //     'director' => 'array',
    //     'inAlbum' => 'array',
    //     'inLanguage' => 'array',
    //     'inPlaylist' => 'array',
    //     'isbn' => 'array',
    //     'musicalinstruments' => 'array',
    //     'musicby' => 'array',
    //     'productionCompany' => 'array',
    //     'publisher' => 'array',
    //     'subtitleLanguage' => 'array',
    //     'translator' => 'array'
    // ];

    protected $fillable = [

        // 'about',
        // 'abstract',
        // 'actor',
        // 'albumProductionType',
        // 'albumReleaseType',
        // 'author',
        // 'byartist',
        // 'countryOfOrigin',
        // 'datePublished',
        // 'description',
        // 'director',
        // 'doi',
        // 'duration',
        // 'embedUrl',
        // 'endDate',
        // 'inAlbum',
        // 'inPlaylist',
        // 'isaccessibleforfree',
        // 'isbn',
        // 'isPartOf_citation',
        // 'isPartOf_name',
        // 'isrcCode',
        // 'issn',
        // 'issueNumber',
        // 'musicalinstruments',
        // 'musicby',
        'name'
        // 'notesPrivate',
        // 'notesPublic',
        // 'numTracks',
        // 'oaimetadataformat',
        // 'oaipmh',
        // 'pageEnd',
        // 'pageStart',
        // 'pagination',
        // 'productionCompany',
        // 'recordingOf',
        // 'startDate',
        // 'subtitleLanguage',
        // 'titleEIDR',
        // 'track',
        // 'translationOfWork',
        // 'thumbnailUrl',
        // 'type',
        // 'uploadDate',
        // 'videoFrameSize',
        // 'videoQuality',
        // 'volumeNumber'
    ];
}