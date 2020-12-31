<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class VideosModel extends Model
{
    protected $table = 'videos';
    protected $allowedFields = ['title','link','postedOn'];
}