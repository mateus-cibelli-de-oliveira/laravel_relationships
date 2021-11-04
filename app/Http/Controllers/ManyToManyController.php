<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function ManyToMany()
    {
        $city = City::where('name', 'ARAÇU')->get()->first();
        echo "<b>{$city->name}</b><br>";

        $companies = $city->companies;

        foreach($companies as $company)
        {
            echo " {$company->name}, ";
        }
    }

    public function ManyToManyInverse()
    {
        $company = Company::where('name', 'EspecializaTI')->get()->first();
        echo "<b>{$company->name}</b><br>";

        $cities = $company->cities;

        foreach($cities as $city)
        {
            echo " {$city->name}, ";
        }

    }

    public function ManyToManyInsert()
    {
        $dataForm = [3, 4, 5];

        $company = Company::find(1);
        echo "<b>{$company->name}</b><br>";

        // $company->cities()->attatch($dataForm);
        $company->cities()->sync($dataForm);

        // Esse aqui é para remover!
        // $company->cities()->detach($dataForm);

        $cities = $company->cities;

        foreach($cities as $city)
        {
            echo " {$city->name}, ";
        }
    }
}
