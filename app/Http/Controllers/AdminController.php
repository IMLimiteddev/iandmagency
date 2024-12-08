<?php

namespace App\Http\Controllers;

use App\Mail\BookingCancelNotification;
use App\Mail\BookingNotification;
use App\Mail\RequestResponseNotification;
use App\Models\Booking;
use App\Models\Company;
use App\Models\Education;
use App\Models\Information;
use App\Models\Media;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{

    public function book(Request $request)
    {

        $request->validate([
            'company_email'=>'required',
            'candidate_email'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'link'=>'required',
            'details'=>'required',
        ]);

        $book = new Booking();
        $book->company_email = $request->company_email;
        $book->candidate_email = $request->candidate_email;
        $book->start_date = $request->start_date;
        $book->end_date = $request->end_date;
        $book->start_time = $request->start_time;
        $book->end_time = $request->end_time;
        $book->link = $request->link;
        $book->participants= $request->participants;
        $book->details = $request->details;
        $book->save();

        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingNotification($message));

        Alert::success('Success', 'Meeting fixed, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');

    }

    public function updateEvent(Request $request, Booking $booking)
    {
        $request->validate([
            'company_email' => 'required',
            'candidate_email' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'link' => 'required',
            'details' => 'required',
            'participants' => 'required',
        ]);

        $book = Booking::updateOrCreate(
            [
                'id' => $booking->id,
            ],
            [
                'company_email' => $request->company_email,
                'candidate_email' => $request->candidate_email,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'link' => $request->link,
                'participants' => $request->participants,
                'details' => $request->details,
            ]
        );

        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingNotification($message));

        Alert::success('Success', 'Meeting fixed, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');
    }


    public function bookEvent()
    {
        $data['infos'] = Information::all();
        $data['companies'] = Company::all();
        return view('admin.book-event', $data);
    }

    public function activateUser($info)
    {

        $theUser= Information::findOrFail($info);

        if ($theUser->is_active == 1 ) {
            Alert::info('Info', 'This user is already activated.');
            return back();
        }

        if ($theUser->is_active == 0 ) {
            $theUser->is_active = 1;
            $theUser->save();
            Alert::success('Success', 'You have activated this user. The profile will be live now.');
            return back();
        }
    }
    public function deactivateUser($info)
    {

        $theUser= Information::findOrFail($info);

        if ($theUser->is_active == 0 ) {
            Alert::info('Info', 'This user is already deactivated.');
            return back();
        }

        if ($theUser->is_active == 1 ) {
            $theUser->is_active = 0;
            $theUser->save();
            Alert::success('Success', 'You have deactivated this user. The profile will not be displayed anymore.');
            return back();
        }
    }

    public function allCompanies()
    {

        $users = User::whereCode(3189)->where('is_new', true)->get();
        foreach ($users as $user) {
            $user->is_new = false;
            $user->save();
        }

        $data['companies'] = Company::all();
        return view('admin.all-company', $data);
    }

    public function allCandidates()
    {
        $users = User::with('info')->whereCode(3188)->get();
        foreach ($users->where('is_new', true) as $user) {
            $user->is_new = false;
            $user->save();
        }
        return view('admin.all-candidates', compact('users'));
    }

    public function allUsers()
    {
        $users = User::with('info')->get();
        return view('admin.all-users', compact('users'));
    }

    public function allRequest()
    {
        $data['reqs'] = ModelsRequest::all();

        foreach ($data['reqs']->where('is_new', true) as $req) {
            $req->is_new = false;
            $req->save();
        }
        return view('admin.all-request', $data);
    }
    public function allEvents()
    {
        $data['bookings'] = Booking::all();

        return view('admin.all-events', $data);
    }

    public function singleCandidate($email)
    {

        $data['user'] = User::with('info')->whereEmail($email)->first();
        $data['works'] = Work::where('user_id', $data['user']->id)->get();
        $data['eds'] = Education::where('user_id', $data['user']->id)->get();
        $data['medias'] = Media::where('user_id', $data['user']->id)->get();
        $data['bookings'] = Booking::where('candidate_email', $data['user']->email)->get();
        // $data['reqs'] = ModelsRequest::where('candidate_email', $data['user']->email)->get();
        return view('admin.single-candidate', $data);
    }

    public function singleRequest($request_id)
    {
        $data['request'] = ModelsRequest::findOrFail($request_id);
        return view('admin.single-request', $data);
    }

    public function cancelEvent($booking)
    {

        $book = Booking::findOrFail($booking);
        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingCancelNotification($message));

        Alert::success('Success', 'Meeting Cancelled, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');
    }

    public function remakeEvent($booking)
    {

        $data['booking']= Booking::findOrFail($booking);
        $data['infos'] = Information::all();
        $data['companies'] = Company::all();
        return view('admin.remake-event', $data);

    }

    public function respondRequest($req)
    {

        $respond = ModelsRequest::findOrFail($req);
        $respond->response ='We got you mail, we will respond to you shortly.';
        $message = [
            'response' => 'We got you mail, we will respond to you shortly.',
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($respond->company_email)
            ->send(new RequestResponseNotification($message));

            $respond->save();
        Alert::success('Success', 'Response Mail sent.');
        return back();
    }



}
