<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class SwitchOrganizationController extends Controller
{
    public function update(Request $request)
    {
        $organization = Organization::findOrFail($request->organization_id);

        if (! $request->user()->switchOrganization($organization)) {
            abort(403);
        }

        return redirect('', 303);
    }
}
