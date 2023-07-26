<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashPekerja()
    {
        return view('Pages/DashboardPekerja');
    }
    public function dashPerusahaan()
    {
        return view('Pages/DashboardPerusahaan');
    }
    public function dashAdmin()
    {
        return view('Pages/DashboardAdmin');
    }
}
