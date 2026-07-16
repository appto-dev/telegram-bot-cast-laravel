<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to edit the caption of an ephemeral message. Note that it is not guaranteed that the user will
 * receive the message edit event, especially if they are offline. On success, <em>True</em> is returned.
 */
final class EditEphemeralMessageCaption extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** Identifier of the user who received the message */
        public int $receiver_user_id,
        /** Identifier of the ephemeral message to edit */
        public int $ephemeral_message_id,
        /** New caption of the message, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the message caption. See <a href="#formatting-options">formatting options</a> for
         * more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of
         * <em>parse_mode</em>
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** A JSON-serialized object for an <a href="/bots/features#inline-keyboards">inline keyboard</a> */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
