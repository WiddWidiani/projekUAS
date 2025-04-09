<?php

namespace App\Filament\Resources\ArticlesResource\Pages;

use App\Filament\Resources\ArticlesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateArticles extends CreateRecord
{
    protected static string $resource = ArticlesResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
     
        return $data;
    }
}
