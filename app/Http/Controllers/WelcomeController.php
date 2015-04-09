<?php namespace App\Http\Controllers;

//services
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

//models and Requests
use App\City;
use App\Http\Requests;
use \Session;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */


	public function mock()
	{
		return view('mock');
	}


	public function mockcart()
	{
		return view('mockcart');
	}


	public function index()
	{
		return view('welcome');
	}

	public function entra()
	{
		return view('auth.login');
	}

	public function postCity(Requests\SelectCityRequest $request)
	{
		if($request->city == 0) return redirect()->back()->withErrors(['Elige Tu Ciudad']);

		$city = City::find($request->city);

		return view('auth.register')->with('city_name',$city->name);
	}


	public function register()
	{
		if(old('city')){

			$city = old('city');
			
		}else{

			return redirect('/');
		}


		return view('auth.register')->with('city_name',$city);;
	}

}
