<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
final class TransactionPartnerTelegramAds extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "telegram_ads"
         * @var string
         */
        public string $type,
    ) {
    }
}
