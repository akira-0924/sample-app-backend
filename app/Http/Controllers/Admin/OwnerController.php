<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\Admin\Owner\IndexRequest;
use App\Http\Resources\Admin\Owner\IndexCollectionResource;
use Packages\Usecase\Admin\Owner\Index\InteractorInterface as IndexCollectionInteractor;

use App\Models\Owner;
use Packages\Infrastructure\Admin\Owner\OwnerRepository;
use Packages\Domain\Application\Admin\Owner\IndexInteractor;
use Inertia\Inertia;
use Inertia\Response;
use Packages\UseCase\Exception as UseCaseException;




class OwnerController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin', 'verified']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(IndexCollectionInteractor $interactor, IndexRequest $request): JsonResource | JsonResponse
    // public function index(IndexCollectionInteractor $interactor, IndexRequest $request): Response
    {
        // $user = $this->getAuthenticatedUser();
        $input = $request->toUseCaseInput();
        try{
            $output = $interactor($input);
            // dd($output);
        } catch (UseCaseException $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code' => $e->getCode()], [
                'Content-Type' => 'application/json'
            ]);
        }
        // return Inertia::render('Dashboard');
        // dd(new IndexResource($output));
        // dd($output);
        // dd(new IndexCollectionResource($output));
        $resource = new IndexCollectionResource($output);
        // dd($resource);
        return new IndexCollectionResource($output);
        // dd($resource);
        // dd($resource);
        return Inertia::render('Admin/Owner/Index', [
        'data' => $resource->resolve(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
