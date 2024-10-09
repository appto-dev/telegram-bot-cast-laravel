<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains information about an incoming shipping query.
 *
 * @version Telegram Bot API 7.10
 */
final class ShippingQuery extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique query identifier
         * @var string
         */
        public string $id,
        /**
         * User who sent the query
         * @var User
         */
        public User $from,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public string $invoice_payload,
        /**
         * User specified shipping address
         * @var ShippingAddress
         */
        public ShippingAddress $shipping_address,
    ) {
    }
}
