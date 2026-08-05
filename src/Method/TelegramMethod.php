<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

/**
 * Базовый контракт для сгенерированных методов Telegram Bot
 * API.
 */
interface TelegramMethod
{
    public function toArray(): array;

    public static function from(mixed ...$payload): static;
}
