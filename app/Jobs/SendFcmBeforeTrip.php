<?php

namespace App\Jobs;

use App\DTOs\FcmDTO;
use App\Models\Trip;
use App\Models\User;
use App\Helpers\FcmHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendFcmBeforeTrip implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Trip $Trip , public int $user_id)
    {
        //
    }
private function getTitle(): string{
return $this->Trip->Starting_place . ' '.$this->Trip->Destination_place.' Trip date ';
}
private function getBody(): string{
return 'Your next Trip is an hour from now ';
}
    /**
     * Execute the job.
     */
    public function handle(): void
    {
       $user=User::find($this->user_id);
       $dtos=[];
       foreach($user->fcmTokens()->pluck('token') as $token){
        $dtos []=new FcmDTO(
            token:$token,
            title:$this->getTitle(),
            body:$this->getBody(),
        );
    }
    FcmHelper::send(...$dtos);
}
}
