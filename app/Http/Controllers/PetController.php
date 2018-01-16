<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/pets';

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
            'age' => 'required|integer'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Pet
     */
    public function store(Request $request)
    {
        $added = Pet::create($request->all());
        if($added) {
            $request->session()->flash('status', 'You have successfully registered your pet!');
        }
        return redirect()->route('pets');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::where('user_id', Auth::id())
                    ->get();
        return view('pets.index', ['pets' => $pets]);
    }

    public function add()
    {
        return view('pets.add');
    }
    public function addPetToTraining($id)
    {
        $pet = Pet::find($id)->first();
        $trainings = Training::all();
        return view('pets.addPetToTraining', ['pet' => $pet, 'trainings' => $trainings]);
    }
    public function savePetToTraining(Request $request)
    {
        $pet = Pet::find($request->pet_id);
        $pet->training_id = $request->training_id;

        if($pet->save()) {
            $request->session()->flash('status', 'You have successfully assigned your pet!');
        }
        return redirect()->route('pets');
    }


}
