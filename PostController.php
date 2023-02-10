<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
  
class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        // $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10');
     $response = Http::withHeaders([
            'Authorization' => 'token' 
        ])->get('https://api.thecatapi.com/v1/images/search?limit=10');
  
        $jsonData = $response->json();
        return view('view');
    }
      public function dog_index()
    {
        // $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10');
     $response = Http::withHeaders([
            'Authorization' => 'token' 
        ])->get('https://api.thedogapi.com/v1/breeds/search?limit=10');
  
        $jsonData = $response->json();
        return view('dog_view');
    }
     public function view_data()
    {
        // $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10');
     $response = Http::withHeaders([
            'Authorization' => 'token' 
        ])->get('https://api.thecatapi.com/v1/images/search?limit=10');
  
        $jsonData = $response->json();
        return response()->json(['data' => $jsonData]);

    }
        public function view_dogs()
    {
        // $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10');
     $response = Http::withHeaders([
            'Authorization' => 'token' 
        ])->get('https://api.thedogapi.com/v1/breeds?page=1&limit=20');
  
        $jsonData = $response->json();
        // dd($jsonData);
        return response()->json(['data' => $jsonData]);

    }
}