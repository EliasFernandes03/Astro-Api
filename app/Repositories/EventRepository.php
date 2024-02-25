<?php

namespace App\Repositories;

use App\Models\Event;

class EventRepository
{
    public function all()
    {
        return Event::all();
    }

    public function findById($id)
    {
        return Event::findOrFail($id);
    }

    public function create(array $data)
    {
        return Event::create($data);
    }

    public function update($id, array $data)
    {
        $event = $this->findById($id);
        $event->update($data);
        return $event;
    }

    public function delete($id)
    {
        $event = $this->findById($id);
        $event->delete();
    }
}
