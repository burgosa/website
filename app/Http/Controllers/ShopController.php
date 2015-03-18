<?php namespace App\Http\Controllers;


//services
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

//models and Requests
use App\City;
use App\Category;
use App\Http\Requests;
use \Session;

class ShopController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		
		$data['root_categories'] = Category::where('category_id',1)->get();
		
		return view('shop.index', $data);
	}

	public function cat1($cat1)
	{

		$data['root_categories'] = Category::where('category_id',1)->get();			
		$data['categories'] = Category::where('slug',$cat1)->get();

		return view('shop.category', $data);
	}

	public function cat2($cat1,$cat2)
	{

		$data['root_categories'] = Category::where('category_id',1)->get();
		$data['categories'] = Category::where('slug',$cat2)->get();

		return view('shop.subcategory', $data);
	}

}
