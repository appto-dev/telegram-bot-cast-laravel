<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a chat being added to a community.
 */
final class CommunityChatAdded extends Data implements TelegramBotData
{
    public function __construct(
        /** The new community to which the chat belongs */
        public Community $community,
    ) {
    }
}
