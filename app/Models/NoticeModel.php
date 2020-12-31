<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class NoticeModel extends Model
{
    protected $table = 'notice';
    protected $allowedFields = ['title','image','description','postedOn'];
}