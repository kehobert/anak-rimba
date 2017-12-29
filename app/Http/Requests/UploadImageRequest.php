<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 21/12/2017
 * Time: 14.31
 */

namespace App\Http\Requests;


class UploadImageRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules =  [
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,bmp,png|size:2000'
        ];

        $photos = count($this->input('news_photo'));

        foreach(range(0, $photos) as $index) {
            $rules['news_photo.' . $index] = 'image|mimes:jpeg,bmp,png|max:200000';
        }

        return $rules;
    }
}