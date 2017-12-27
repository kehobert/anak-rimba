<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 21/12/2017
 * Time: 14.31
 */

namespace App\Http\Requests;


class TestimonyFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'testimony_content' => 'required',
            'testimony_name' => '',
            'testimony_company' => '',
            'testimony_position' => '',
            'testimony_active' => '',
        ];
    }
}