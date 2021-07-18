<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdresseRequest;
use App\Http\Requests\UpdateAdresseRequest;
use App\Repositories\AdresseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdresseController extends AppBaseController
{
    /** @var  AdresseRepository */
    private $adresseRepository;

    public function __construct(AdresseRepository $adresseRepo)
    {
        $this->adresseRepository = $adresseRepo;
    }

    /**
     * Display a listing of the Adresse.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $adresses = $this->adresseRepository->all();

        return view('adresses.index')
            ->with('adresses', $adresses);
    }

    /**
     * Show the form for creating a new Adresse.
     *
     * @return Response
     */
    public function create()
    {
        return view('adresses.create');
    }

    /**
     * Store a newly created Adresse in storage.
     *
     * @param CreateAdresseRequest $request
     *
     * @return Response
     */
    public function store(CreateAdresseRequest $request)
    {
        $input = $request->all();

        $adresse = $this->adresseRepository->create($input);

        Flash::success('Adresse saved successfully.');

        return redirect(route('adresses.index'));
    }

    /**
     * Display the specified Adresse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adresse = $this->adresseRepository->find($id);

        if (empty($adresse)) {
            Flash::error('Adresse not found');

            return redirect(route('adresses.index'));
        }

        return view('adresses.show')->with('adresse', $adresse);
    }

    /**
     * Show the form for editing the specified Adresse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adresse = $this->adresseRepository->find($id);

        if (empty($adresse)) {
            Flash::error('Adresse not found');

            return redirect(route('adresses.index'));
        }

        return view('adresses.edit')->with('adresse', $adresse);
    }

    /**
     * Update the specified Adresse in storage.
     *
     * @param int $id
     * @param UpdateAdresseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdresseRequest $request)
    {
        $adresse = $this->adresseRepository->find($id);

        if (empty($adresse)) {
            Flash::error('Adresse not found');

            return redirect(route('adresses.index'));
        }

        $adresse = $this->adresseRepository->update($request->all(), $id);

        Flash::success('Adresse updated successfully.');

        return redirect(route('adresses.index'));
    }

    /**
     * Remove the specified Adresse from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adresse = $this->adresseRepository->find($id);

        if (empty($adresse)) {
            Flash::error('Adresse not found');

            return redirect(route('adresses.index'));
        }

        $this->adresseRepository->delete($id);

        Flash::success('Adresse deleted successfully.');

        return redirect(route('adresses.index'));
    }
}
