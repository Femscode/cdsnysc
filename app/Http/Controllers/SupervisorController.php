<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\CdsGroup;
use App\Models\Transaction;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    //
    public function dashboard()
    {
        $data['user'] = $user = Auth::user();
        $data['corpers'] = User::where('cdsgroup', $user->cdsgroup)->get();
        $data['excos'] = User::where('cdsgroup', $user->cdsgroup)->where('type',1)->get();
        $data['active'] = 'dashboard';
        $data['cdsgroup'] = CdsGroup::find($user->cdsgroup);
        $data['announcements'] = Notification::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();
        $data['projects'] = Project::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        $data['transactions'] = Transaction::where('user_id', $user->id)->get();
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
    public function viewexcos() {
        
        $data['user'] = $user = Auth::user();
        $data['excos'] = User::where('cdsgroup', $user->cdsgroup)->where('type',1)->get();
        $data['active'] = 'dashboard';
        $data['cdsgroup'] = CdsGroup::find($user->cdsgroup);
        $data['announcements'] = Notification::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();
        $data['projects'] = Project::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        $data['transactions'] = Transaction::where('user_id', $user->id)->get();
        return view('supervisor.excos', $data);
    }
}
