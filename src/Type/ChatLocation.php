<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a location to which a chat is connected.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatLocation extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The location to which the supergroup is connected. Can't be a live location.
         * @var Location
         */
        public Location $location,
        /**
         * Location address; 1-64 characters, as defined by the chat owner
         * @var string
         */
        public string $address,
    ) {
    }
}
