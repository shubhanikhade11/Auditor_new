<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class QueController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

public function question()
{
    
     $database = app('firebase.database');
        $result = $database->getReference('Users/questions/Layer 1 questions')->orderbyValue()->getValue();
        // dd($result);
        return view('questions')->with('result',$result);
}
public function question2()
{
    
     $database = app('firebase.database');
        $result = $database->getReference('Users/questions/layer3_questions')->getValue();
        
        return view('questions')->with('result',$result);
}
public function question3()
{
    
     $database = app('firebase.database');
        $result = $database->getReference('Users/questions/layer4_questions')->getValue();
        
        return view('questions')->with('result',$result);
}
public function store(Request $request)
{
    
     $database = app('firebase.database');
     $Name=$request->input('Name');
     $Name = str_replace(' ', '', $Name);
     $name=$Name."_questions";
     $question=$request->input("question");

        // return view('templates')->with('result',$result);
        $updates = [
            'Users/questions/'.$name => $question,
       ];
       $database->getReference()->update($updates);
}
}
