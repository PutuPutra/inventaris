<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function komputer()
    {
        return view('/admin/sarana/komputer/DataKomputer');
    }
    public function tambahkomputer()
    {
        return view('/admin/sarana/komputer/tambahDataKomputer');
    }
}
