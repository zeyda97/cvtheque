<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
class User extends Authenticatable

{
    use SoftDeletes;

    use HasFactory;
    use Notifiable;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'email',
        'email_verified_at',
        'role_id',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'role_id' => 'integer',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required|string|max:191',
        'prenom' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'email_verified_at' => 'nullable',
        'role_id' => 'required',
        'password' => 'required|string|max:191',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function NomComplet()
    {
    return $this->prenom." ".$this->nom;
    }

    public function candidats()
    {
        return $this->hasMany(Candidat::class,'user_id');
    }

    public function langues()
    {
        return $this->belongsToMany(Langue::class,'langue_users')
            ->withPivot('niveau_id')
            ->withTimestamps();
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class,'user_id');
    }

    public function competences()
    {
        return $this->hasMany(Competence::class,'user_id');
    }

    public function formations()
    {
        return $this->hasMany(Formation::class,'user_id');
    }

    public function justificatifs()
    {
        return $this->hasMany(Justificatif::class,'user_id');
    }

}
