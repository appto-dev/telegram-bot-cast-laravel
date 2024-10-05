<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * InputMessageContent
 *
 * This object represents the content of a message to be sent as a result of an
 * inline query. Telegram clients currently support the following 5 types:
 *  -
 * InputTextMessageContent
 *  - InputLocationMessageContent
 *  -
 * InputVenueMessageContent
 *  - InputContactMessageContent
 *  -
 * InputInvoiceMessageContent
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InputMessageContent extends Data implements TypeInterface
{
}
