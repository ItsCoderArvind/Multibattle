<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Booking;
use App\Bookingtest;
use App\Code;
use App\Settings;

class BookingController extends Controller
{
    function index(){
        $user = User::get()->first();

        $booking = Booking::get()->all();
        return view('admin.bookings', ['active' => 'booking', 'user' => $user, 'booking' => $booking]);
    }

    function addIndex(){
        $user = User::get()->first();

        $bdate = Settings::where('code', 'bdate')->get()->first();
        $bcode = Settings::where('code', 'bcode')->get()->first();
        if($bdate->vcode != date('yy-m-d')){
            $bdate->vcode = date('yy-m-d');
            $bdate->save();

            $bcode->vcode = '0';
            $bcode->save();
        }

        $bno = Settings::where('code', 'bcode')->get()->first()->vcode + 1;
        return view('admin.addbooking', ['active' => 'booking', 'user' => $user, 'date' => date('yy-m-d'), 'bno' => $bno]);
    }

    function add(Request $request){
        //validating data
        $this->validate($request, [
            'image'        => 'nullable|mimes:jpeg,jpg,bmp,png|max:1024',
            'bookingNo'    => 'required',
            'date'         => 'required',
            'name'         => 'required',
            'drCode'       => 'required',
        ]);
        
        //upload img 
        $new_name = "";
        $url = "default.jpg";
        if($request->file('image') != null){
            $file = $request->file('image');
            $new_name = rand(). '.' . $file-> getClientOriginalExtension();

            if($file->move(public_path("patients"), $new_name)){
              $url = $new_name;
            }
        }

        //fatching booking num
        $bookingNo = Code::where('title', 'booking')->get()->first()->vlu + 1;
        
        //creating booking
        Booking::create([
            'bno'         => $request->get('bookingNo'),
            'date'        => $request->get('date'),
            'sirName'     => $request->get('sirName'),
            'name'        => $request->get('name'),
            'sex'         => $request->get('sex'),
            'age'         => $request->get('age'),
            'doctype'     => $request->get('doctype'),
            'docnum'      => $request->get('docnum'),
            'mobile'      => $request->get('mobile'),
            'email'       => $request->get('email'),
            'doctor_id'      => $request->get('drCode'),
            'sample'      => $request->get('sample'),
            'takenby'     => $request->get('takenby'),
            'centrename'  => $request->get('centrename'),
            'url'         => $url,
            'status'      => '0',
            'des'      => $request->get('des'),
        ]);
        
        //creating test details
        $tc = $request->input('tcode');
        for($i = 0; $i < count($tc); $i++){
            Bookingtest::create([
                'booking_id'  => $bookingNo,
                'test_id'      => $tc[$i],
            ]);
        }

        //Updateing bookingNo            
        $bkn = Code::where('title', 'booking')->get()->first();
        $bkn->vlu = $bookingNo;
        $bkn->save();
        
        //Updating bno 
        $bcode = Settings::where('code', 'bcode')->get()->first();
        $bcode->vcode = $request->get('bookingNo');
        $bcode->save();       

        session()->flash('success_message', 'Booking added successfully.');
        return back();
    }

    function editIndex($bookingNo){
        $user = User::get()->first();
        $booking = Booking::where('id', $bookingNo)->first();
        $bt = Bookingtest::where('booking_id', $bookingNo)->get()->all();
        return view('admin.editbooking', ['active' => 'booking', 'user' => $user, 'booking' => $booking, 'bt' => $bt]);
    }

    function edit(Request $request, $id){
            //validating data
        $this->validate($request, [
            'image'        => 'nullable|mimes:jpeg,jpg,bmp,png|max:1024',
            'bookingNo'    => 'required',
            'date'         => 'required',
            'name'         => 'required',
            'drCode'       => 'required',
        ]);
        
        //upload img 
        $new_name = "";
        $url = "default.jpg";
        if($request->file('image') != null){
            $file = $request->file('image');
            $new_name = rand(). '.' . $file-> getClientOriginalExtension();

            if($file->move(public_path("patients"), $new_name)){
              $url = $new_name;
            }
        }

        $booking = Booking::where('id', $id)->first();
        $booking->sirName    = $request->get('sirName');
        $booking->name       = $request->get('name');
        $booking->sex        = $request->get('sex');
        $booking->age        = $request->get('age');
        $booking->doctype    = $request->get('doctype');
        $booking->docnum     = $request->get('docnum');
        $booking->mobile     = $request->get('mobile');
        $booking->email      = $request->get('email');
        $booking->doctor_id  = $request->get('drCode');
        $booking->sample     = $request->get('sample');
        $booking->takenby    = $request->get('takenby');
        $booking->centrename = $request->get('centrename');
        $booking->url        = $url;
        $booking->des        = $request->get('des');
        $booking->save();

        //creating test details
        $tc = $request->input('t_id');
        $test_c = $request->input('tcode');
        for($i = 0; $i < count($tc); $i++){
            if(Bookingtest::where('id', $tc[$i])->exists()){
                if($test_c[$i] == null){
                    Bookingtest::where('id', $tc[$i])->delete();
                }
                else{
                    $bt = Bookingtest::where('id', $tc[$i])->first();
                    $bt->test_id = $test_c[$i];
                    $bt->save();
                }
            }
            else{
                Bookingtest::create([
                    'booking_id'  => $id,
                    'test_id'      => $test_c[$i],
                ]);
            }
        }

        session()->flash('success_message', 'Booking updated successfully.');
        return back();
    }

    function delete($id){
        $td = Bookingtest::where('booking_id', $id)->count();
        for($i = 0 ; $i < $td ; $i++){
            $tds = Bookingtest::where('booking_id', $id)->first();
            $tds->delete();   
        }        
        
        $test = Booking::where('id', $id)->first();
        $test->delete();        

        session()->flash('success_message', 'Booking deleted successfully.');
        return back();
    }
}
