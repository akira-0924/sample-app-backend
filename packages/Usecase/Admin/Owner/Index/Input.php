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
        $page = isset($array['page']) ? $array['page'] : 1;
        $limit = isset($array['limit']) ? $array['limit'] : 10;
        return new Input($page, $limit);
    }
}

