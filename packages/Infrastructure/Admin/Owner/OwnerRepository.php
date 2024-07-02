<?php

namespace Packages\Infrastructure\Admin\Owner;

use Packages\Domain\Domain\Admin\Owner\RepositoryInterface;
use App\Models\Owner;

class OwnerRepository implements RepositoryInterface
{
    public function index(?int $limit = null, ?int $page = null): array
    {
        // $owners2 = Owner::all();
        $owners = Owner::select('id', 'name', 'email', 'created_at')->get();
        // dd($owners);
        foreach ($owners as $owner) {
            $ownerArray[] = [
                'id' => $owner->id,
                'name' => $owner->name,
                'email' => $owner->email,
                'created_at' => $owner->created_at->diffForHumans(),
            ];
        }
        // dd($owners2);
        // dd($ownerArray);
        $returnArray = [
            'owners' => $owners,
            // 'page' => $page,
            // 'limit' => $limit,
        ];
        // dd($returnArray);
        return $returnArray;
    }
}

