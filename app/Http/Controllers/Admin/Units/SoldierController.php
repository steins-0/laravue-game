<?php

namespace App\Http\Controllers\Admin\Units;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SoldierRequest;
use App\Models\Units\Soldier\Soldier;
use App\Services\SoldierService;
use Illuminate\Http\JsonResponse;

class SoldierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Soldier::getLastSoldiers();
    }

    /**
     * Add a new soldier
     * @param SoldierRequest $request
     * @return JsonResponse
     */
    public function store(SoldierRequest $request)
    {
        $soldier = $this->save($request);
        return new JsonResponse($soldier);

    }

    /**
     * Update the soldier
     * @param SoldierRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(SoldierRequest $request, $id)
    {
        $soldier = $this->save($request, $id);
        return new JsonResponse($soldier);
    }

    /**
     * Save or update the soldier
     * @param $request
     * @param null $id
     * @return mixed
     */
    private function save($request, $id = null)
    {
        $validated = $request->validated();
        return SoldierService::save($validated, $id);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
