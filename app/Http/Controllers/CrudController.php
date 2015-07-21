<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateStudent;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Student;
use App\Faculty;
use App\User;
use Auth;

class CrudController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$students = Student::has('faculty')->get();

		return view('crud.index', compact('students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$faculties = Faculty::lists('faculty', 'id');
		
		return view('crud.create', compact('faculties'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateStudent $request)
	{
		if ($request->hasFile('photo')) {
    	
    		$image = $request->file('photo');

    		$imageName = $image->getClientOriginalName();

    		$input = $request->all();

    		$input['photo'] = $imageName;

    		$destinationPath = 'photo';

    		$request->file('photo')->move($destinationPath, $imageName);

    		$student = Student::create($input); 

    		return redirect('/');
		}
		else{
			
			$input = $request->all();

			$student = Student::create($input); 

    		return redirect('/');

		}
						
	}

	public function edit($id)
	{
		$student = Student::findOrFail($id);

		$faculties = Faculty::lists('faculty', 'id');
		
		return view('crud.update', compact('student', 'faculties'));
	}

	public function update($id, CreateStudent $request)
	{
		
		if ($request->hasFile('photo')) {
    	
    		$student = Student::findOrFail($id);

    		$image = $request->file('photo');

    		$imageName = $image->getClientOriginalName();

    		$input = $request->all();

    		$input['photo'] = $imageName;

    		$destinationPath = 'photo';

    		$request->file('photo')->move($destinationPath, $imageName);

    		$student->update($input); 

    		return redirect('/');
		}
		else{
			
			$student = Student::findOrFail($id);

			$input = $request->all();

			$student->update($input);

			return redirect('/');

		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$student = Student::findOrFail($id);

		$student->delete();

		return redirect('/');
	}

	public function register()
	{
		
		return view('crud.register');

	}

	public function login()
	{
		
		return view('crud.login');

	}

	public function postRegister(RegisterRequest $request)
	{
		$input = $request->all();

		$password = bcrypt($request->input('password'));
		$input['password'] = $password;

		$register = User::create($input);

		/*
		
		$user = User::where('email', === $request->input('email'));

		$user->assignRole(1);

		*/

		return redirect()->route('index');		

	}

	public function postLogin(LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');

		if(Auth::attempt($credentials)){
			
			/*
			if(Auth::user()->hasRole('admin')){
				return redirect()->route('backend');
			}
			*/

			return redirect()->route('index');

		}
		else{
			return 'False';
		}


	}

	public function logout()
	{
		
		Auth::logout();

		return redirect()->route('index');

	}

}