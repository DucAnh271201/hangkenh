<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Services\Options\OptionService;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    public function __construct(
        private readonly OptionService $optionService
    )
    {
    }

    public function store(Request $request)
    {
        $this->optionService->store($request);

        return response_success();
    }
}
