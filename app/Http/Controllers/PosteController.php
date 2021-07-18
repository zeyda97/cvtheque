<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePosteRequest;
use App\Http\Requests\UpdatePosteRequest;
use App\Repositories\PosteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PosteController extends AppBaseController
{
    /** @var  PosteRepository */
    private $posteRepository;

    public function __construct(PosteRepository $posteRepo)
    {
        $this->posteRepository = $posteRepo;
    }

    /**
     * Display a listing of the Poste.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $postes = $this->posteRepository->all();

        return view('postes.index')
            ->with('postes', $postes);
    }

    /**
     * Show the form for creating a new Poste.
     *
     * @return Response
     */
    public function create()
    {
        return view('postes.create');
    }

    /**
     * Store a newly created Poste in storage.
     *
     * @param CreatePosteRequest $request
     *
     * @return Response
     */
    public function store(CreatePosteRequest $request)
    {
        $input = $request->all();

        $poste = $this->posteRepository->create($input);

        Flash::success('Poste saved successfully.');

        return redirect(route('postes.index'));
    }

    /**
     * Display the specified Poste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error('Poste not found');

            return redirect(route('postes.index'));
        }

        return view('postes.show')->with('poste', $poste);
    }

    /**
     * Show the form for editing the specified Poste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error('Poste not found');

            return redirect(route('postes.index'));
        }

        return view('postes.edit')->with('poste', $poste);
    }

    /**
     * Update the specified Poste in storage.
     *
     * @param int $id
     * @param UpdatePosteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePosteRequest $request)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error('Poste not found');

            return redirect(route('postes.index'));
        }

        $poste = $this->posteRepository->update($request->all(), $id);

        Flash::success('Poste updated successfully.');

        return redirect(route('postes.index'));
    }

    /**
     * Remove the specified Poste from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error('Poste not found');

            return redirect(route('postes.index'));
        }

        $this->posteRepository->delete($id);

        Flash::success('Poste deleted successfully.');

        return redirect(route('postes.index'));
    }
}
