<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram
 * Stars</a>. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class RefundStarPayment extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Identifier of the user whose payment will be refunded
         * @var int
         */
        public int $user_id,
        /**
         * Telegram payment identifier
         * @var string
         */
        public string $telegram_payment_charge_id,
    ) {
    }
}
