<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
  protected $table = 'guests';
  protected $allowedFields = [
    'name',
    'email',
    'website',
    'comment',
    'gender'
  ];

  public function getGuests($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}