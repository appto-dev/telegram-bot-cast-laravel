<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about the connection of the bot with a
 * business account. Returns a <a href="#businessconnection">BusinessConnection</a>
 * object on success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetBusinessConnection extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
    ) {
    }
}
