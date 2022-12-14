<?php

namespace App\Services\Continents\Handlers;

use App\Models\Continent;
use App\Services\Continents\Repositories\ContinentsRepository;

class UpdateContinentHandler
{
    private ContinentsRepository $continentsRepository;

    public function __construct(ContinentsRepository $continentsRepository)
    {
        $this->continentsRepository = $ $continentsRepository;
    }

    public function handle(Continent  $continent, array $data): Continent
    {
        return  $this->continentsRepository->update($continent, $data);
    }
}
