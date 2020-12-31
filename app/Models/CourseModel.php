<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CourseModel extends Model
{
    protected $table = 'course';
    protected $allowedFields = ['name', 'description', 'image'];
}