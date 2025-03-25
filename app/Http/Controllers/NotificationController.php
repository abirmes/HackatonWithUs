<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;

class NotificationController extends Controller
{
    
    public function index() {}

    
    public function create() {}

    
    public function store(StoreNotificationRequest $request) {}

    
    public function show(Notification $notification) {}

    
    public function edit(Notification $notification) {}

    
    public function update(UpdateNotificationRequest $request, Notification $notification) {}

   
    public function destroy(Notification $notification) {}
}
