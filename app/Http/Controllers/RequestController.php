<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewRequestStore;
use App\Mail\NewRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function __invoke(NewRequestStore $request): \Illuminate\Http\RedirectResponse
    {
        $request->merge([
            'subject' => $request->get('subject_request')
        ]);

        \App\Models\Request::query()->create($request->only('name', 'email', 'message', 'subject'));

        Mail::to('pabloasd3@gmail.com')
            ->send(new NewRequestMail(
                $request->get('name'),
                $request->get('email'),
                $request->get('message'),
                $request->get('subject_request')
            ));

        session()->flash('flash.banner', 'Solicitud enviada correctamente!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }
}
