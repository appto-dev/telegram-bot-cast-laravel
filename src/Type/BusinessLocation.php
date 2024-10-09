<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Contains information about the location of a Telegram Business account.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessLocation extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Address of the business
         * @var string
         */
        public string $address,
        /**
         * Location of the business
         * @var Location|null
         */
        public ?Location $location,
    ) {
    }
}
