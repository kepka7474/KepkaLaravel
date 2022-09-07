<?php

namespace App\Services\Continents\Handlers;

use App\Models\Continent;
use App\Services\Continents\Repositories\ContinentsRepository;
use Nette\Schema\ValidationException;

class CreateContinentHandler
{
    private ContinentsRepository $continentsRepository;

    public function __construct(ContinentsRepository $continentsRepository)
    {
        $this->continentsRepository = $ $continentsRepository;
    }

    public function handle(array  $data): Continent
    {
        $this->validateData($data);
        return  $this->continentsRepository->create($data);
    }

    private function validateData(): void
    {
        if (empty($data['name'])) {
            throw new ValidationException('Name is required');
        }
    }
}
