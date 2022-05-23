<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function settingAccount()
    {
        return view('pages.dashboard-settings-account');
    }

    public function settingStore()
    {
        return view('pages.dashboard-settings-store');
    }
}
