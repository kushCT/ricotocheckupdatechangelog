<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return PermissionResource::collection(Permission::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePermissionRequest $request
     * @return PermissionResource
     */
    public function store(CreatePermissionRequest $request): PermissionResource
    {
        return new PermissionResource(
            Permission::create([
                'name' => strtolower($request->get('name'))
            ])
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return PermissionResource
     */
    public function show(Request $request): PermissionResource
    {
        return new PermissionResource($request->permission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return PermissionResource
     */
    public function update(Request $request): PermissionResource
    {
        return new PermissionResource(
            tap($request->role)->update([
                'name' => strtolower($request->get('name'))
            ])
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return Response
     */
    public function destroy(Request $request): Response
    {
        $request->permission->delete();

        return response(null, 204);
    }
}
