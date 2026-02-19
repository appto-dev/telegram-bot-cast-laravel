<?php

namespace Appto\TelegramBot\Support\Resolvers;

use InvalidArgumentException;

class GenericResolver
{
    public function __construct(
        protected array $map,
        protected string $discriminatorField = 'type',
    ) {
    }

    public function resolve(array $payload): mixed
    {
        $type = $payload[$this->discriminatorField] ?? null;

        if (! $type || ! isset($this->map[$type])) {
            throw new InvalidArgumentException(
                "Unsupported discriminator value: {$type}"
            );
        }

        $class = $this->map[$type];

        return $class::from($payload);
    }

    public function resolveCollection(array $items): array
    {
        return array_map(
            fn (array $item) => $this->resolve($item),
            $items
        );
    }
}
