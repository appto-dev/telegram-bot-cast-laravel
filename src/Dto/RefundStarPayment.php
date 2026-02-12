<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram
 * Stars</a>. Returns <em>True</em> on success.
 */
final class RefundStarPayment extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Identifier of the user whose payment will be refunded */
        public int $user_id,
        /** Telegram payment identifier */
        public string $telegram_payment_charge_id,
    ) {
    }
}
