<?php

namespace App\Http\Controllers;

use App\student;

class PostsController extends controller
{

	public function show($id)
	{
		$id = student::where('id',$id)->first();

		// dd($id);
		if (! $id) {
			 abort(404);
		}

     return view('show',['nam'=>$id ?? 'nothing is here']);
	}
}

?>
