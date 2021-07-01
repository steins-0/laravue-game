<?php

namespace App\Http\Controllers\Admin\Abilities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AbilityRequest;
use App\Models\Abilities\Ability;
use App\Services\AbilityService;
use Illuminate\Http\JsonResponse;

class AbilityController extends Controller
{
    /**
     * Get a list of abilities
     * @return mixed
     */
    public function index()
    {
        $abilities = Ability::getAbilities();
        return new JsonResponse($abilities);
    }

    /**
     * Add a new ability
     * @param AbilityRequest $request
     * @return JsonResponse
     */
    public function store(AbilityRequest $request)
    {
        $ability = $this->save($request);
        return new JsonResponse($ability, 201);
    }

    /**
     * Update the ability
     * @param AbilityRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(AbilityRequest $request, $id)
    {
        $ability = $this->save($request, $id);
        return new JsonResponse($ability);
    }

    /**
     * Add or update the ability
     * @param $request
     * @param null $id
     * @return mixed
     */
    private function save($request, $id = null)
    {
        $validated = $request->validated();
        return AbilityService::save($validated, $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Delete the ability by id
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        AbilityService::delete($id);
        return new JsonResponse("The ability was deleted successfully");
    }
}
