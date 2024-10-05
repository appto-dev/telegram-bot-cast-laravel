<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

final class ResponseObject extends Data implements TypeInterface
{
    public function __construct(
        public bool $ok,
        public bool|array|null $result,
        public ?int $error_code,
        public ?string $description,
    ) {
    }
}
