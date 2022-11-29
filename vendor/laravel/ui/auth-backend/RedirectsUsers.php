<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()

    {
        if(auth()->user()->role=='admin'){
            if (method_exists($this, 'redirectTo')) {
                return $this->redirectTo();
            }
            
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/admin';
        }else
        {
    
            if (method_exists($this, 'redirectTo')) {
                return $this->redirectTo();
            }
            
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
            
            
        }
        
       
        
    }
}
