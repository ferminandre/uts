<?php
namespace App\Repositories;

use App\kontakModel;

interface kontakInterface {
    public function create(char $nama, char $telepon, char $email, text $alamat);
    public function all(); 
    public function getById($id);
    public function delete($id);
    public function update($id, $nama, $telepon, $email, $alamat);
}
?>