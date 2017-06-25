<?php

namespace HotChicken\Http\Controllers\Api;

use HotChicken\Api\RatingTransformer;
use HotChicken\Http\Requests\Api\RatingRequest;
use HotChicken\Models\Rating;
use HotChicken\Repositories\RatingRepository;
use Illuminate\Http\Request;
use HotChicken\Http\Controllers\Controller;
use Illuminate\Http\Response;

class RatingsController extends Controller
{
    /**
     * @var Response
     */
    private $response;

    /**
     * @var RatingRepository
     */
    private $repository;

    public function __construct(Response $response, RatingRepository $repository)
    {
        $this->response = $response;
        $this->repository = $repository;
    }

    public function index()
    {
        $chickenRatings = Rating::all();

        $ratings = fractal($chickenRatings)->transformWith(new RatingTransformer())->toArray();

        return $this->response->setContent($ratings);
    }

    public function create(RatingRequest $request)
    {
        $this->repository->save($request);

        return $this->response->setContent('201 Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
