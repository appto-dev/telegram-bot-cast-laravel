<?php

namespace Appto\TelegramBot\Support\Resolvers;

use Appto\TelegramBot\Data\InaccessibleMessage;
use Appto\TelegramBot\Data\Message;

class MaybeInaccessibleMessageResolver extends GenericResolver
{
    public function __construct()
    {
        parent::__construct([]);
    }

    public function resolve(array $payload): mixed
    {
        return $payload['date'] === 0
            ? InaccessibleMessage::from($payload)
            : Message::from($payload);
    }
}
