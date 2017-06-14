<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Logo;
use App\Repositories\LogoRepository;

class LogoController extends Controller
{
    /**
     * The logo repository instance.
     *
     * @var LogoRepository
     */
    protected $logos;

    /**
     * Create a new controller instance.
     *
     * @param  LogoRepository  $logos
     * @return void
     */
    public function __construct(LogoRepository $logos)
    {
        $this->middleware('auth');

        $this->logos = $logos;
    }

    /**
     * Display a list of all of the user's logo.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('logos.index', [
            'logos' => $this->logos->forUser($request->user()),
        ]);
    }

    /**
     * Create a new logo.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->logos()->create([
            'name' => $request->name,
        ]);

        return redirect('/logos');
    }

    /**
     * Destroy the given logo.
     *
     * @param  Request  $request
     * @param  Logo  $logo
     * @return Response
     */
    public function destroy(Request $request, Logo $logo)
    {
        $this->authorize('destroy', $logo);

        $logo->delete();

        return redirect('/logos');
    }
}
