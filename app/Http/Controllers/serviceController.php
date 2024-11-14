<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    //

    public function show()
    {
        return view('services.index');
    }

    public function modalShow($id)
{
    // Retrieve the necessary data using $id
    // $service = Service::find($id);

    // Prepare the HTML content for the modal body (you can also load a Blade view as a string)
    $htmlContent = view('services.modal-show')->render();

    return response()->json([
        'htmlContent' => $htmlContent
    ]);
}

}
