<?php

namespace cdn;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'idnumber', 'password', 'phonenumber', 'photo'
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


    public function user(User $idnumber)
    {
    	return $this->idnumber;
    }



// Orders

    public function orders()
    {
    return $this->hasMany('cdn\Models\Order');
    }
    public function ordersOfMine()
    {
    	return $this->belongsToMany('cdn\User', 'orders', 'idnumber', 'ordernumber');
    }
    
     public function orderOf()
    {
    	return $this->belongsToMany('cdn\User', 'orders', 'ordernumber', 'idnumber');
    }

    public function pendingOrders()
    {
    	return $this->friendsOfMine()->wherePivot('status', false)->get();
    }


    public function addOrder(User $user)
    {
    	$this->orderOf()->attach($user->id);
    }


    public function orderId()
    {
        return $this->belongsToMany('cdn\Models\Order', 'orderidnumber', 'orderid', 'idnumber');
    }




    // Name

    public function name()
    {
        if ($this->name && $this->email) {
            return "{$this->name} {$this->email}";
        }
        
        if ($this->name) {
            return $this->name;
        }
        return null;
    }
    public function getName()
    {
        if ($this->name && $this->email) {
            return "{$this->name} {$this->email}";
        }
        
        if ($this->name) {
            return $this->name;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getUser() ?: $this->name;
    }
    public function fileToUpload()
    {
    	return $this->avatar();
    }
    
    public function getUser()
    {
    	return $this->name;
    }
           
    public function getUserOrUsername()
    {
    	return $this->getUser();
    }
    
       public function getEmail()
    {
    	return $this->email;
    }
    
        public function getEmailOrEmailAddress()
    {
    	return $this->getEmail() ?: $this->email;
    }
    
    public function getNameOrEmail()
    {
      	return $this->name ?: $this->email;
    }
    
    public function getAvatarUrl()
    {
    	return "{{ asset('images/uploads/avatars') }}/{{ Auth::user->photo }}";
    }
    
        public function getAvatar()
    {
    	return $this->photo();
    }
    
    
    public function ordersByUser()  {
    	return $this->belongsTo('cdn\Models\Order', 'ordernumber');
    
    }
    public function urgentOrders() {
    	return $this->hasMany('cdn\Models\Order', 'urgentordernumber');
    }
    
        public function uploads() {
    	return $this->hasMany('cdn\Models\Upload', 'idnumber');
    }
    

    

    


}