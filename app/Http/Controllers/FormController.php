<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
public function handle(Request $request)
{
  $name = $request->input('my_name');
  $age = $request->input('my_age');
  $gender = $request->input('gender');
  $addressPart= $request->input('my_address');
  $fulladdress = implode('-', $addressPart);

    return view('result', [
        'my_name' => $name,
        'my_age' => $age,
        'gender'  => $gender,
        'my_address' => $fulladdress
    ]);

  }
}