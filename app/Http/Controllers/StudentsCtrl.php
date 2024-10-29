<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Psy\Readline\Hoa\Console;


class StudentsCtrl extends Controller{
    public function home()
    {
        $students = Students::getStudents();
        return view('home', ['students' => $students]);
    }

    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request){
        $request->validate([
            'id' => 'required|numeric',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
        ]);
        $id = $request->input('id');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        try {
            Students::addStudent($id, $firstName, $lastName);
            return redirect()->route('form.show')->with('success', "Student $id added successfully.");
        } catch (ValidationException $e) {
            return redirect()->route('form.show')->withErrors($e->validator->getMessageBag());
        } catch (\Exception $e) {
            return redirect()->route('form.show')->with('error', 'An error occurred while processing your request. Try again');
        }
    }

    public function showDelete(){
        $students = Students::getStudents();
        return view('delete', ['students' => $students]);
    }

    public function processDelete(Request $request) {
        $id = $request->input('students');
        try {
            Students::deleteStudent($id);
            return redirect()->route('delete.show')->with('success', "Student $id removed successfully.");
        } catch (\Exception $e) {
            return redirect()->route('delete.show')->with('error', 'An error occurred while processing your request. Try again');

        }
    }

    
}           