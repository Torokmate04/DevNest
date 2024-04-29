<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Types;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('users')->get();
        return view('courses.index', ['courses' => $courses]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Types::all();
        return view('courses.create', ['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'level' => $request->level,
            'c_route' => '.'.strtolower($request->name),
            'type_id' => $request->type_id

        ]);
        $course->save();
        return redirect()->route('courses.create_course_data')->with('message', 'Course added. Thank you for your input.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        
        $user = Auth::user();
        $user_course = DB::table('course_user')->where('user_id', $user->id)->where('course_id', $course->id)->exists();
        $adatok = DB::table('course_user')->where('user_id', $user->id)->where('course_id', $course->id)->get();
        if(!$user_course){
            DB::table('course_user')->insert(['user_id' => $user->id, 'course_id' => $course->id, 'seen' => 1, 'completed' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]);
        } else {
            // Do something if the user is already enrolled in the course (e.g., redirect or set a message)
            //ide kéne valami lehet toast plusz ugorjon arra a reszre ahol tartott
            if ($adatok[0]->completed == 0){

            }
            else if($adatok[0]->completed == 1){

            }
            else{

            }
            
            
        }
        
        return view('courses'.$course->c_route, ['course' => $course]);
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $types = Types::all();
        return view('courses.edit', ['types' => $types, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('courses.index')->with('message', 'Course Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('message', $course->name . ' was deleted Successfully');
    }

    public function createCourseUser($courseid){

    }
}
