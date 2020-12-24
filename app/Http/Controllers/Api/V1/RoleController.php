<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return RoleResource::collection(Role::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRoleRequest $request
     * @return RoleResource
     */
    public function store(CreateRoleRequest $request): RoleResource
    {
        return new RoleResource(
            Role::create([
                'name' => strtolower($request->get('name'))
            ])
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return RoleResource
     */
    public function show(Request $request): RoleResource
    {
        return new RoleResource($request->role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRoleRequest $request
     * @return RoleResource
     */
    public function update(UpdateRoleRequest $request): RoleResource
    {
        return new RoleResource(
            tap($request->role)->update([
                'name' => strtolower($request->get('name'))
            ])
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function destroy(Request $request)
    {
        $request->role->delete();

        return response(null, 204);
    }
}
