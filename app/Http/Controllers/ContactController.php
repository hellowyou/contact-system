<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\EditRequest;
use App\Http\Requests\Contact\StoreRequest;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    protected $onlyFields = ['name', 'company', 'phone', 'email'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var Contact */
        $query = Contact::mine();

        if (request()->has('search')) {
            // $keyword = request()->get('search');
            // TODO: Search here
        }

        return view('contacts.index', [
            'contacts' => $query->latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->only($this->onlyFields);

        $data['user_id'] = auth()->id();

        Contact::create($data);

        return $this->redirectToList();
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        if ($contact->user_id !== auth()->id()) {
            abort(403);
        }

        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Contact $contact)
    {
        $data = $request->only($this->onlyFields);

        $contact->update($data);

        return $this->redirectToList();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return $this->redirectToList();
    }

    protected function redirectToList()
    {
        return redirect()->route('contacts.index');
    }
}
