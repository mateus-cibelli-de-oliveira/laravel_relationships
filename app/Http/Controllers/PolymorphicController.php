<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function Polymorphic()
    {
        /*
         * Listagem de comentários na CIDADE!
         * 
        $city = City::where('name', 'GUARULHOS')->get()->first();
        echo "Cidade: <b>{$city->name}:</b></br>";

        $comments = $city->comments()->get();

        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }
        *
        */

        /*
         * Listagem de comentários no ESTADO!
         * 
        $state = State::where('name', 'Tocantins')->get()->first();
        echo "Estado: <b>{$state->name}:</b></br>";

        $comments = $state->comments()->get();

        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }
        *
        */

        // Listagem de comentários no PAÍS!

        $country = Country::find(1);
        echo "Estado: <b>{$country->name}:</b></br>";

        $comments = $country->comments()->get();

        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }


    }

    public function PolymorphicInsert()
    {

        /*
        * Ele faz um comentário para a CIDADE!
        *
        $city = City::where('name', 'GUARULHOS')->get()->first();
        echo $city->name;

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} ".date('YmdHis'),
        ]);
        var_dump($comment->description);
        *
        */

        /*
        * Ele faz um comentário no ESTADO!
        *
        $state = State::where('name', 'Tocantins')->get()->first();
        echo $state->name;

        $comment = $state->comments()->create([
            'description' => "New Comment State {$state->name} ".date('YmdHis'),
        ]);
        var_dump($comment->description);
        *
        */
        
        // Ele faz um comentário para o PAÍS!

        $country = Country::find(1);
        echo $country->name;

        $comment = $country->comments()->create([
            'description' => "New Comment Country {$country->name} ".date('YmdHis'),
        ]);
        var_dump($comment->description);

    }
}
