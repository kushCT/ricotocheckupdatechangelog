<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Team;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ProjectController extends Controller
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
        return ProjectResource::collection(
            $request->user->allProjects()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProjectRequest $request
     * @return ProjectResource
     */
    public function store(CreateProjectRequest $request): ProjectResource
    {
        $project = Team::create($request->all());

        return new ProjectResource($project);
    }

    /**
     * Display the specified resource.
     *
     * @param Team $project
     * @return ProjectResource
     */
    public function show(Team $project): ProjectResource
    {
        return new ProjectResource($project);
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
     * @param Team $project
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Team $project): JsonResponse
    {
        $project->delete();

        return response()->json(null, 204);
    }
}
