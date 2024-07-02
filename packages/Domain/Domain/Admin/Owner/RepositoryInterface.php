<?php

namespace Packages\Domain\Domain\Admin\Owner;

interface RepositoryInterface
{
    public function index(?int $limit = null, ?int $page = null): array;
}

