<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class BooksModel extends Model
{
    protected $table = 'books';
    protected $allowedFields = ['title','pdf'];
}