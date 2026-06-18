<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Verifie si l'utilisateur est un Administrateur
     * @return bool
     */
    public function isAdmin() : bool{
        return $this->role === 'admin';
    }

    /**
     * Verifie si l'utilisateur est un Etudiant
     * @return bool
     */
    public function isStudent() : bool{
        return $this->role === 'student';
    }

    /**
     * Verifie si l'utilisateur est un enseignant
     * @return bool
     */
    public function isTeacher() : bool{
        return $this->role === 'teacher';
    }

    /**
     * Verifie si l'utilisateur est un parent
     * @return bool
     */
    public function isParent() : bool{
        return $this->role === 'parent';
    }
}