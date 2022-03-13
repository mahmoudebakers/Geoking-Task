<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class AddLocationFormRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'title' => ['required'],
      'lat' => ['required', 'regex:/^(\+|-)?(?:90(?:(?:\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,6})?))$/'],
      'lng' => ['required', 'regex:/^(\+|-)?(?:180(?:(?:\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,6})?))$/'],
    ];
  }
}
