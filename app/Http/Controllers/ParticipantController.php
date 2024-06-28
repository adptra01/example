<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantRequest;
use App\Models\Follow;
use App\Models\Participant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ParticipantController extends Controller
{
    public function store(ParticipantRequest $request)
    {
        $validatedData = $request->validated();

        $fileName = $request->file('work_file')->getClientOriginalName();
        $fileName = str_replace(' ', '_', $fileName);
        $validatedData['work_file'] = $request->file('work_file')->storeAs('documents', $fileName, 'public');

        $participant = Participant::create($validatedData);

        if ($request->hasFile('follows')) {
            foreach ($request->file('follows') as $file) {
                $follow = new Follow();
                $followFileName = $file->getClientOriginalName();
                $followFileName = str_replace(' ', '_', $followFileName);
                $follow->image = $file->storeAs('follows', $followFileName, 'public');
                $follow->participant_id = $participant->id;
                $follow->save();
            }
        }
        Alert::success('Completed', 'Formulir telah berhasil disubmit.')->showConfirmButton('CONFIRM', '#E17126');

        return back();
    }
}
