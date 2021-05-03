<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging;
use Kreait\Firebase\Messaging\Notification;

class FirebaseController extends Controller
{
    public function __construct(Database $database, Messaging $messaging)
    {
        $this->database = $database;
        $this->messaging = $messaging;
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
            $templates=$database->getReference('Users/questions/')->getChildKeys();
             return view('userpg')->with('templates',$templates);
        }
        public function template(Request $request){
            $database = app('firebase.database');
            $name=$request->input('Name');
           


        //   dd($name);
            // return view('auditors')->with('result',$result);
            $database->getReference('Users/questions/'.$name)->set(['kshatrugan'=>'']);
             return redirect('/userpg');
        }


        public function levelList(){
            $database = app('firebase.database');
           
          $levelList=$database->getReference('Levels/')->getValue();
            return view('levelList')->with('levelList',$levelList);
        }
        public function levelSave(Request $request){
            
            $database = app('firebase.database');
            $name=$request->input('Name');
           $TaskData = ["name"=> $name];
            $newPostKey = $database->getReference('Levels')->push()->getKey();
            $updates = [ 'Levels/'.$newPostKey => $TaskData,];
            $database->getReference() // this is the root reference
               ->update($updates);
                return redirect('/levelList');
        }

        public function levelEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('editLevelId');
            $levelName=$request->input('editLevelName');
            $level=["name"=>$levelName];
            $database->getReference('Levels/'.$id )->set($level);
            $levelList=$database->getReference('Levels/')->getValue();
            return view('levelList')->with('levelList',$levelList);
        }

        public function layerList(){
            $database = app('firebase.database');
           
          $layerList=$database->getReference('Layers/')->getValue();
            return view('layerList')->with('layerList',$layerList);
        }
        public function layerSave(Request $request){ 
            $database = app('firebase.database');
            $name=$request->input('Name');
            $TaskData = ["name"=> $name ];
            $newPostKey = $database->getReference('Layers')->push()->getKey();
            $updates = [ 'Layers/'.$newPostKey => $TaskData,];
            $database->getReference() // this is the root reference
               ->update($updates);
                return redirect('/layerList');
        }
        public function layerEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('editLayerId');
            $layerName=$request->input('editLayerName');
            $layer=["name"=>$layerName];
            $database->getReference('Layers/'.$id )->set($layer);
            $layerList=$database->getReference('Layers/')->getValue();
            return view('layerList')->with('layerList',$layerList);
           }

        public function machineList(){
            $database = app('firebase.database');  
          $machineList=$database->getReference('Machines/')->getValue();
            return view('machineList')->with('machineList',$machineList);
        }
        public function machineSave(Request $request){ 
            $database = app('firebase.database');
            $name=$request->input('Name');
            $TaskData = ["name"=> $name ];
            $newPostKey = $database->getReference('Machines')->push()->getKey();
            $updates = [ 'Machines/'.$newPostKey => $TaskData,];
            $database->getReference() // this is the root reference
               ->update($updates);
                return redirect('/machineList');
        }   
        public function machineEdit(Request $request){  
         $database = app('firebase.database');
         $id=$request->input('editMachineId');
         $machineName=$request->input('editMachineName');
         $machine=["name"=>$machineName];
         $database->getReference('Machines/'.$id )->set($machine);
         $machineList=$database->getReference('Machines/')->getValue();
         return view('machineList')->with('machineList',$machineList);
        }
        public function userList(){
            $database = app('firebase.database');  
          $userList=$database->getReference('Users/')->getValue();
          $layerList=$database->getReference('Layers/')->getValue();
          $levelList=$database->getReference('Levels/')->getValue();
            return view('userList')->with('userList',$userList)->with('layerList', $layerList)->with('levelList',$levelList);
        }

        public function userEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('id');
            $name=$request->input('Name');
            $email=$request->input('email');
            $mobile=$request->input('mobile');
            $level=$request->input('level');
            $layer=$request->input('layer');
            $user=["Name"=>$name, "email"=>$email, "mobile"=>$mobile,"level"=>$level, "layer"=>$layer,];
            $database->getReference('Users/'.$id )->set($user);
            $userList=$database->getReference('Users/')->getValue();
            return view('userList')->with('userList',$userList);
        }

        public function queView(){
            $database = app('firebase.database');  
          $questions=$database->getReference('Questions/')->getValue();
          $layerList=$database->getReference('Layers/')->getValue();
          $levelList=$database->getReference('Levels/')->getValue();
          $sectionList=$database->getReference('Section/')->getValue();
            return view('displayQue')->with('questions',$questions)->with('layerList', $layerList)->with('levelList',$levelList)->with('sectionList',$sectionList);
        }
        public function queEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('id');
            $layer_name=$request->input('layer_name');
            $level_name=$request->input('level_name');
            $section_name=$request->input('section_name');
            $question=$request->input('question');
            $close=$request->input('close');
            $stop=$request->input('stop');
            $quarantine=$request->input('quarantine');
            $questionView=["layer_name"=>$layer_name, "level_name"=>$level_name, "section_name"=>$section_name,"question"=>$question, "close"=>$close,"stop"=>$stop,"quarantine"=>$quarantine,];
            $database->getReference('Questions/'.$id )->set($questionView);
            $questions=$database->getReference('Questions/')->getValue();
            return redirect('displayQue')->with('questions',$questions);
        }
        public function sectionList(){
            $database = app('firebase.database');
           
          $sectionList=$database->getReference('Section/')->getValue();
            return view('section')->with('sectionList',$sectionList);
        }
        public function sectionSave(Request $request){ 
            $database = app('firebase.database');
            $name=$request->input('Name');
            $TaskData = ["name"=> $name ];
            $newPostKey = $database->getReference('Section')->push()->getKey();
            $updates = [ 'Section/'.$newPostKey => $TaskData,];
            $database->getReference() // this is the root reference
               ->update($updates);
                return redirect('/section');
        }
        public function sectionEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('editSectionId');
            $sectionName=$request->input('editSectionName');
            $section=["name"=>$sectionName];
            $database->getReference('Section/'.$id )->set($section);
            $sectionList=$database->getReference('Section/')->getValue();
            return view('section')->with('scetionList',$sectionList);
           }
           public function addQuestionDisplay(){
            $database = app('firebase.database');  
          $sectionList=$database->getReference('Section/')->getValue();
          $layerList=$database->getReference('Layers/')->getValue();
          $levelList=$database->getReference('Levels/')->getValue();
            return view('abc')->with('sectionList',$sectionList)->with('layerList', $layerList)->with('levelList',$levelList);
        }


        public function task(){
            $database = app('firebase.database');  
            $userList=$database->getReference('Users/')->getValue();
          $layerList=$database->getReference('Layers/')->getValue();
          $levelList=$database->getReference('Levels/')->getValue();
          $machineList=$database->getReference('Machines/')->getValue();
            return view('task')->with('userList',$userList)->with('layerList', $layerList)->with('levelList',$levelList)->with('machineList',$machineList);
        }

        public function taskSave(Request $request){  
            $database = app('firebase.database');
            $level=$request->input('level');
            $layer=$request->input('layer');
            $user=$request->input('user');
            $userDetails=$database->getReference('Users/'.$user."/")->getValue();
            $userName =  $userDetails['Name'];
            $machine=$request->input('machine');
            $task=$request->input('task');
            $date=$request->input('date');
            $date = str_replace('-', '/', $date);
            $time=$request->input('time');
            $TaskData = ["level"=> $level, "layer"=> $layer, "user"=> $user,
            "userName"=> $userName, "machine"=> $machine, "task"=> $task, "date"=> $date, "time"=> $time ];
            $newPostKey = $database->getReference('Tasks')->push()->getKey();
            $updates = [ 'Tasks/'.$newPostKey => $TaskData,];
            $database->getReference() // this is the root reference
               ->update($updates); 


            
            $messaging = app('firebase.messaging');


            $deviceToken= $userDetails['token'];
            $notification = Notification::fromArray([
                'title' => "Your audit is scheduled at",
                'body'  => $date.' '.$time,
                

            ]);
            

            $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification($notification) // optional
            ->withData($TaskData) // optional
            ;

            $message = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => $notification,
            'data' => $TaskData,
            
            ]);

            $messaging->send($message);
            
               $userList=$database->getReference('Users/')->getValue();
               $layerList=$database->getReference('Layers/')->getValue();
               $levelList=$database->getReference('Levels/')->getValue();
               $machineList=$database->getReference('Machines/')->getValue();
                 return view('task')->with('userList',$userList)->with('layerList', $layerList)->with('levelList',$levelList)->with('machineList',$machineList);
        }


        public function taskEdit(Request $request){  
            $database = app('firebase.database');
            $id=$request->input('id');
            $level=$request->input('level');
            $layer=$request->input('layer');
            $user=$request->input('user');
            $userDetails=$database->getReference('Users/'.$user."/")->getValue();
            $userName =  $userDetails['Name'];
            $machine=$request->input('machine');
            $task=$request->input('task');
            $date=$request->input('date');
            $date = str_replace('-', '/', $date);
            $time=$request->input('time');
            $TaskData = ["level"=> $level, "layer"=> $layer, "user"=> $user,
            "userName"=> $userName, "machine"=> $machine, "task"=> $task, "date"=> $date, "time"=> $time ];
            $database->getReference('Tasks/'.$id )->set($TaskData);

            $messaging = app('firebase.messaging');


            $deviceToken= $userDetails['token'];
            $notification = Notification::fromArray([
                'title' => "Your audit is scheduled at",
                'body'  => $date.' '.$time,
                

            ]);
            

            $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification($notification) // optional
            ->withData($TaskData) // optional
            ;

            $message = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => $notification,
            'data' => $TaskData,
            
            ]);

            $messaging->send($message);

              $userList=$database->getReference('Users/')->getValue();
               $layerList=$database->getReference('Layers/')->getValue();
               $levelList=$database->getReference('Levels/')->getValue();
               $machineList=$database->getReference('Machines/')->getValue();
               $taskList=$database->getReference('Tasks/')->getValue();
                 return view('taskList')->with('taskList',$taskList)->with('userList',$userList)->with('layerList', $layerList)->with('levelList',$levelList)->with('machineList',$machineList);
                }



        public function taskList(){
            $database = app('firebase.database');  
            $taskList=$database->getReference('Tasks/')->getValue();
            $userList=$database->getReference('Users/')->getValue();
            $layerList=$database->getReference('Layers/')->getValue();
            $levelList=$database->getReference('Levels/')->getValue();
            $machineList=$database->getReference('Machines/')->getValue();
              return view('taskList')->with('taskList',$taskList)->with('userList',$userList)->with('layerList', $layerList)->with('levelList',$levelList)->with('machineList',$machineList);
        }
        public function noticeList(){
            $database = app('firebase.database');  
            $userList=$database->getReference('Users/')->getValue();
            $noticeList=$database->getReference('Notice/')->orderbychild('time','DESC')->getValue();
             return view('noticeList')->with('userList',$userList)->with('noticeList', $noticeList);
        }


        public function noticeSave(Request $request){ 
            $database = app('firebase.database');
            $user=$request->input('user');
            $userDetails=$database->getReference('Users/'.$user."/")->getValue();
            $userName =  $userDetails['Name'];
            $subject=$request->input('subject');
            $notice=$request->input('notice');
            date_default_timezone_set('Asia/Kolkata');
            $time = date("F j, Y, g:i a");  
            $TaskData = ["user"=> $user, "subject"=> $subject, "userName"=> $userName, "notice"=> $notice, "time"=>$time  ];
            $newPostKey = $database->getReference('Notice')->push()->getKey();
            $updates = [ 'Notice/'.$newPostKey => $TaskData,];

            $messaging = app('firebase.messaging');


            $deviceToken= $userDetails['token'];
            $notification = Notification::fromArray([
                'title' => $subject,
                'body'  => $notice,
                

            ]);
            

            $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification($notification) // optional
            ->withData($TaskData) // optional
            ;

            $message = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => $notification,
            'data' => $TaskData,
            
            ]);

            $messaging->send($message);
            $database->getReference() // this is the root reference
               ->update($updates);
                return redirect('/noticeList');

               
        }   
        
        }

