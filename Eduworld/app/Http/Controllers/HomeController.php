<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App;

class HomeController extends Controller
{
    //

    public function redirects(){
     

        if(Auth::id()){
        
            if(Auth::user()->usertype=='0')
            {
                return view('Guardian.home');
            }


                    }

                    else{

                        return redirect()->back();
                    }

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
        ->select('courses.*')->get()
        ->where('id','std_id')->increment('column3','column4');
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

}

    



