<?php

namespace App\Http\Controllers;

use App\Models\mouServiceModel;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    //

    public function show()
    {
        $services = mouServiceModel::latest()->get();
        //dd($services);
        return view('services.index', compact('services'));
    }

    public function modalShow($id)
    {
        // Retrieve the necessary data using $id
        $service = mouServiceModel::find($id);

        // Prepare the HTML content for the modal body (you can also load a Blade view as a string)
        $htmlContent = view('services.modal-show', compact('service'))->render();

        return response()->json([
            'htmlContent' => $htmlContent
        ]);
    }

    public function view($id)
    {
        // Retrieve the necessary data using $id
        $service = mouServiceModel::find($id);
        $services = mouServiceModel::latest()->limit(3)->get();
        return view('services.view', compact('service','services'));
    }
}
