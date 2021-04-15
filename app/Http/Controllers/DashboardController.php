<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CtStatus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->paginate = 20;
        $this->success = 'bg-green-500';
        $this->fails = 'bg-red-500';
        $this->statuses = CtStatus::All();
    }

    public function countCandidate()
    {
        $applicantCnt = Candidate::whereNull('status_id')->count();
        $kivCnt = Candidate::where('status_id', $this->statuses->where('code', 'KIV')->first()->id)->count();
        $interviewCnt = Candidate::where('status_id', $this->statuses->where('code', 'INT')->first()->id)->count();
        $doneCnt = Candidate::where('status_id', $this->statuses->where('code', 'DONE')->first()->id)->count();

        return response()->json(array(
            'applicantCnt' => $applicantCnt,
            'kivCnt' => $kivCnt,
            'interviewCnt' => $interviewCnt,
            'doneCnt' => $doneCnt,
        ),200);
    }

    public function getCandidate()
    {
        $currlist = request('filter');
        if ($currlist) {
            $candidates = Candidate::where('status_id', $this->statuses->where('code', request('filter'))->first()->id);
        } else {
            $candidates = Candidate::whereNull('status_id');
        }
        $candidates = $candidates->orderBy('created_at')->get();

        return response()->json(array(
            'result' => view('candidate.list', [
                'candidates' => $candidates,
                'statuses' => $this->statuses,
            ])->render(),
        ),200);
    }
}
