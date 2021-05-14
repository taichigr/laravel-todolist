<?php

namespace App;

use App\Listitem;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function listitem(): hasMany
    {
        return $this->hasMany('App\Listitem');
    }

    public function hasIncompleteListItems()
    {
        $auth = Auth::user();
        $user = $this::where('id', $auth->id)->first();
        $userlistitems = $user->listitem;
        $incompletelistitems = $userlistitems->where('category_id', 1);
        return $incompletelistitems;
    }

    public function hasCompleteListItems()
    {
        $auth = Auth::user();
        $user = $this::where('id', $auth->id)->first();
        $userlistitems = $user->listitem;
        $completelistitems = $userlistitems->where('category_id', 2);
        return $completelistitems;
    }
    public function hasHoryuListItems()
    {
        $auth = Auth::user();
        $user = $this::where('id', $auth->id)->first();
        $userlistitems = $user->listitem;
        $horyulistitems = $userlistitems->where('category_id', 3);
        return $horyulistitems;
    }

    public function inputSave($input)
    {

    }
}
