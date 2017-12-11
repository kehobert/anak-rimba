<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 11/12/2017
 * Time: 09.54
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_id', 'course_name', 'course_description', 'course_date_start',
        'course_date_end', 'course_registration_deadline', 'course_minimum_participant',
        'course_location', 'course_price', 'course_active'];
}