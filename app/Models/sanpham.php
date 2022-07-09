<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function loaisp(){
        return $this->belongsTo(loai_sp::class,'id_loai_sp');
    }
    public function nhacc(){
        return $this->belongsTo(nha_cung_cap::class,'id_ncc');
    }
}
