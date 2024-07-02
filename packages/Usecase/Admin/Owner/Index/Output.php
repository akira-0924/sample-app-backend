<?php

namespace Packages\Usecase\Admin\Owner\Index;

class Output
{
    public function __construct(
        public array $owners,
        // public int $page,
        // public int $limit
    )
    {
        //
    }

     /**
     * @return Output
     */
    public static function fromArray(array $array): Output
    {
        // dd($array['owners']);
        return new Output(
            $array['owners']->toArray()
        );
    }
}

