<?php

namespace App\Filament\Resources\Pembelians\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PembelianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pengajuan Pesanan / Survey')
                    ->description('Detail nomor pesanan dan paket pekerjaan yang dipilih klien.')
                    ->icon('heroicon-o-clipboard-document-list')
                    ->columns(2)
                    ->schema([
                        TextInput::make('kode_pembelian')
                            ->label('ID Pesanan / Survey')
                            ->prefixIcon('heroicon-o-hashtag')
                            ->required()
                            ->unique(ignorable: fn($record) => $record)
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('produk_id')
                            ->label('Paket Pekerjaan')
                            ->relationship('produk', 'nama')
                            ->prefixIcon('heroicon-o-wrench-screwdriver')
                            ->required()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                    ]),

                Section::make('Informasi Klien & Luas Pekerjaan')
                    ->description('Klien pemesan dan estimasi luasan area yang akan dikerjakan.')
                    ->icon('heroicon-o-user')
                    ->columns(2)
                    ->schema([
                        TextInput::make('banyak')
                            ->label('Estimasi Luas Ruangan (m²)')
                            ->prefixIcon('heroicon-o-cube')
                            ->required()
                            ->numeric()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('user_id')
                            ->label('Klien Terdaftar')
                            ->relationship('user', 'name')
                            ->prefixIcon('heroicon-o-identification')
                            ->required()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                    ]),

                Section::make('Estimasi Biaya & Status Pengerjaan')
                    ->description('Kalkulasi biaya dan tahapan pengerjaan di lapangan.')
                    ->icon('heroicon-o-currency-dollar')
                    ->columns(2)
                    ->schema([
                        TextInput::make('bayar')
                            ->label('Total Estimasi Biaya (Rp)')
                            ->prefix('Rp')
                            ->required()
                            ->numeric()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('status')
                            ->label('Status Pekerjaan')
                            ->options([
                                'Verifikasi' => 'Verifikasi / Survey Dijadwalkan',
                                'Proses' => 'Proses Penjadwalan & Material',
                                'Kirim' => 'Mobilisasi Tukang & Alat',
                                'Sampai' => 'Pengerjaan di Lokasi (On Progress)',
                                'Selesai' => 'Pekerjaan Selesai & Bergaransi',
                            ])
                            ->required(),
                    ]),
            ]);
    }
}
