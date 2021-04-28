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

public function viewSectionQue(request $request)
{
    
     $database  = app('firebase.database'); 
     $templatename=$request->input('templatename');
     $sectionName=$request->input('sectionName');
        $result = $database->getReference('Users/questions/'.$templatename.'/'.$sectionName)->getValue();
        // dd($result);
        return view('sectionQuestion')->with('result',$result)->with('templatename',$templatename)->with('sectionName',$sectionName);
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
    //    $database->getReference()->update($updates);
    dd($questions);

}
public function section(Request $request)
{
    
     $database = app('firebase.database');
     $name=$request->input('template_name');
    //  $Name = str_replace(' ', '', $Name);
    //  $name=$Name."_questions";
    return view('abc')->with('name', $name );
   


}


public function AddQuestion(request $request)
{
    
     $database  = app('firebase.database'); 
     $data = [
        'template_name'=>$request->input('template_name'),
        'level_name' => $request->input('level_name'),
        'section_name'=>$request->input('section_name'),
 
        'question'=>$request->input('mytext')];
        

        $newPostKey = $database->getReference('Questions')->push()->getKey();
        $updates = [
            'Questions/'.$newPostKey => $data,
        ];
        $database->getReference()->update($updates);
       
        // return redirect()->route('tasks.index');
        dd($data);
       
}

}
