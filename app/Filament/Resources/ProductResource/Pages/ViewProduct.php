<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\Page;
use App\Models\Product;

class ViewProduct extends Page
{
    protected static string $resource = ProductResource::class;

    protected static string $view = 'filament.resources.product-resource.pages.view-product';

    public Product $record;

    public function mount(Product $record): void
    {
        // Load related models for display
        $this->record = $record->load(['category', 'color', 'typeAssignments.type']);
    }
}
