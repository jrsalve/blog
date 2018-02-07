<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

    	$users =[
		'0' => [
			'firstname' => 'Leonilo jr',
			'lastname' => 'Salve',
			'location' => 'Talisay'
		],
		'1' => [
			'firstname' => 'Vergie',
			'lastname' => 'Salve',
			'location' => 'Talisay City'
		]
	];

	return view('admin.users.index', compact('users'));
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    	//return $request->all();
    }
}
