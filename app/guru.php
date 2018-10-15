<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 class Guru extends Model
{
    // jika nama tabel bukan plural
    protected $table = 'guru';
    //whitelist
    protected $fillable = ['guruNigs','guruNip','guruNama','guruKurikulum','guruJurusan'];
    //blacklist
    //protected $guarded = 
    // created_at updated_at tidak terpakai
    //public $timestamps = false;
     
     use SoftDeletes;
    //protected $dates = ['deleted_at'];
    
}