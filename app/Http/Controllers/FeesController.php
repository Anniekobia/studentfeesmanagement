<?php

namespace App\Http\Controllers;

use App\Fees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class FeesController extends Controller
{
    public function payForm(){
        return view('Annunziata/fees');
    }
    public function recordPayment(Request $request)
    {
        // Validate the request...
        $request->validate([
            'studentnumber' => 'required:fees,student_number',
            'dateofpayment' => 'required:fees,date_of_birth',
            'amount' => 'required:fees,amount'
        ]);

        $payment = new Fees();
        $payment->student_number = $request->studentnumber;
        $payment->date_of_payment = $request->dateofpayment;
        $payment->amount = $request->amount;
        $payment->created_at = now();
        $payment->save();
        return Redirect::back();
    }

    public function searchResult(Request $request)
    {
        switch ($request->input('action')) {
            case 'all':
                $totalfees = Fees::sum('amount');
                $student=null;
                return view('Annunziata/search')->with('total',$totalfees)->with('specific',$student);
                break;
            case 'one':
                $id=$request->search;
                $student=Fees::where('student_number','=',$id)->first();
                $totalfees=null;
                return view('Annunziata/search')->with('specific',$student)->with('total',$totalfees);
                break;
        }
    }
}

