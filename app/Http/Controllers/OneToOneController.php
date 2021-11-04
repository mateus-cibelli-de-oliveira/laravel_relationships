<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function OneToOne()
    {
        $country = Country::where('name', 'China')->get()->first();

        echo $country->name;
        
        $location = $country->location;
        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }

    public function OneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)
                    ->where('longitude', $longitude)
                    ->get()->first();

        $country = $location->country;
        echo $country->name;           
    }

    public function OneToOneInsert()
    {
        $dataForm = [
            'name' => 'Belgica',
            'latitude' => '89',
            'longitude' => '98',
        ];

        // $country = Country::create($dataForm);
        $country = Country::where('name', 'Italia')->get()->first();

        /* Você pode fazer assim!
         *
         * $location = new Location;
         * $location->latitude = $dataForm['latitude'];
         * $location->longitude = $dataForm['longitude'];
         * $location->country_id = $country->id;
         * $saveLocation = $location->save();
         *
         */

        /* Ou assim! */

        $location = $country->location()->create($dataForm);

    }
}
