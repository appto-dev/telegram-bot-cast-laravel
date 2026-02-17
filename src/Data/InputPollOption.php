<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about one answer option in a poll to be sent.
 */
final class InputPollOption extends Data implements TelegramBotData
{
    public function __construct(
        /** Option text, 1-100 characters */
        public string $text,
        /**
         * Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji
         * entities are allowed
         */
        public ?string $text_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of
         * text_parse_mode
         */
        public ?MessageEntity $text_entities,
    ) {
    }
}
