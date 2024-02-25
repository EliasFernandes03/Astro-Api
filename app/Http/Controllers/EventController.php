<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        $events = $this->eventRepository->all();
        return response()->json($events);
    }

    public function store(EventRequest $request) 
    {
        $validatedData = $request->validated();

        $event = $this->eventRepository->create($validatedData);

        return response()->json($event, 200);
    }

    public function update($id, EventRequest $request)
    {
        $validatedData = $request->validated();

        $event = $this->eventRepository->update($id, $validatedData);

        return response()->json($event, 200);
    }
}
