<?php

namespace App\Http\Controllers;

use App\Trainer;
use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/training';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:300'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Trainer
     */
    public function store(Request $request)
    {
        $added = Trainer::create($request->all());
        if($added) {
            $request->session()->flash('status', 'You have successfully stored description!');
        }
        return redirect()->route('trainings');
    }

    public function storeTraining(Request $request)
    {
        $added = Training::create($request->all());
        if($added) {
            $request->session()->flash('status', 'You have successfully stored training!');
        }
        return redirect()->route('trainings');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::where('user_id', Auth::id())->get();

        return view('trainers.index', ['trainers' => $trainers]);
    }

    public function addDescription()
    {
        return view('trainers.addDescription');
    }
    public function addTraining()
    {
        return view('trainers.addTraining');
    }
}
