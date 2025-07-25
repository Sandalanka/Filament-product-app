<?php

namespace App\Filament\Resources\ProductCategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Models\ProductType;

class TypeAssignmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'TypeAssignments';
    protected static ?string $title = 'Types'; // Optional custom title

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('type_name')
                    ->label('Name')
                    ->required(),
                TextInput::make('my_bonus_field')
                    ->label('Bonus')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Types')
            ->columns([
                TextColumn::make('type.name')->label('Type Name'),
                TextColumn::make('my_bonus_field')->label('Bonus'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->label('New Product Type')
                ->using(function (array $data, RelationManager $livewire) {
                    // 1. Create ProductType
                    $productType = ProductType::create([
                        'name' => $data['type_name'],
                    ]);

                    // 2. Create TypeAssignment
                    $typeAssignment = $livewire->getRelationship()->create([
                        'type_id' => $productType->id,
                        'my_bonus_field' => $data['my_bonus_field'],
                    ]);

                     return $typeAssignment;
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

   
}
