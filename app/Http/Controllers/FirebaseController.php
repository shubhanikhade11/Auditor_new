<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function retrieve(Request $request)
    {
        $database = app('firebase.database');
        $result = $database->getReference('Users/Layer 1')->getValue();

        return view('auditors')->with('result',$result);
    }
    public function retrieve2(Request $request)
    {
        $database = app('firebase.database');
        $result = $database->getReference('Users/Layer 2')->getValue();

        return view('auditors')->with('result',$result);
    }
    public function retrieve3(Request $request)
    {
        $database = app('firebase.database');
        $result = $database->getReference('Users/Layer 3')->getValue();

        return view('auditors')->with('result',$result);
    }

    public function retrieve4(Request $request)
    {
        $database = app('firebase.database');
        $result = $database->getReference('Users/Layer 4')->getValue();

        return view('auditors')->with('result',$result);
    }
    public function record(Request $request)
    {
        $database = app('firebase.database');
        $result = $database->getReference('Users/Layer 1/08m3a9yZhKcW7z7IVYMKTwCrqJv1/audit_report/-MXqk2gnmuRvbuzuKnM0')->getValue();


        $HSE=json_decode($result['HSE'],TRUE);

        $People=json_decode($result['People'],TRUE);

        $ProcessConfor=json_decode($result['ProcessConfor'],TRUE);

        $ProductCon=json_decode($result['ProductCon'],TRUE);

        $S5=json_decode($result['S5'],TRUE);

        $Traceability=json_decode($result['Traceability'],TRUE);

        // dd($HSE,$People,$ProcessConfor,$ProductCon,$S5,$Traceability);
         return view('reports')->with('result',$result)->with('HSE',$HSE)->with('People',$People)->with('ProcessConfor',$ProcessConfor)->with('ProductCon',$ProductCon)->with('S5',$S5)->with('Traceability',$Traceability);


    }

    public function display(Request $request){
        $name=$request->input('name');
        $database = app('firebase.database');
        $reference = $database->getReference('Users/Layer 1')->getChildKeys();

        foreach ($reference as $r){
            $result = $database->getReference('Users/Layer 1/'.$r)->getValue();
            if ($result['Name']==$name){
                $uid=$r;
                break;
            }
        }
        $reports = $database->getReference('Users/Layer 1/'.$uid.'/audit_report')->getValue();
        $user = $database->getReference('Users/Layer 1/'.$uid)->getValue();
        return view('reportDisplay')->with('reports',$reports)->with('name',$name)->with('user',$user);
    }

    public function delete(Request $request)
        {
            $database = app('firebase.database');
            $name=$request->input('name');
            $result1=$database->getReference('Users/Layer 1')->orderByChild('Name')->equalTo($name)->getValue();
            foreach($result1 as $b=>$c){
                $database->getReference('Users/Layer 1/'.$b)->remove();
            }
            $result = $database->getReference('Users/Layer 1')->getValue();
            return view('auditors')->with('result',$result);
        }

        public function verify(Request $request){
            $database = app('firebase.database');
            $name=$request->input('name');
            $result1=$database->getReference('Users/Layer 1')->orderByChild('Name')->equalTo($name)->getValue();

            foreach($result1 as $b=>$c){
                $database->getReference('Users/Layer 1/'.$b.'/account_status')->set('Verified');
            }
            $result = $database->getReference('Users/Layer 1')->getValue();
            return view('auditors')->with('result',$result);

        }

        public function tempDisplay(){
            $database = app('firebase.database');

        //   dd($name);
            // return view('auditors')->with('result',$result);
            $templates=$database->getReference('Questions/')->getValue();
             return view('userpg')->with('templates',$templates);
        }
        public function template(Request $request){
            $database = app('firebase.database');
            $name=$request->input('Name');



        //   dd($name);
            // return view('auditors')->with('result',$result);
            $database->getReference('Questions/'.$name)->set(['kshatrugan'=>'']);
             return redirect('/templates');
        }

}
