<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Tag_bookModel extends Model
{
    protected $table = 'tag_book';
    protected $allowedFields = ['bookId','tagId'];
}