<?php

namespace App\Http\Livewire;

//agregar modelo curse
use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        return view('livewire.course-list',[
            //generando variable course
            'courses' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
