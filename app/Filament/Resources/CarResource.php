<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use App\Models\CarImage;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Select::make('brand_id')->relationship('brand', 'name')->required(),
                Select::make('type_id')->relationship('type', 'name')->required(),
                TextInput::make('model_year')->numeric()->required(),
                TextInput::make('price')->numeric()->required(),
                TextInput::make('mileage')->numeric()->required(),
                Textarea::make('description'),

                FileUpload::make('images')
                    ->label('صور السيارة')
                    ->multiple()
                    ->reorderable()
                    ->directory('cars')
                    ->image()
                    ->maxFiles(5)
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('brand.name')->label('Brand')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('type.name')->label('Type')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('model_year')->label('Model Year')->sortable(),
                Tables\Columns\TextColumn::make('price')->label('Price')->money('EGP', true)->sortable(),
                Tables\Columns\TextColumn::make('mileage')->label('Mileage')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->dateTime()->sortable(),
                ImageColumn::make('images.0') ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
