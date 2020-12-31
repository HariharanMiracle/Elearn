<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Tag_articleModel extends Model
{
    protected $table = 'tag_article';
    protected $allowedFields = ['articleId','tagId'];
}