<?php

use Native\Laravel\Facades\Native;

Native::window()
    ->title('Task Manager')
    ->url('https://task-manager.ddev.site') // 👈 Update this if your DDEV domain is different
    ->width(1200)
    ->height(800)
    ->resizable()
    ->open();
