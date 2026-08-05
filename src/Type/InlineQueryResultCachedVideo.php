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
class InlineQueryResultCachedVideo extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be video */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** @var  string  A valid file identifier for the video file */
        public string $video_file_id,
        /** @var  string  Title for the result */
        public string $title,
        /** @var  string|null  Short description of the result */
        public ?string $description,
        /** @var  string|null  Caption of the video to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the video caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         */
        public ?array $caption_entities,
        /** @var  bool|null  Pass True if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** @var  InputMessageContent|null  Content of the message to be sent instead of the video */
        #[WithCast(InputMessageContentCast::class)]
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
