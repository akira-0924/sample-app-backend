<?php

namespace Packages\UseCase\Admin\Owner\Index;

class Input
{
    public function __construct
    (
        public int $page,
        public int $limit
    )
    {
    }
    /**
     * @return Input
     */
    public static function fromArray(array $array): Input
    {
        return new Input($page, $limit);
    }
}

