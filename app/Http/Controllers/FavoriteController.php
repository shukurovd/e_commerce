<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteController extends Controller
{

    

    public function index()
    {
        $user = request()->user()->favorites()->paginate(20);
        
        return $user;
    }

    public function store(Request $request):JsonResponse
    {
        
        request()->user()->favorites()->attach($request->product_id);
     

        return response()->json(['success' => true, ]);
    }


    /*
        TODO refactor response. make standart format
    **/

    public function destroy($favorite_id):JsonResponse
    {
        if(request()->user()->hasFavorite($favorite_id)){
            
            request()->user()->favorites()->detach($favorite_id);

            return response()->json(['success' => true, ]);
        }

        return response()->json(['success' => false, 'message' => 'Favorite does not exist in this user' ]);

    }
}
