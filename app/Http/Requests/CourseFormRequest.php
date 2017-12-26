<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 21/12/2017
 * Time: 14.31
 */

namespace App\Http\Requests;


class CourseFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'course_name' => 'required',
            'course_description' => '',
            'course_date_start' => '',
            'course_date_end' => '',
            'course_registration_deadline' => '',
            'course_location' => '',
            'course_price' => '',
        ];
    }
}