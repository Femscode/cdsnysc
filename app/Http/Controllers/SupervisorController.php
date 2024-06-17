<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\CdsGroup;
use App\Models\Transaction;
use App\Models\Notification;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    //
    public function dashboard($id)
    {
        $data['user'] = $user = Auth::user();
        $data['cdsgroup'] = CdsGroup::where('uuid',$id)->firstOrFail();      
        $data['corpers'] = User::where('cdsgroup', $id)->get();
        $data['excos'] = User::where('cdsgroup', $id)->where('type',1)->get();
        $data['active'] = 'dashboard';
        $data['announcements'] = Notification::where('cdsgroup', $id)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();
        $data['projects'] = Project::where('cdsgroup', $id)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        $data['payments'] = Payment::where('cdsgroup', $id)
        ->where('lga', $user->lga)->where('state', $user->state)->get();
        return view('supervisor.dashboard', $data);
    }
    public function makeexco($id) {
        $user = User::where('uuid',$id)->first();
        if($user->type == 1) {
            $user->type = 0;
            $user->save();
            return redirect()->back()->with('message','You have removed '.$user->name.' from an Exco');
        }
        $user->type = 1;
        $user->save();
        return redirect()->back()->with('message','You have made '.$user->name.' an Exco');
 

    }
    public function viewexcos($id) {
        
        $data['user'] = $user = Auth::user();
        $data['cdsgroup'] = CdsGroup::where('uuid',$id)->firstOrFail();
        $data['excos'] = User::where('cdsgroup', $id)->where('type',1)->get();
        $data['active'] = 'dashboard';
        $data['announcements'] = Notification::where('cdsgroup', $id)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();
        $data['projects'] = Project::where('cdsgroup', $id)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        $data['transactions'] = Transaction::where('user_id', $user->id)->get();
        return view('supervisor.excos', $data);
    }
}
