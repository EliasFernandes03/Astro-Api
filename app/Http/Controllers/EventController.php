<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        try{
            $events = $this->eventRepository->all();
            return response()->json($events);
        } catch(\Exception $error) {
            return response()->json(['error' => 'Internal Server Error '], 500);
        }
      
    }

    public function store(EventRequest $request) 
    {
        try{
                    
        $validatedData = $request->validated();

        $event = $this->eventRepository->create($validatedData);

        return response()->json($event, 200);
        
        } catch(\Exception $error){
            return response()->json(['error' => 'Internal Server Error '], 500);
        }
    }

    public function update($id, EventRequest $request)
    {

        try {
            $validatedData = $request->validated();

            $event = $this->eventRepository->update($id, $validatedData);

            return response()->json($event, 200);
            
        } catch (ModelNotFoundException $error) {

            return response()->json(['error' => 'Event not found'], 404);

        } 
    }

    public function delete(Request $request, $id)
    {
        try {
            $this->eventRepository->delete($id);
    
            return response()->json(['message' => 'Event deleted successfully'], 200);
            
        } catch (ModelNotFoundException $error) {

            return response()->json(['error' => 'Event not found'], 404);

        } 
    }
}
