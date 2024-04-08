<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
        return view('users.index', ["users" => $user]);
    }

    public function edit(User $user){
        $schools = School::all();
        return view('users.edit', ['user' => $user, 'schools' => $schools]);
    }
    public function update(Request $request,User $user){
        
        $user->update($request->all());

        return back()->with('message', $user->username .' Updated Successfully');

    }
    public function destroy(User $user){
        $user->delete();
        return back()->with('message', $user->username . ' was deleted Successfully');
    }
    public function checkInputData() {
        $inputValue = $_POST['inputValue']; //ÁTKÜLDÖTT ADATOK LEKÉRÉSE ($_POST/GET['Átküldött adat neve'])

        $users = User::all();

        $takenornot = false; 
        if ($inputValue !== "" && strlen($inputValue) > 5) {
            foreach($users as $user) {
                if($user->username == $inputValue) {
                    $takenornot = true;
                    break;
                }
            }
            return response()->json(array('takenornot'=> $takenornot), 200);
        }
          else {
            return  response()->json(array('takenornot' => "The username is too short it must be at least 5 characters long!"), 200);
          }


        

        //Adjon vissza egy választ, ami JSON adatként, tömböt tartalmazva, visszaküld valamit, jelenleg msg-néven.
        //MSG a frontenden kapott válasz változó neve (data.msg)

    }

    public function show(User $user)
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);

    }
}

?>