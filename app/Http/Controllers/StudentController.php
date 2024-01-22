<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //

    function student(){

        return view('home');
    }
    function student_show()
    {
        $data = Student::get();
        return view('show_student', ["data" => $data]);
    }
    function student_save(){
        $save = New Student();
        $save->name = $_POST['name'];
        $save->city = $_POST['city'];
        $save->is_active = $_POST['active'];

        $save->save();
        return redirect()->back();
    }
    function student_delete($id){


        $record = Student::find($id);


        if (!$record) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        // Delete the record
        $record->delete();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }
    function student_edit($id){
        $record = Student::find($id);
        // Delete the record
        return view('edit_record', ["data" => $record]);
    }
    function student_edit_update($id){
        $record = Student::find($id);
        $record->name = $_POST['name'];
        $record->city = $_POST['city'];
        $record->is_active = $_POST['active'];
        $record->update();


        return redirect('/student_show');
    }


}
