<?php
/**
 * Created by PhpStorm.
 * User: Kevho
 * Date: 11/12/2017
 * Time: 09.54
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_title', 'news_content', 'news_writer', 'news_editor', 'news_tag', 'news_image', 'news_active', 'news_visible', 'updated_at', 'created_at'];
}
