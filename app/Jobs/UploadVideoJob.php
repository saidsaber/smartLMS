<?php

namespace App\Jobs;

use App\Models\Lecture;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UploadVideoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;
    public $lectureId;

    public function __construct($video, $lectureId)
    {
        $this->video = $video;
        $this->lectureId = $lectureId;
    }

    public function handle()
    {
        $newPath = str_replace('temp/', 'lectures/', $this->video);

        Storage::move($this->video, $newPath);

        $lecture = Lecture::findOrFail($this->lectureId);
        $lecture->videos()->create(['path' => $newPath , 'legth' => '1m']);
    }
}
