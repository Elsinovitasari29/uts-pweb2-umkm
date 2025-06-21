<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Umkm;
use App\Models\Pembina;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUsers = User::count();
        $totalUmkm = Umkm::count();
        $totalPembina = Pembina::count();

        return [
            Stat::make('Total Users', $totalUsers)
                ->description('Jumlah user terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('primary'),
            Stat::make('Total UMKM', $totalUmkm)
                ->description('Jumlah produk yang tersedia')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('danger'),
            Stat::make('Total Pembina', $totalPembina)
                ->description('Jumlah pembina yang terdaftar')
                ->descriptionIcon('heroicon-m-user')
                ->color('success'),
        ];
    }

     protected static bool $isLazy = true; // ← ini langsung muat widget
}

