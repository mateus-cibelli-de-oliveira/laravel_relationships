<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function OneToMany()
    {
        // $country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();

        foreach($countries as $country)
        {
                echo "<b>{$country->name}</b>";

            $states = $country->states;

            foreach($states as $state)
            {
                echo "<br>{$state->initials} - {$state->name}";
            }

            echo "<hr>";
        }
    }

    public function ManyToOne()
    {
        $stateName = 'São Paulo';
        $state = State::where('name', $stateName)->get()->first();
        echo "<b>{$state->name}</b>";

        $country = $state->country()->get()->first();
        echo "<br>País: {$country->name}";
    }

    public function OneToManyTwo()
    {
        // $country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();

        foreach($countries as $country)
        {
                echo "<b>{$country->name}</b>";

            $states = $country->states;

            foreach($states as $state)
            {
                echo "<br>{$state->initials} - {$state->name}:";

                foreach($state->cities as $city)
                {
                    echo " {$city->name}, ";
                }

            }

            echo "<hr>";
        }
    }

    public function OneToManyInsert()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
        ];

        $country = Country::find(1);

        $insertState = $country->states()->create($dataForm);
        var_dump($insertState->name);;
    }

    // Outra forma de fazer o INSERT

    public function OneToManyInsertTwo()
    {
        $dataForm = [
            'name' => 'Paraná',
            'initials' => 'PR',
            'country_id' => '1',
        ];

        $insertState = State::create($dataForm);
        var_dump($insertState->name);;
    }

    public function HasManyThrough()
    {
        $country = Country::find(1);
        echo "<br>{$country->name}:</br> <br>";

        $cities = $country->cities;

        foreach($cities as $city)
        {
            echo " {$city->name}, ";
        }
        echo "<br></br>Total de cidades: {$cities->count()}";

    }
}
