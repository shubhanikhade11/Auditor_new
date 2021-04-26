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

public function question(request $request)
{
    
     $database  = app('firebase.database'); 
     $templatename=$request->input('name');
        $result = $database->getReference('Users/questions/'.$templatename)->getChildKeys();
        // dd($result);
        return view('questions')->with('result',$result)->with('templatename',$templatename);
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
     $name=$request->input('section_name');
     $template_name=$request->input('template_name');
    //  $Name = str_replace(' ', '', $Name);
    //  $name=$Name."_questions";
     $question=$request->input("mytext");

        // return view('templates')->with('result',$result);
        $updates = [
            'Users/questions/'.$template_name.'/'.$name => $question,
       ];
       $database->getReference()->update($updates);

}
public function section(Request $request)
{
    
     $database = app('firebase.database');
     $name=$request->input('template_name');
    //  $Name = str_replace(' ', '', $Name);
    //  $name=$Name."_questions";
    return view('abc')->with('name', $name );
   


}
}
