<?php

declare(strict_types=1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\PersonStoreRequest;
use App\Http\Requests\Person\PersonUpdateRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonController extends Controller
{
    public function index(): JsonResource
    {
        $people = Person::orderBy('id')->get();

        return PersonResource::collection($people);
    }

    public function store(PersonStoreRequest $request): Model
    {
        $validated = $request->validated();

        $person = Person::create($validated);

        return $person;
    }

    public function update(PersonUpdateRequest $request, Person $person): Model
    {
        $validated = $request->validated();

        $person->update($validated);

        return $person;
    }
}
