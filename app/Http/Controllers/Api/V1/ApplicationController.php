<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateApplicationRequest;
use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        return ApplicationResource::collection(
            $request->user->allOrganizations()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateApplicationRequest $request
     * @return ApplicationResource
     */
    public function store(CreateApplicationRequest $request): ApplicationResource
    {
        $project = Application::create($request->all());

        return new ApplicationResource($project);
    }

    /**
     * Display the specified resource.
     *
     * @param Application $project
     * @return ApplicationResource
     */
    public function show(Application $project): ApplicationResource
    {
        return new ApplicationResource($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Application $project
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Application $project): JsonResponse
    {
        $project->delete();

        return response()->json(null, 204);
    }
}
