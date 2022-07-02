<?php

namespace App\Filament\Resources\LaboratoryResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\RelationManagers\HasManyRelationManager;

class ComputersRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'computers';

    protected static ?string $recordTitleAttribute = 'name';

    protected static bool $hasAssociateAction = true;

    protected static bool $hasDissociateAction = true;
    
    protected static bool $hasDissociateBulkAction = true;

    protected static ?string $inverseRelationship = 'laboratory';

    protected static bool $hasViewAction = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Hidden::make('slug')->default(Str::uuid()),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('brand')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('cpu')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('ram')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('hdd')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('sale')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('number')
                    ->required(),
                Forms\Components\DatePicker::make('warranty')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('brand'),
                Tables\Columns\TextColumn::make('model'),
                Tables\Columns\TextColumn::make('cpu'),
                Tables\Columns\TextColumn::make('ram'),
                Tables\Columns\TextColumn::make('hdd'),
                Tables\Columns\TextColumn::make('sale'),
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('warranty')
                    ->date(),
            ])
            ->filters([
                //
            ]);
    }
}