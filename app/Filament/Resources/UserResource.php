<?php

namespace App\Filament\Resources;

use Closure;
use Carbon\Carbon;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rules\Password;
use App\Filament\Resources\UserResource\Pages;
use Filament\Tables\Columns\Summarizers\Range;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Details')->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('steam_id')->required(),
                    TextInput::make('pseudo')->required(),
                    TextInput::make('email')->email()->required()->unique(ignoreRecord: true),
                    DatePicker::make('joined_at')->afterStateUpdated(function (Closure $set, $state) {
                        $set('age', Carbon::parse($state)->age);
                    }),
                    Select::make('squadRole')->label('Squad role')->relationship(titleAttribute: 'name'),
                    TextInput::make('age')
                        ->disabled()
                        ->dehydrated(false),
                    TextInput::make('password')
                        ->password()
                        ->required()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))->visible()
                        ->visible(fn ($livewire) => $livewire instanceof CreateUser)->rule(Password::default()),
                ]),
                Section::make('User Role')->schema([
                    Select::make('roles')->multiple()->relationship('roles', 'name')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('steam_id')->sortable(),
                TextColumn::make('name')->sortable(),
                TextColumn::make('pseudo')->sortable(),
                ImageColumn::make('squadRole.image')->height(25),
                TextColumn::make('email')->sortable(),
                TextColumn::make('joined_at')->sortable(),
                TextColumn::make('age')->sortable(),
                TextColumn::make('roles.name')->weight(FontWeight::Bold)->color('warning')->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    
}
