@extends('layout')

@section('content')
    <form action="/providers{{ !$new ? "/$provider->id" : '' }}" method="POST">
        @csrf
        @if(!$new)
            @method('put')
        @endif
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                @foreach ([
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
                ] as $field)
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium text-gray-700"> {{ str_replace('_', ' ', $field) }} </label>
                        <input type="text" name="{{$field}}" id="{{$field}}" value="{{$provider->$field}}" class="mt-1 mb-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                @endforeach

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
    </form>
    @endsection
