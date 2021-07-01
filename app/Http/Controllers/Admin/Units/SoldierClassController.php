<?php

namespace App\Http\Controllers\Admin\Units;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SoldierClassRequest;
use App\Models\Units\Soldier\SoldierClass;
use App\Services\SoldierClassService;
use Illuminate\Http\JsonResponse;

class SoldierClassController extends Controller
{
    /**
     * Get the last soldier classes
     * @return mixed
     */
    public function index()
    {
        return SoldierClass::getLastClasses();
    }

    /**
     * Create a new soldier class
     * @param SoldierClassRequest $request
     * @return JsonResponse
     */
    public function store(SoldierClassRequest $request)
    {
        $class = $this->save($request);
        return new JsonResponse($class, 201);
    }

    /**
     * Update the soldier class
     * @param SoldierClassRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(SoldierClassRequest $request, $id)
    {
        $class = $this->save($request, $id);
        return new JsonResponse($class);
    }

    /**
     * Create or update the soldier class
     * @param $request
     * @param null $id
     * @return mixed
     */
    private function save($request, $id = null)
    {
        $validated = $request->validated();
        return SoldierClassService::save($validated, $id);
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
     * Delete the class by id
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        SoldierClassService::delete($id);
        return new JsonResponse("The class was deleted");
    }
}
