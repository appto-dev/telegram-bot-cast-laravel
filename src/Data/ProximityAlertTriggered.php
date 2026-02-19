<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set
 * by another user.
 */
final class ProximityAlertTriggered extends Data implements TelegramBotData
{
    public function __construct(
        /** User that triggered the alert */
        public User $traveler,
        /** User that set the alert */
        public User $watcher,
        /** The distance between the users */
        public int $distance,
    ) {
    }
}
