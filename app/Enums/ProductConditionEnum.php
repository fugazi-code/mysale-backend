<?php
namespace App\Enums;
 
enum ProductStatusEnum:string {
    case BrandNew = 'Brand New';
    case LikeNew = 'Like New';
    case LightlyUsed = 'Lightly Used';
    case WellUsed = 'Well Used';
    case HeavilyUsed = 'Heavily Used';
}