<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ArticlesModel extends Model
{
    protected $table = 'articles';
    protected $allowedFields = ['title','pdf'];
}