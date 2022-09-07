<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eligibles;
use App\User;
use App\Models\Guest;
use App\Models\Venue;
use Barryvdh\DomPDF\Facade as PDF;

class GatePassController extends Controller
{
    public function CandidatePass($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadView('admin.pass.candidatePass', compact('user'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download("Candidate Gate Pass-".$id.'.pdf');
    }
    public function GuestGatePass($id)
    {
        $guest = Guest::with('seat', 'user')->find($id);
        $pdf = PDF::loadView('admin.pass.guestPass', compact('guest'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download("Guest Gate Pass-".$id.'.pdf');
    }
}
