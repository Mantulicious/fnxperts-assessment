<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Http\Resources\CompanyResource;

class CompanyApiController extends Controller
{
    /**
     * Return a single company with employees and employee_count.
     */
    public function show(Company $company)
    {
        // Load employees relation and employee count
        $company->load('employees')->loadCount('employees');

        return new CompanyResource($company);
    }
}