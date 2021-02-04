<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Profile;
use App\Test;
use App\Booking;
use PDF;

class PrintReportToPDF extends Controller
{
    function print(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->TotalDrReport())->setPaper('a4', 'landscape')->setWarnings(false); 
               
        return $pdf->stream();
    }
        //Total doctor's report

    function TotalDrReport(){
        $doctors = Doctor::get()->all();

        $output = $this->assets();
        $output .= $this->header();
        $output .= '
                  <table class="table">                  
                  <tr class="head border">
                    <td class="td">Doctor Code</td>
                    <td class="td">Doctor Photo</td>
                    <td class="td">Doctor Name</td>
                    <td class="td">Address</td>
                    <td class="td">BirthDay</td>
                    <td class="td">Aniversary</td>
                    <td class="td">Mobile</td>
                    <td class="td">Email</td>
                    <td class="td">Commission</td>
                  </tr>
                  ';
        foreach($doctors as $doctor)
        {
            $output .='<tr class="rowss border">
            <td class="td">'.$doctor->id.'</td>
            <td class="td">';

            if($doctor->img != null)
            {
              $output .='<img src="drs/'.$doctor->img.'" class="rounded" width="80px" height="80px">';
            }

            $output .='
            </td>
            <td class="td">'.$doctor->name.'</td>
            <td class="td">'.$doctor->address1.'<br>'.$doctor->address2.'</td>
            <td class="td">'.$doctor->bday.'</td>
            <td class="td">'.$doctor->ani.'</td>
            <td class="td">'.$doctor->mobile.'</td>
            <td class="td">'.$doctor->email.'</td>
            <td class="td">'.$doctor->commission.'%</td>
            
          </tr>'; 
        }
                
        $output .='               
                  </tbody>
                </table>';


        return $output;
    }
    
    function header(){
        $profile = Profile::get()->first();
        $output = '<center>';
        $output .= '<h1 class="name">'.$profile->name.'</h1>';
        $output .= '<p class="add">'.$profile->address1.'<br/>';
        $output .= $profile->address2.'<br/>';
        $output .= $profile->mobile.', '.$profile->email.'</p>';
        $output .='</center><br><br>';

        return $output;
    }

    function assets(){
        $output = '
            <style>
                .name{
                    font-size:35px;
                    margin-top:-10px;
                }
                .add{
                    font-size:16px;
                    margin-top:-10px;
                }
                .table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }
                  
                  .td{
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }
                .table .head .td, .table .rowss .td{
                    border:1px;
                }
                .head{
                    font-size:14px;
                    font-weight:400;
                    background-color: #dddddd;
                }
                .rowss{
                    font-size:12px;
                    font-weight:400;
                    margin-top:10px;
                }
                .rounded{
                    border-radius:10px;
                }
            </style>';
        
        
        return $output;
    }

    //print test
    function print_Test(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->TotalTestReport())->setPaper('a4')->setWarnings(false); 
               
        return $pdf->stream();
    }

    function TotalTestReport(){
        $test = Test::get()->all();

        $output = $this->assets();
        $output .= $this->header();
        $output .= '
                  <table class="table">                  
                  <tr class="head border">
                    <td class="td">Sr. no</td>
                    <td class="td">Test Code</td>
                    <td class="td">Test Name</td>
                    <td class="td">Test Group</td>
                    <td class="td">Rate</td>
                    <td class="td">Description</td>
                  </tr>
                  ';
        $i = 1;
        foreach($test as $doctor)
        {
            $output .='<tr class="rowss border">
            <td class="td">'.$i.'</td>';         

            $output .='
            <td class="td">'.$doctor->test_id.'</td>
            <td class="td">'.$doctor->tname.'</td>
            <td class="td">'.$doctor->tgrp.'</td>
            <td class="td">'.$doctor->rate.'</td>
            <td class="td">'.$doctor->des.'</td>
            
          </tr>'; 
          $i++;
        }
                
        $output .='               
                  </tbody>
                </table>';


        return $output;
    }

    //print bookings
    function print_Booking(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->TotalBookings())->setPaper('a4', 'landscape')->setWarnings(false); 
               
        return $pdf->stream();
    }

    function TotalBookings(){
        $bookings = Booking::orderby('id', 'DESC')->get()->all();

        $output = $this->assets();
        $output .= $this->header();
        $output .= '
                  <table class="table">                  
                  <tr class="head border">
                    <td class="td">Booking No.</td>
                    <td class="td">Date</td>
                    <td class="td">Patient Photo</td>
                    <td class="td">Patient Name</td>
                    <td class="td">Refered by</td>
                    <td class="td">Mobile</td>
                    <td class="td">Email</td>
                    <td class="td">Document No.</td>
                  </tr>
                  ';
        foreach($bookings as $booking)
        {
            $output .='<tr class="rowss border">
            <td class="td">'.$booking->bno.'</td>';

            $date = date_create($booking->date);
            $output .= '<td class="td">'.date_format($date, 'd/m/yy').'</td>
            <td class="td">';

            if($booking->url != null)
            {
              $output .='<img src="patients/'.$booking->url.'" class="rounded" width="80px" height="80px">';
            }

            $output .='
            </td>
            <td class="td">'.$booking->sirName.' '.$booking->name.'</td>
            <td class="td">'.Doctor::where('id', $booking->doctor_id)->first()->name.'</td>
            <td class="td">'.$booking->mobile.'</td>
            <td class="td">'.$booking->email.'</td>
            <td class="td">'.$booking->doctype.' ('.$booking->docnum.')</td>
            
          </tr>'; 
        }
                
        $output .='               
                  </tbody>
                </table>';


        return $output;
    }
}
