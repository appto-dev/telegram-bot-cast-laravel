<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The withdrawal succeeded.
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalStateSucceeded extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the state, always "succeeded"
         * @var string
         */
        public string $type,
        /**
         * Date the withdrawal was completed in Unix time
         * @var int
         */
        public int $date,
        /**
         * An HTTPS URL that can be used to see transaction details
         * @var string
         */
        public string $url,
    ) {
    }
}
