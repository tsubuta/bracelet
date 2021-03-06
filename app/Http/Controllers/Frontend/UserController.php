<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Repositories\Frontend\UserRepository;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    protected $userRepository;

    protected $nbrPerPage = 4;
    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
    }
    public function index()
    {
        //$users = $this->userRepository->getPaginate($this->nbrPerPage);
        //$links = str_replace('/?', '?', $users->render());
        $user=Auth::user();

        return view('frontend.user.profiles.view', compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->userRepository->destroy($id);

        return redirect()->back();
    }
}
