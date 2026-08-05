<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\InputMessageContentCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InlineQueryResultContact extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be contact */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** @var  string  Contact's phone number */
        public string $phone_number,
        /** @var  string  Contact's first name */
        public string $first_name,
        /** @var  string|null  Contact's last name */
        public ?string $last_name,
        /** @var  string|null  Additional data about the contact in the form of a vCard, 0-2048 bytes */
        public ?string $vcard,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** @var  InputMessageContent|null  Content of the message to be sent instead of the contact */
        #[WithCast(InputMessageContentCast::class)]
        public ?InputMessageContent $input_message_content,
        /** @var  string|null  Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** @var  int|null  Thumbnail width */
        public ?int $thumbnail_width,
        /** @var  int|null  Thumbnail height */
        public ?int $thumbnail_height,
    ) {
    }
}
