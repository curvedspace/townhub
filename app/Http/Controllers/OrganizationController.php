<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\OrganizationType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    public function index() 
    {
        $organizationTypes = OrganizationType::get();
        $organizations = Organization::get();

        return view('organizations', compact('organizationTypes', 'organizations'));
    }

    public function show (Organization $organization)
    {
        return view('organizations.show', [
            'organization' => $organization,
        ]);
    }
}