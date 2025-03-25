<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreMessageRequest $request) {}

    
    public function show(Message $message) {}

    
    public function edit(Message $message) {}

    
    public function update(UpdateMessageRequest $request, Message $message) {}

    
    public function destroy(Message $message) {}
}
