<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                Forms\Components\Select::make('property_id')
                    ->relationship('property', 'name')
                    ->required(),

                Forms\Components\DatePicker::make('start_date')
                    ->required(),

                Forms\Components\DatePicker::make('end_date')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'En attente',
                        'accepted' => 'Accepté',
                        'rejected' => 'Rejeté',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Utilisateur')
                    ->sortable(),

                Tables\Columns\TextColumn::make('property.name')
                    ->label('Propriété')
                    ->sortable(),

                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'pending' => 'warning',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'En attente',
                        'accepted' => 'Accepté',
                        'rejected' => 'Rejeté',
                        default => 'Inconnu',
                    }),               
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('accept')
                    ->label('Accepter')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->action(fn (Booking $record) => $record->update(['status' => 'accepted'])),
                    
                Tables\Actions\Action::make('reject')
                    ->label('Refuser')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->action(fn (Booking $record) => $record->update(['status' => 'rejected'])),
            ])            
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
