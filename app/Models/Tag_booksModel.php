<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class EventsModel extends Model
{
    protected $table = 'events';
    protected $allowedFields = ['bookId','tagId'];
}