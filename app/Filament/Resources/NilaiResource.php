<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Guru;
use Filament\Tables;
use App\Models\Nilai;
use App\Models\Kegiatan;
use App\Models\Kriteria;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NilaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NilaiResource\RelationManagers;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;
    protected static ?string $navigationLabel = 'Nilai';
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_pelajaran')
                    ->required()
                    ->maxLength(255),

                    Select::make('guru_id')
    ->label('Nama Guru')
    ->options(Guru::all()->pluck('nama', 'id'))
    ->searchable(),

    Select::make('kegiatan_id')
    ->label('Kegiatan')
    ->options(Kegiatan::all()->pluck('nama', 'id'))
    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ket')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guru_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_pelajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
