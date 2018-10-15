<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

 class Siswa extends Model
{
    // jika nama tabel bukan plural
    protected $table = 'siswa';
    //whitelist
    protected $fillable = ['siswaNis','siswaNisn','siswaNama','siswaJurusan','siswaGender'];
    //blacklist
    //protected $guarded = 
    // created_at updated_at tidak terpakai
    public $timestamps = false;
     
    // use SoftDeletes;
    // protected $dates = ['deleted_at];
    
}