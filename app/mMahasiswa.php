<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mMahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'm_mahasiswas';

    protected $primaryKey = 'mhId';

    protected $guarded = 'mhId';

    protected $fillable = array('mhNama', 'mhAlamat', 'mhJk');

    protected $dates =['deleted_at'];
}
