<?php

namespace App\Http\Controllers\Admin\Abilities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttributeRequest;
use App\Models\Abilities\Attribute;
use App\Services\AttributeService;
use Illuminate\Http\JsonResponse;

class AttributeController extends Controller
{
    /**
     * Get a list of attributes
     * @return JsonResponse
     */
    public function index()
    {
        $attributes = Attribute::getAttributesList();
        return new JsonResponse($attributes);
    }

    /**
     * Create the attribute
     * @param AttributeRequest $request
     * @return JsonResponse
     */
    public function store(AttributeRequest $request)
    {
        $attribute = $this->save($request);
        return new JsonResponse($attribute, 201);
    }

    /**
     * Update the attribute
     * @param AttributeRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(AttributeRequest $request, $id)
    {
        $attribute = $this->save($request, $id);
        return new JsonResponse($attribute);
    }

    /**
     * Create or update the attribute
     * @param $request
     * @param null $id
     * @return mixed
     */
    private function save($request, $id = null)
    {
        $validated = $request->validated();
        return AttributeService::save($validated, $id);
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
     * Delete the attribute
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        AttributeService::delete($id);
        return new JsonResponse("The attribute was deleted");
    }
}
