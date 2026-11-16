<?php

namespace App\Http\Controllers;

use App\Models\OrganizationType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    public function show() 
    {
        $organizationTypes = OrganizationType::get();
        //$organizationTypes = ['Test'];

        //dump($organizationTypes);

        return view('organizations', compact('organizationTypes'));
    }

}