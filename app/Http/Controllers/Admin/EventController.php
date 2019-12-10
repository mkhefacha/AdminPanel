<?php

namespace App\Http\Controllers\Admin;
use App\ContactCompany;
use App\Http\Requests\EventFormeRequest;
use App\Http\Requests\MasseDestroyEventRequest;
use App\ListeCompany;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class EventController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event = Event::all();
        return view('admin.event.index',compact('event'));//
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $companies = ContactCompany::all();
        $listes=ListeCompany::all();
        return view('admin.event.create', compact('companies','listes'));
    }

    public function store(EventFormeRequest $request)
    {
           $request->persist();
           return redirect()->route('admin.event.index');
    }


    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->authorize('view', $event);
        return view('admin.event.show', compact('event'));
    }


    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->authorize('update', $event);
        $companies = ContactCompany::all();
        $listes=ListeCompany::all();

        return view('admin.event.edit',compact('companies','listes','event'));
    }


    public function update(EventFormeRequest $request, Event $event)
    {
         $event->update($request->all());

         return redirect()->route('admin.event.index');
    }


    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return redirect()->route('admin.event.index');
    }


    public function massDestroy(MasseDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
