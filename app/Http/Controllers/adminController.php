<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostureStatus;
use App\Models\DistanceStatus;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class adminController extends Controller
{
    public function dashboard()
    {
        // Ambil data per bulan
        $perBulanPosture = PostureStatus::selectRaw('YEAR(timestamp) as year, MONTH(timestamp) as month, COUNT(*) as total')
            ->whereYear('timestamp', now()->year)
            ->groupBy('year', 'month')
            ->orderBy('month', 'asc')
            ->get();

        $perBulanDistance = DistanceStatus::selectRaw('YEAR(timestamp) as year, MONTH(timestamp) as month, COUNT(*) as total')
            ->whereYear('timestamp', now()->year)
            ->groupBy('year', 'month')
            ->orderBy('month', 'asc')
            ->get();

        // Format data untuk chart (membuat array bulan dan total)
        $bulan = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        $perBulanPostureCount = array_fill_keys($bulan, 0);
        $perBulanDistanceCount = array_fill_keys($bulan, 0);

        foreach ($perBulanPosture as $data) {
            $perBulanPostureCount[$bulan[$data->month - 1]] = $data->total;
        }

        foreach ($perBulanDistance as $data) {
            $perBulanDistanceCount[$bulan[$data->month - 1]] = $data->total;
        }

        // Kirim data ke view
        return view('admin.dashboard', compact('perBulanPostureCount', 'perBulanDistanceCount'));
    }



    public function controller()
    {
        return view('admin.controller');
    }
    public function laporan()
    {
        return view('admin.laporan');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the user's session
        $request->session()->invalidate();

        // Regenerate session token to prevent session fixation
        $request->session()->regenerateToken();

        // Redirect to the login page or home page
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }
}
