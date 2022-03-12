<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Payment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App;
use App\Models\Photos;

class HomeController extends Controller
{
    //

    public function index(){

        return view('Guardian.Welcome_Guardian');
    }

    public function redirects(){
     

        if(Auth::id()){
        
            if(Auth::user()->usertype=='0')
            {
                $data1=DB::table('photos')
                ->join('users','photos.g_id','users.id')
                ->select('photos.*')->get();
                $users=user::find(Auth::user());
                return view('Guardian.home',compact('users','data1'));
            }


                    }

                    else{

                        return redirect()->back();
                    }

    }

    public function ViewProfile(){

        $users=user::find(Auth::user());
        return view('Guardian.home',compact("users"));
        
       }


       public function UploadPhoto(Request $request){

        $data=new Photos();
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('profileimage',$imagename);
        $data->image=$imagename;
        $data->save();
        return redirect()->back();
       }

       public function ViewPhoto(){
         


        $data1=DB::table('photos')
        ->join('users','photos.g_id','users.id')
        ->select('photos.*')->get();
       return view('Guardian.home',compact('data1'));
         

      
        

      
    }


    public function View_Student(){

        return view('Guardian.student');
    }

    public function Add_Student(Request $request){

        $data=new Student();
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('studentimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->session=$request->session;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->cgpa=$request->cgpa;
      
        $data->save();
        return redirect()->back();
    }
    

    public function Show_Student(){
         


        $data=DB::table('students')
        ->join('users','students.g_id','users.id')
        ->select('students.*')->get();
       return view('Guardian.student_profile',compact('data'));
         

      
        

      
    }

    public function All_Courses()
    {

        
        $data=DB::table('courses')
        ->join('students','courses.std_id','students.id')
        ->select('courses.*')->get();
     
       return view('Guardian.courses',compact('data'));
         
    }

    public function All_Payment(){

        $data=DB::table('courses')
        ->join('students','courses.std_id','students.id')
        ->select('courses.*')->get();
      
        return view('Guardian.checkout',compact('data'));
    }

    public function Upload_Payment(Request $request){

        $data=new Payment();
       
      
        $data->name=$request->name;
        $data->email=$request->email;
        $data->s_id=$request->s_id;
        $data->g_id=$request->g_id;
        $data->bankname=$request->bankname;
        $data->acnumber=$request->acnumber;
        $data->date=$request->date;
       
        $data->c_id=$request->c_id;
        $data->save();
        return redirect()->back();
    }


   /* public function View_Payslip(){

        

        $data1=DB::table('courses')
        ->join('students','courses.std_id','students.id')
       
        ->select('courses.*')->get();
       


        $data=DB::table('payments')->find($id)
        ->join('users','payments.g_id','users.id')
        ->select('payments.*')->get();
        return view('Guardian.Payment_Recipt',compact('data','data1'));
    }*/

    public function View_Payslip(Request $request,$id){

        
        $data=DB::table('payments')
        ->Where('payments.id',$id)
        ->join('users','payments.g_id','users.id')
        ->join('courses','payments.c_id','courses.id')
        ->select('payments.*','courses.course_name','courses.total_credit','courses.total_fees')->get();
        
        return view('Guardian.Payment_Recipt',compact('data'));

      
    }


    public function download_pdf(){

        $data=DB::table('payments')
        
        ->join('users','payments.g_id','users.id')
        ->join('courses','payments.c_id','courses.id')
        ->select('payments.*','courses.course_name','courses.total_credit','courses.total_fees')->get();

        $pdf=PDF::loadview('Guardian.Payment_Recipt',compact('data'));
      return $pdf->download('payment.pdf');
    }

    public function payment_table(){


        $data=DB::table('payments')
        ->join('users','payments.g_id','users.id')
        ->join('courses','payments.c_id','courses.id')
        ->select('payments.*','courses.course_name','courses.total_credit','courses.total_fees')->get();
        return view('Guardian.Payment_Table',compact('data'));

    }


    public function Update_Payment($id){
       
        $data=Payment::find($id);
        return view('Guardian.Update_Payment',compact('data'));
     
     }


     public function Edit_Payment(Request $request,$id){
        $data=Payment::find($id);
          
          
           $data->name=$request->name;
           $data->email=$request->email;
          
           $data->bankname=$request->bankname;
           $data->acnumber=$request->acnumber;
           $data->date=$request->date;
         
         
           
           $data->save();
     
           return redirect()->back()->with('message','Payment Updated successfully');
     
       }

       public function Delete_Payment($id){
         
        $data=Payment::find($id);
        $data->delete();
        return redirect()->back();
       }



       public function Chart(){
        
        $users=user::select(DB::raw("COUNT(*) as  count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month('created_at')"))
        ->pluck('count');

        $months=user::select(DB::raw("Month('created_at') as  month"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month('created_at')"))
        ->pluck('month');

        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index=> $month)
        {
            $datas[$month]=$users[$index];
        }
    
        return view('Guardian.Chart',compact('datas'));
       }

    
}

    



