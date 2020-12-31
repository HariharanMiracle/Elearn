<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class TagsModel extends Model
{
    protected $table = 'tags';
    protected $allowedFields = ['name'];
}