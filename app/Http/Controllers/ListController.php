<?php

namespace App\Http\Controllers;

use App\Models\JsUser;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{
    public function getList () {
        $data = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $users = $data->json();
        $models = JsUser::paginate(10);

        if(JsUser::all()->count() > 0){
            return view('list', ['users' => $models]);
        }else{
            foreach ($users['users'] as $user){
                $newUser = JsUser::create([
                    'id' => $user['id'],
                    'age' => $user['age'],
                    'email' => $user['email'],
                    'name' => $user['name']
                ]);
                $newUser->save();
            }
            return view('list', ['users' => $models]);
        }
    }
}
