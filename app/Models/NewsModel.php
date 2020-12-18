<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class NewsModel extends Model
{
    protected $table = 'course';
    protected $allowedFields = ['title', 'description', 'link', 'image', 'newsDate', 'newsTime', 'postedOn'];
}