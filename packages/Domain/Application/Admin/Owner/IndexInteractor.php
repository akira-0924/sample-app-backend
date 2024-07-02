<?php

namespace Packages\Domain\Application\Admin\Owner;

use Packages\Usecase\Admin\Owner\Index\InteractorInterface;
use Packages\Usecase\Admin\Owner\Index\Input;
use Packages\Usecase\Admin\Owner\Index\Output;
use Packages\Domain\Domain\Admin\Owner\RepositoryInterface;

class IndexInteractor implements InteractorInterface
{

    private $AdminOwnerRepository;

    public function __construct(RepositoryInterface $adminOwnerRepository)
    {
        $this->adminOwnerRepository = $adminOwnerRepository;
    }

    public function __invoke(Input $input): Output
    {
        $result = $this->adminOwnerRepository->index($input->limit, $input->page);
        // dd(Output::fromArray($result));
        return Output::fromArray($result);
    }
}

