<?php

namespace App\Livewire;

use Livewire\Component;
use App\Events\Message;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
use App\Models\Chat;

class SendMessage extends Component
{
    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $content;
    public $List;
    public function mount(){
        $this->getChat();
    }
    public function send()
    {
        $this->validate();
        Chat::create(['username'=> $this->username, 'content' => $this->content]);
        $this->reset('content');
        $this->getChat();
        broadcast(new Message($this->username, $this->content))->toOthers();
    }
    public function getChat(){
        $this->List = Chat::orderBy('created_at','asc')->get();
    }
    // #[On('echo:public,chat')]
    #[On('echo:public,.chat')]
    public function getMessage($event)
    {
        $this->getChat();
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
