<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;
use App\Document;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'url' => 'sfsdfsd',
        'document_type' => 'Birth Certificate',
        'student_id' => 2,
    ];
});
