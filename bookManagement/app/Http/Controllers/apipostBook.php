<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class apipostBook extends Controller


{
  public function getBook(Request $request){
    $book = Book::All();
    $data = json_decode($book, true);
        return response()->json($data);

  }

    public function postBook(Request $request){
        $jsondata = file_get_contents('php://input');
        $data = json_decode($jsondata, true);
        

         echo $data['bookName'];



        Book::create($data);

         return response()->json([
            [
                'jjhkkk' => true,
               
                'data' => $data,
                'bookCode' => $data['bookCode']
            ]
        ]);

    }
}
