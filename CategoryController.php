<?php

 

namespace Admin;

 

use BaseController, View, Categories, Input, Redirect, Basehelper;

 

class CategoryController extends BaseController {

 

/**

* Display a listing of the resource.

*

* @return Response

*/

public function index()

{

$categories = Categories::paginate(5);

return View::make('admin.category.index', compact('categories'))

->nest('header_menu', 'admin.category.header');

}

 

 

/**

* Show the form for creating a new resource.

*

* @return Response

*/

public function create()

{

$categories = Categories::select('id', 'name', 'level', 'parent')->get()->toArray();

return View::make('admin.category.create', compact('categories'))

->nest('header_menu', 'admin.category.header');

}

 

 

/**

* Store a newly created resource in storage.

*

* @return Response

*/

public function store()

{

$input = Input::all();

$input = Input::except('_token');

Categories::create($input);

return Redirect::route('category.list')

->with('message', '<div class="alert alert-success">Created Successfully.</div>');

}

 

 

/**

* Display the specified resource.

*

* @param  int  $id

* @return Response

*/

public function show($id)

{

//

}

 

 

/**

* Show the form for editing the specified resource.

*

* @param  int  $id

* @return Response

*/

public function edit($id)

{

/*$d = DB::table('categories AS c')

           ->leftJoin('categories AS c2', 'c2.parent_id', '=', 'c.id')

           ->select('c.name', 'c2.name subname')

           ->get();*/

 

   /*$da = DB::select('SELECT c.name, c2.name subname from `dms_categories` c left join `dms_categories` c2 on c2.parent_id=c.id');

 

   $d = array();

   foreach ($da as $value) {

   $a = array();

   $a['name'] = $value->name;

   $a['subname'] = $value->subname;

   array_push($d, $a);

   }

 

   array_count_values($d);

 

   print_r($d);

   exit();*/

 

 

$category = Categories::find($id);

if(is_null($category)) {

return Redirect::route('category.list');

}

return View::make('admin.category.edit', compact('category'))

->nest('header_menu', 'admin.category.header');

}

 

 

/**

* Update the specified resource in storage.

*

* @param  int  $id

* @return Response

*/

public function update($id)

{

$input = Input::except('_token');

$category = Categories::find($id);

if(is_null($category)) {

return Redirect::route('category.list');

}

$category->update($input);

return Redirect::route('category.edit', array($id))

->with('message', '<div class="alert alert-success">Categories updated successfully.</div>');

}

 

 

/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return Response

*/

public function destroy($id)

{

Categories::find($id)->delete();

return Redirect::route('category.list')

->with('message', '<div class="alert alert-success">Categories deleted successfully.</div>');

}

}

9 minutes ago
