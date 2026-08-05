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
class InlineQueryResultCachedSticker extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be sticker */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** @var  string  A valid file identifier of the sticker */
        public string $sticker_file_id,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** @var  InputMessageContent|null  Content of the message to be sent instead of the sticker */
        #[WithCast(InputMessageContentCast::class)]
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
