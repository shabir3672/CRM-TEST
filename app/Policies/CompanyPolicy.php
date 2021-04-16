<?php

namespace App\Policies;

use App\User;
use App\Company;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    
    public function view(User $user, Company $company)
    {
      
        return true;
    }

    
    public function create(User $user, Company $company)
    {
        
        return true;
    }

  
    public function update(User $user, Company $company)
    {

        return true;
    }

  
    public function delete(User $user, Company $company)
    {
      
        return true;
    }
}
