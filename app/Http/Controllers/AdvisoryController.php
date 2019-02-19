<?php

namespace App\Http\Controllers;
use App\Section;
use App\Teacher;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{

    private $section;
    private $teacher;
    
    public function index()
    {
        session(['my_url' => 'advisory']);
        $sections = Section::paginate(8);
        return view('advisory.index',compact('sections'));
    }

    public function create(Section $section)
    {
        $teachers = Teacher::where('assigned',0)->paginate(8);
        return view('advisory.create',compact('section') + compact('teachers'));
    }

    public function store(Section $section, Teacher $teacher)
    {
        $this->section = $section;
        $this->teacher = $teacher;

        $this->assignedCurrentTeacher();
        $this->createLinkBetweenTeacherAndSection();
        return $this->redirectToAppropriatePage();
       
    }

    public function edit(Section $section)
    {
        $teachers = Teacher::paginate(8);
        return view('advisory.edit',compact('section') + compact('teachers'));
    }

    public function update(Section $section, Teacher $teacher)
    {
        $this->section = $section;
        $this->teacher = $teacher;

       $this->unAssignedPreviousTeacher();
       $this->assignedCurrentTeacher();
       $this->changeLinkBetweenTeacherAndSection();
       return $this->redirectToAppropriatePage();
    }

    public function destroy(Section $section)
    {
        $section->teachers()->first()->update(['assigned' => false]);
        $section->teachers()->first()->pivot->delete();
        return redirect('/advisory');
    }


    private function unAssignedPreviousTeacher()
    {
         $this->section->teachers()->first()->update(['assigned' => 0]);
    }

    private function assignedCurrentTeacher()
    {
         $this->teacher->update(['assigned' => 1]);
    }

    private function createLinkBetweenTeacherAndSection()
    {
         $this->section->teachers()->attach($this->teacher->id);
    }

    public function changeLinkBetweenTeacherAndSection()
    {
        $this->section->teachers()->first()->pivot->update([
            'teacher_id' => $this->teacher->id
        ]);
    }

    private function redirectToAppropriatePage()
    {
        if(session('my_url') == 'grade')
        {
            $gradeId = $this->section->grade->id;
             return redirect("/grade/$gradeId/sections");
        }
        return redirect('/advisory');
    }

}