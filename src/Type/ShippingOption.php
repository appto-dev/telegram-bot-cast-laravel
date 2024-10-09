<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents one shipping option.
 *
 * @version Telegram Bot API 7.10
 */
final class ShippingOption extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Shipping option identifier
         * @var string
         */
        public string $id,
        /**
         * Option title
         * @var string
         */
        public string $title,
        /**
         * List of price portions
         * @var LabeledPrice
         */
        public LabeledPrice $prices,
    ) {
    }
}
