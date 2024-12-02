<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\User;

class AppViewComposer
{
    protected $appName;

    public function __construct()
    {
        // Ambil nama pengguna dengan id = 1
        $user = User::find(1);
        $this->appName = $user ? $user->name : config('app.name');
    }

    /**
     * Bind data ke view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('appName', $this->appName);
    }
}
