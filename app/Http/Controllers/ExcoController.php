<?php

namespace App\Http\Controllers;

use App\Models\Paid;
use App\Models\User;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Activity;
use App\Models\CdsGroup;
use App\Models\Transaction;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\ProjectAdditionalImage;

class ExcoController extends Controller
{
    //
    public function dashboard()
    {
        $data['user'] = $user = Auth::user();
        $data['corpers'] = User::where('cdsgroup', $user->cdsgroup)->get();
        $data['active'] = 'dashboard';
        $data['cdsgroup'] = CdsGroup::find($user->cdsgroup);
        $data['announcements'] = Notification::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();
        $data['projects'] = Project::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        $data['transactions'] = Transaction::where('user_id', $user->id)->get();
        return view('exco.dashboard', $data);
    }
    public function createannouncement()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'dashboard';
        return view('exco.createannouncement', $data);
    }
    public function saveannouncement(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'batch' => 'required',
            'time' => 'required'
        ]);
        Notification::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'batch' => serialize($request->batch),
            'state' => $user->state,
            'lga' => $user->lga,
            'cdsgroup' => $user->cdsgroup,
        ]);
        try {
            $cdsmembers = User::where('cdsgroup', $user->cdsgroup)
                ->where('lga', $user->lga)->where('state', $user->state)->get();
            foreach ($cdsmembers as $user) {
                $email = $user->email;
                $title = $request->title;
                $cdsgroup = $user->cdsgroup;
                $description = $request->description;
                $data = array('name' => $user->name, 'description' => $description, 'email' => $email, 'cdsgroup' => $cdsgroup, 'title' => $title);
                Mail::send('mail.cdsmessage', $data, function ($message) use ($email, $cdsgroup) {
                    $message->to($email)->subject('Important message from ' . $cdsgroup);
                    $message->from('nysc@cds.cthostel.com', 'NYSC-CDS');
                });
            }
            return redirect()->back()->with('message', "Announcement Created Successfully! CDS Members will now be notified!");
        } catch (\Exception $e) {
            // Handle the error
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            // Optionally, you could log the error or perform other actions
            // Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteann($id)
    {
        $announcement = Notification::find($id);
        $announcement->delete();
        return redirect()->back()->with('message', "Announcement Deleted Successfully!");
    }
    public function notifications()
    {

        $data['user'] = $user = Auth::user();
        $data['cdsgroup'] = CdsGroup::find($user->cdsgroup);


        $data['active'] = 'notifications';


        $data['announcements'] = Notification::where('cdsgroup', $user->cdsgroup)
            ->where('lga', $user->lga)->where('state', $user->state)->latest()->get();

        return response()->view('exco.notification', $data);
    }
    public function saveWhatsappGroup(Request $request)
    {
        $this->validate($request, [
            'cdsId' => 'required',
            'cdsgroup' => 'required'
        ]);
        $cds = CdsGroup::find($request->cdsId);
        $cds->whatsapp = $request->cdsgroup;
        $cds->save();
        return redirect()->back()->with('message', 'CDS Whatsapp Group Updated Successfully!');
    }

    public function createproject()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'project';
        return view('exco.createproject', $data);
    }

    public function editproject($id)
    {
        $data['project'] = Project::find($id);
        $data['user'] = Auth::user();
        $data['active'] = 'project';
        return view('exco.editproject', $data);
    }


    public function saveproject(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "year" => "required",
            "batch" => "required",

            "date" => "required",
            "image" => "required",

        ]);

        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('project_display_image'), $imageName);
        }
        $user = Auth::user();

        $project = Project::create([



            'title' => $request->title,
            'description' => $request->description,
            'batch' => $request->batch,
            'year' => $user->year,
            'date' => $request->date,
            'cdsgroup' => $user->cdsgroup,
            'state' => $user->state,
            'lga' => $user->lga,
            'type' => 'cdsproject',
            'image' => $imageName,

        ]);

        return redirect()->back()->with('message', 'Project added successfully!');
    }

    public function changeprojectstatus($id)
    {
        $project = Project::find($id);

        $project->status = !$project->status;
        $project->save();
        return redirect()->back()->with('message', 'Project Status Updated Successfully!');
    }

    public function updateproject(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            // "type" => "required",

        ]);
        $project = Project::find($request->id);


        $user = Auth::user();
        if ($request->image !== null) {
            $previousImagePath = public_path('project_display_image') . '/' . $project->image;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('project_display_image'), $imageName);
            $project->image = $imageName;
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->batch = $request->batch;
        $project->year = $request->year;
        $project->date = $request->date;
        $project->cdsgroup = $user->cdsgroup;
        $project->state = $user->state;
        $project->lga = $user->lga;
        $project->save();



        return redirect()->back()->with('message', 'Project updated successfully!');
    }




    public function addprojectimages($id)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'project';
        $data['project'] = $project = Project::find($id);
        $data['additionalimages'] = ProjectAdditionalImage::where('project_id', $project->id)->get();
        return view('exco.projectimages', $data);
    }
    public function deleteprojectimage($id)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'project';

        $additionalimage = ProjectAdditionalImage::find($id);
        $previousImagePath = public_path('project_additional_image') . '/' . $additionalimage->image;
        if (file_exists($previousImagePath)) {
            unlink($previousImagePath);
        }
        $additionalimage->delete();

        return redirect()->back()->with('message', 'Project additional image deleted successfully!');
    }
    public function saveadditionalimages(Request $request)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'project';
        $this->validate($request, ['id' => 'required', 'images' => 'required']);
        $data['project'] = $project = Project::find($request->id);
        foreach ($request->images as $img) {

            $imageName = $img->hashName();
            $img->move(public_path('project_additional_image'), $imageName);
            ProjectAdditionalImage::create(['project_id' => $project->id, 'image' => $imageName]);
        }

        return redirect()->back()->with('message', 'Project additional imagees added successfully!');
    }


    public function projects()
    {

        $data['user'] = $user = Auth::user();

        $data['active'] = 'dashboard';

        $data['projects'] = Project::where('cdsgroup', $user->cdsgroup)
        ->where('lga', $user->lga)->where('state', $user->state)                
        ->latest()->get();


        return response()->view('exco.viewprojects', $data);
    }

    public function payments()
    {
        $data['user'] = $user = Auth::user();

        $data['active'] = 'dashboard';

        $data['payments'] = Payment::where('cdsgroup', $user->cdsgroup)
                ->where('lga', $user->lga)->where('state', $user->state)                
                ->latest()->get();


        return response()->view('exco.viewpayments', $data);
    }



    public function deleteproject($id)
    {
        $project = Project::find($id);
        $previousImagePath = public_path('project_display_image') . '/' . $project->image;
        if (file_exists($previousImagePath)) {
            unlink($previousImagePath);
        }
        $project->delete();
        return redirect()->back()->with('message', 'Project Deleted Successfully!');
    }
    public function addpayment()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'project';
        return view('exco.addpayment', $data);
    }
    
    public function savepayment(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "amount" => "required",
            "batch" => "required",
            "bank" => "required",
            "accountno" => "required",
            "accountname" => "required",

        ]);

       
        $user = Auth::user();

        $payment = Payment::create([
            'userId' => $user->id,
            'title' => $request->title,
            'description' => $request->description,
            'batch' => $request->batch,
            'amount' => $request->amount,
            'deadline' => $request->deadline,
            'bank' => $request->bank,
            'accountname' => $request->accountname,
            'accountno' => $request->accountno,
            'adminphone' => $user->phone,
            'year' => $user->year,
            'cdsgroup' => $user->cdsgroup,
            'state' => $user->state,
            'lga' => $user->lga,

        ]);
        
        try {
            if($request->batch == "All Batch") {
                $cdsmembers = User::where('cdsgroup', $user->cdsgroup)
                ->where('lga', $user->lga)->where('state', $user->state)                
                ->get();        

            } else {
                $cdsmembers = User::where('cdsgroup', $user->cdsgroup)
                ->where('lga', $user->lga)->where('state', $user->state)
                ->where('batch', $request->batch)
                ->get();
           

            }
            // dd($cdsmembers);
            foreach ($cdsmembers as $user) {
              
                $email = $user->email;
                $title = $request->title;
                $cdsgroup = $user->cdsgroup;
                $description = $request->description;
                $accountname = $request->accountname;
                $bank = $request->bank;
                $accountno = $request->accountno;
                $amount = $request->amount;
                $data = array('accountname' => $accountname,'bank'=>$bank,'accountno' => $accountno,'amount' => $amount, 'name' => $user->name, 'description' => $description, 'email' => $email, 'cdsgroup' => $cdsgroup, 'title' => $title);
                // dd($data, $user);
                $data = array('name' => 'Pelumi', 'ref' => '$ref', 'email' => $email, 'waybill' => '$waybill');
                Mail::send('mail.waybillsent', $data, function ($message) use ($email) {
                    $message->to($email)->subject('Waybill Marked Sent!');
                    $message->from('info@securewaybill.com', 'SECUREWAYBILL');
                });
                // Mail::send('mail.cdspayment', $data, function ($message) use ($email, $cdsgroup) {
                //     $message->to($email)->subject('Urgent Payment Alert ');
                //     $message->from('nysc@cds.cthostel.com', 'NYSC-CDS');
                // });
              
            }
            return redirect()->back()->with('message', "Announcement Created Successfully! CDS Members will now be notified!");
        } catch (\Exception $e) {
            // Handle the error
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            // Optionally, you could log the error or perform other actions
            // Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('message', 'Payment added successfully! CDS Members have been notified');
    }
    
    public function deletepayments($id)
    {
        $payment = Payment::find($id);
       
        $payment->delete();
        return redirect()->back()->with('message', 'Payment Deleted Successfully!');
    }
    public function viewtransactions($id) {
        $data['active'] = 'dashboard';
        $data['payment'] = $payment = Payment::find($id);
        $data['corpers'] =  $cdsmembers = User::where('cdsgroup', $payment->cdsgroup)
        ->where('lga', $payment->lga)->where('state', $payment->state)->get();

        return view('exco.viewtransactions',$data);
    }
    public function markpaid($paymentId,$userId) {
        $user = Auth::user();
        $paid = Paid::create([
            'payment_id' =>$paymentId,
            'user_id' =>$userId,
            'verifiedBy' => $user->name,
        ]);
        return redirect()->back()->with('message', 'User Marked Paid Successfully!');
        
    }
    public function markunpaid($paymentId,$userId) {
        $user = Auth::user();
        $paid = Paid::where('payment_id',$paymentId)->where('user_id',$userId)->delete();
        return redirect()->back()->with('message', 'User Marked UnPaid Successfully!');
        
    }
}
