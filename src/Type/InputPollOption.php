<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\InputPollOptionMediaCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputPollOption extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Option text, 1-100 characters */
        public string $text,
        /**
         * @var  string|null  Mode for parsing entities in the text. See formatting options for more details.
         * Currently, only custom emoji entities are allowed.
         */
        public ?string $text_parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the poll
         * option text. It can be specified instead of text_parse_mode.
         */
        public ?array $text_entities,
        /** @var  InputPollOptionMedia|null  Media added to the poll option */
        #[WithCast(InputPollOptionMediaCast::class)]
        public ?InputPollOptionMedia $media,
    ) {
    }
}
