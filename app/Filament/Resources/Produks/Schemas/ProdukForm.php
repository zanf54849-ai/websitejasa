<?php

namespace App\Filament\Resources\Produks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProdukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan & Material')
                    ->description('Data paket pekerjaan plafon, partisi, ornamen, atau survey.')
                    ->icon('heroicon-o-information-circle')
                    ->columns(2)
                    ->schema([
                        TextInput::make('kode')
                            ->label('Kode Paket')
                            ->prefixIcon('heroicon-o-hashtag')
                            ->placeholder('e.g. PL-PVC-01, PL-GYP-01')
                            ->required(),
                        TextInput::make('nama')
                            ->label('Nama Layanan / Paket')
                            ->prefixIcon('heroicon-o-wrench-screwdriver')
                            ->placeholder('e.g. Plafon Gypsum Drop Ceiling')
                            ->required(),
                        TextInput::make('tipe')
                            ->label('Kategori')
                            ->prefixIcon('heroicon-o-tag')
                            ->placeholder('e.g. Plafon Gypsum, Plafon PVC, Partisi Ruangan')
                            ->required(),
                        TextInput::make('jenis')
                            ->label('Satuan / Jenis Pekerjaan')
                            ->prefixIcon('heroicon-o-cube')
                            ->placeholder('e.g. Paket Terpasang (m²), List Profil (m¹)')
                            ->required(),
                        Textarea::make('deskripsi')
                            ->label('Rincian & Spesifikasi Teknis')
                            ->placeholder('Rincian material, ketebalan rangka, merk gypsum/PVC, dan ruang lingkup pekerjaan...')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Harga & Kapasitas Pengerjaan')
                    ->description('Tarif per satuan/meter dan estimasi kuota tim tukang.')
                    ->icon('heroicon-o-currency-dollar')
                    ->columns(2)
                    ->schema([
                        TextInput::make('harga')
                            ->label('Tarif / Harga (Rp)')
                            ->prefix('Rp')
                            ->required()
                            ->numeric(),
                        TextInput::make('stok')
                            ->label('Kapasitas / Luas Tersedia (m²)')
                            ->prefixIcon('heroicon-o-archive-box')
                            ->required()
                            ->numeric(),
                    ]),

                Section::make('Foto & Dokumentasi Proyek')
                    ->description('Foto referensi hasil pengerjaan atau material terkait.')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Unggah Foto')
                            ->image()
                            ->disk('public')
                            ->directory('produk')
                            ->visibility('public')
                            ->imagePreviewHeight('250')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
