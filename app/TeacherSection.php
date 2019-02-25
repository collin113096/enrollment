<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class TeacherSection extends Model
{
    public $timestamps = false;
    protected $table = "section_subject";

    public function sections()
    {
    	return Section::find($this->section_id);
    }
}
