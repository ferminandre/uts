<?php 

namespace App\Repositories;

use App\kontakModel;

class kontakRepository implements kontakInterface {
    public function create(char $nama, char $telepon, char $email, text $alamat){
        $newtodo = new kontakModel;
        $newtodo->nama = $nama;
        $newtodo->telepon = $telepon;
        $newtodo->email = $email;
        $newtodo->alamat = $alamat;
        $newtodo->save();
    }

    public function all(){
        return kontakModel::all();
    }

    public function getById($id){
        return kontakModel::findOrFail($id);
    }

    public function update($id, $nama, $telepon, $email, $alamat){
        kontakModel::findOrFail($id)->update(['nama'=>$nama , 'telepon'=>$telepon, 'email'=>$email, 'alamat'=>$alamat]);
    }
    
    public function delete($id){
        $newkomentar = kontakModel::find($id);
        $newkomentar->delete();
    }
}
?>