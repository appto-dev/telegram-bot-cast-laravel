<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\BusinessConnection;
use Spatie\LaravelData\Data;

/**
 * GetBusinessConnection
 *
 * Use this method to get information about the connection of the bot with a
 * business account. Returns a BusinessConnection object on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetBusinessConnection extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = BusinessConnection::class;

    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
    ) {
    }
}