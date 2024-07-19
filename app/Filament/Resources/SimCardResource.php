<?php

namespace App\Filament\Resources;

use App\Enums\SimStatus;
use App\Filament\Resources\SimCardResource\Pages;
use App\Models\SimCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SimCardResource extends Resource
{
    protected static ?string $model = SimCard::class;

    protected static ?string $recordTitleAttribute = 'phone_number';

    protected static ?string $modelLabel = 'SIM Card';

    protected static ?string $pluralModelLabel = 'SIM Cards';

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'SIM Cards';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->mask('(99) 99999-9999')
                    ->required(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone_number_formatted')
                    ->label('Phone Number')
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->description(
                        fn (SimStatus $state): string => $state->getDescription()
                    )
                    ->badge()
                    ->searchable(),
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
            'index' => Pages\ManageListSimCards::route('/'),
        ];
    }
}
