<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Eligibles;
use App\Models\Guest;
use App\Models\Venue;
use App\User;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('candidate.dashboard',compact('user'));
    }
    public function GatePass($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadView('candidate.gatepass', compact('user'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download("Tuf Gate Pass-".$id.'.pdf');
    }
    public function GuestGatePass($id)
    {
        $guest = Guest::where('id',$id)->first();
        $pdf = PDF::loadView('candidate.guestGatePass', compact('guest'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download("Guest Gate Pass-".$id.'.pdf');
    }
}
