<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('providers.index', [
            'providers' => Provider::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.edit', [
            'new' => true,
            'provider' => Provider::make(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Provider::create($request->only([
            'trading_name',
            'company_name',
            'abn',
            'street_address',
            'city',
            'state',
            'post_code',
            'primary_contact_name',
            'primary_contact_phone_number',
            'primary_contact_email',
            'secondary_contact_name',
            'secondary_contact_phone_number',
            'secondary_contact_email',
        ]));
        return redirect('/providers');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view('providers.edit', [
            'new' => false,
            'provider' => $provider,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $provider->update($request->only([
            'trading_name',
            'company_name',
            'abn',
            'street_address',
            'city',
            'state',
            'post_code',
            'primary_contact_name',
            'primary_contact_phone_number',
            'primary_contact_email',
            'secondary_contact_name',
            'secondary_contact_phone_number',
            'secondary_contact_email',
        ]));
        return redirect('/providers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->back();
    }
}
