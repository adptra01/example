<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantRequest;
use App\Models\Follow;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function store(ParticipantRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['work_file'] = $request->file('work_file')->store('documents', 'public');

        $participant = Participant::create($validatedData);

        foreach ($request->file('follows') as $file) {
            $follow = new Follow();
            $follow->image = $file->store('follows');
            $follow->participant_id = $participant->id;
            $follow->save();
        }

        return back();
    }
}
