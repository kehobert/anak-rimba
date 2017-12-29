<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 21/12/2017
 * Time: 14.31
 */

namespace App\Http\Requests;


class NewsFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'news_title' => 'required',
            'news_content' => '',
            'news_writer' => '',
            'news_editor' => '',
            'news_tag' => '',
            'news_image' => '',
            'news_active' => '',
            'news_visible' => ''
        ];
    }
}