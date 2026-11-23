<?php

namespace App\Filament\Resources\Pembelians\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PembeliansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pembelian')
                    ->label('ID Pesanan / Survey')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('produk.nama')
                    ->label('Paket Pekerjaan')
                    ->icon('heroicon-o-wrench-screwdriver')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Nama Klien')
                    ->icon('heroicon-o-user')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('banyak')
                    ->label('Estimasi Luas (m²)')
                    ->numeric()
                    ->alignCenter(),
                TextColumn::make('bayar')
                    ->label('Total Estimasi')
                    ->money('idr')
                    ->weight('bold')
                    ->color('primary'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Verifikasi' => 'gray',
                        'Proses' => 'warning',
                        'Kirim' => 'info',
                        'Sampai' => 'success',
                        'Selesai' => 'primary',
                        default => 'secondary',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Verifikasi' => 'heroicon-m-clock',
                        'Proses' => 'heroicon-m-arrow-path',
                        'Kirim' => 'heroicon-m-truck',
                        'Sampai' => 'heroicon-m-wrench',
                        'Selesai' => 'heroicon-m-check-badge',
                        default => 'heroicon-m-information-circle',
                    }),
                TextColumn::make('created_at')
                    ->label('Tanggal Pengajuan')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
