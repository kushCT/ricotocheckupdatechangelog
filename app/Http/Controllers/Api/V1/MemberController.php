<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Resources\MemberResource;
use App\Models\Membership;
use App\Models\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Application $project
     * @return AnonymousResourceCollection
     */
    public function index(Application $project): AnonymousResourceCollection
    {
        return MemberResource::collection($project->members);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Application $project
     * @param CreateMemberRequest $request
     * @return MemberResource
     */
    public function store(Application $project, CreateMemberRequest $request): MemberResource
    {
        $member = $project->members->create($request->all());

        return new MemberResource($member);
    }

    /**
     * Display the specified resource.
     *
     * @param Membership $membership
     * @return MemberResource
     */
    public function show(Membership $membership): MemberResource
    {
        return new MemberResource($membership);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMemberRequest $request
     * @return Response
     */
    public function update(UpdateMemberRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Membership $membership
     * @return JsonResponse
     */
    public function destroy(Membership $membership): JsonResponse
    {
        $membership->delete();
        return response()->json(null, 204);
    }
}
