<?php

namespace App\Policies;

use App\User;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    public function view(User $user, Employee $employee)
    {
        
        return true;
    }


    public function create(User $user, Employee $employee)
    {
      
	  
        return true;
    }

    
    public function update(User $user, Employee $employee)
    {
        
        return true;
    }

   
    public function delete(User $user, Employee $employee)
    {

        return true;
    }
}
