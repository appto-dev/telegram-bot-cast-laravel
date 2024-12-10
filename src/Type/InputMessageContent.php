<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents the content of a message to be sent as a result of an
 * inline query. Telegram clients currently support the following 5 types:
 *  - <a href="#inputtextmessagecontent">InputTextMessageContent</a>
 *  - <a href="#inputlocationmessagecontent">InputLocationMessageContent</a>
 *  - <a href="#inputvenuemessagecontent">InputVenueMessageContent</a>
 *  - <a href="#inputcontactmessagecontent">InputContactMessageContent</a>
 *  - <a href="#inputinvoicemessagecontent">InputInvoiceMessageContent</a>
 */
final class InputMessageContent extends Data implements TelegramTypeInterface
{
}
