<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseDataRequest;
use App\Http\Requests\StoreCourseQuestionRequest;
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
        return redirect()->route('/create_course_data')->with('message', 'Course added. Thank you for your input.');
    }

    public function storeCourseData(StoreCourseDataRequest $request)
    {
        $lastcourseid = DB::table("courses")->orderBy('id', 'desc')->first();
        
        
        DB::table('course_data')->insert([
            "course_id" => $lastcourseid->id,
            "cim" => $request->temacim,
            "tartalom" => $request->tematart
        ]);
        return redirect()->route('/create_course_questions')->with('message', 'Course data added. Thank you for your input.');
    }

    public function storeCourseQuestion(StoreCourseQuestionRequest $request)
    {
        $lastcourseid = DB::table("courses")->orderBy('id', 'desc')->first();
        
       
       for($i = 0; $i < count($request->kerdes); $i++){

           DB::table('course_quizzes')->insert([
               "course_id" => $lastcourseid->id,
               "kerdes" => $request->kerdes[$i],
               "valaszok" => $request->valaszok[$i]
           ]);
       }
        return redirect()->route('/create_course_questions')->with('message', 'Course questions added. Thank you for your input.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        if(isset($_GET['sikerult'])){

            $sikerult = $_GET['sikerult'];
            if($sikerult == "false"){
                DB::table("calendar")->insert([
                    "user_id" => Auth::user()->id,
                    "title" => $course->name,
                    "start" => date("Y-m-d"),
                    "end" => date("Y-m-d"),
                    "backgroundcolor" => "yellow"
                ]);
            }
            else{
                
                if(isset($_GET["elozocourse"])){
                    
                    $elozocourzus = DB::table("courses")->where("id", $_GET['elozocourse'])->get();
                    
                   

                    DB::table("calendar")->insert([
                        "user_id" => Auth::user()->id,
                        "title" => $elozocourzus[0]->name,
                        "start" => date("Y-m-d"),
                        "end" => date("Y-m-d"),
                        "backgroundcolor" => "green"
                    ]);
                }
                if(isset($_GET['level']) && isset($_GET['basecourseid'])){


                    Db::table("course_user")->where("course_id", $_GET['basecourseid'])->where('user_id', Auth::user()->id)->update(["completed" => $_GET['level']]);
                }
               //if(strpos($course->name, "intermediate") !== false){
               
               
               
               
            }
        }
        $croutearray = [".php_basics", ".c#_basics", ".java", ".phython", ".javascript_zero_to_hero", ".php_intermediate", ".php_advanced"];
        $coursedata = DB::table("course_data")->where("course_id", $course->id)->get();
        $coursequestions = DB::table("course_quizzes")->where("course_id", $course->id)->get();
        if(!in_array($course->c_route, $croutearray)){
            return(view("courses.show", ['course' => $course, "coursedata" => $coursedata, "coursequestions" => $coursequestions]));
        }
        
        $user = Auth::user();
        $user_course = DB::table('course_user')->where('user_id', $user->id)->where('course_id', $course->id)->exists();
       
        if ($course->level == "begginer"){

            if(!$user_course){
                DB::table('course_user')->insert(['user_id' => $user->id, 'course_id' => $course->id, 'seen' => 1, 'completed' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]);
               $usercount = DB::table("prog_langs")->where("course_id", $course->id)->get();
                DB::table("prog_langs")->where("course_id", $course->id)->update(["usercount" => ($usercount[0]->usercount + 1)]);
            }
            else{
                $datasss = DB::table('course_user')->where('user_id', $user->id)->where('course_id', $course->id)->get();
                switch ($datasss[0]->completed){
                    case 0: return view('courses'.$course->c_route, ['course' => $course]);
                    case 1: return view('courses/php_intermediate');
                    case 2: return view('courses/php_advanced');
                    case 3: return redirect('home')->with("message", 'Course already completed!');
                }
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
