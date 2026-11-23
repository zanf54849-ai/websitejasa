<?php

namespace App\Filament\Resources\Produks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;

class ProduksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->square()
                    ->size(55),
                TextColumn::make('nama')
                    ->label('Layanan / Paket')
                    ->description(fn ($record) => $record->kode)
                    ->weight('bold')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tipe')
                    ->label('Kategori')
                    ->badge()
                    ->color('primary')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jenis')
                    ->label('Spesifikasi / Satuan')
                    ->badge()
                    ->color('gray')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Tarif / Harga')
                    ->money('idr')
                    ->weight('bold')
                    ->color('primary'),
                TextColumn::make('stok')
                    ->label('Kapasitas (m²)')
                    ->icon('heroicon-m-archive-box')
                    ->iconColor('gray')
                    ->numeric()
                    ->alignCenter(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
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
