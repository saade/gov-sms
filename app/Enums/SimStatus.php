<?php

namespace App\Enums;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum SimStatus: string implements HasColor, HasDescription, HasIcon, HasLabel
{
    case Unknown = 'unknown';
    case Booting = 'booting';
    case Registering = 'registering';
    case Ready = 'ready';

    public function getColor(): array|string|null
    {
        return match ($this) {
            self::Unknown => Color::Gray,
            self::Booting => Color::Yellow,
            self::Registering => Color::Blue,
            self::Ready => Color::Green,
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Unknown => 'Unknown',
            self::Booting => 'Booting',
            self::Registering => 'Registering',
            self::Ready => 'Ready',
        };
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::Unknown => 'The SIM card status is unknown.',
            self::Booting => 'The SIM card is booting.',
            self::Registering => 'The SIM card is registering.',
            self::Ready => 'The SIM card is ready.',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Unknown => 'heroicon-o-question-mark-circle',
            self::Booting => 'heroicon-o-refresh',
            self::Registering => 'heroicon-o-globe-alt',
            self::Ready => 'heroicon-o-check-circle',
        };
    }
}
