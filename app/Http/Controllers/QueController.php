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
        $result = $database->getReference('Questions/'.$templatename)->getValue();
        //dd($result,$templatename);
         return view('questions')->with('result',$result)->with('templatename',$templatename);
}
<<<<<<< Updated upstream
=======

public function viewSectionQue(request $request)
{

     $database  = app('firebase.database');
     $templatename=$request->input('templatename');
     $sectionName=$request->input('sectionName');
        $result = $database->getReference('Questions/'.$templatename.'/'.$sectionName)->getValue();
        // dd($result);
        return view('sectionQuestion')->with('result',$result)->with('templatename',$templatename)->with('sectionName',$sectionName);
}

>>>>>>> Stashed changes
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

         $a=array();
         foreach($question as $q=>$key)
         {
             $que=["q".$q+1=>["question"=>$key,
             "close"=>"0",
             "stop"=>"0",
             "quarantine"=>"1"]];
             array_push($a,$que);
         }
            // return view('templates')->with('result',$result);
        $updates = [
<<<<<<< Updated upstream
            'Users/questions/'.$template_name.'/'.$name => $question,
       ];
       $database->getReference()->update($updates);
=======
            'Questions/'.$template_name.'/'.$name => $a,
        ];
        $database->getReference()->update($updates);
        $database->getReference('Questions/'.$template_name.'/kshatrugan')->remove();
        $result = $database->getReference('Questions/'.$template_name.'/'.$name)->getValue();
        // dd($result);
        return view('sectionQuestion')->with('result',$result)->with('templatename',$template_name)->with('sectionName',$name);

    }


>>>>>>> Stashed changes

public function section(Request $request)
{

     $database = app('firebase.database');
     $name=$request->input('template_name');
    //  $Name = str_replace(' ', '', $Name);
    //  $name=$Name."_questions";
    return view('abc')->with('name', $name );



}
public function edit(Request $request)
{

    $database = app('firebase.database');
    $id=$request->input('id');
    $question=$request->input('question');
    $template_name=$request->input('template');
    $section=$request->input('section');
    $que=["q".$id+1=>["question"=>$question,
    "close"=>"0",
    "stop"=>"0",
    "quarantine"=>"1"]];

    $database->getReference('Questions/'.$template_name.'/'.$section.'/'.$id )
    ->set($que);
    $result = $database->getReference('Questions/'.$template_name.'/'.$section)->getValue();
        // dd($result);
        return view('sectionQuestion')->with('result',$result)->with('templatename',$template_name)->with('sectionName',$section);
}
}
