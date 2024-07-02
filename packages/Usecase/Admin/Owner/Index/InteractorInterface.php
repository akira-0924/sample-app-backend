<?php

namespace Packages\Usecase\Admin\Owner\Index;

interface InteractorInterface
{
     /**
     * @param Input $input
     * @return Output
     */
    public function __invoke(Input $input): Output;
}

