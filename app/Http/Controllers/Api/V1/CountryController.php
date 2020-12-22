<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return CountryResource::collection(Country::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCountryRequest $request
     * @return CountryResource
     */
    public function store(CreateCountryRequest $request): CountryResource
    {
        $country = Country::create($request->all());

        return new CountryResource($country);
    }

    /**
     * Display the specified resource.
     *
     * @param Country $country
     * @return CountryResource
     */
    public function show(Country $country): CountryResource
    {
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCountryRequest $request
     * @return Response
     */
    public function update(UpdateCountryRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Country $country
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Country $country): JsonResponse
    {
        $country->delete();

        return response()->json(null, 204);
    }
}
