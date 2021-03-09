<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.music', function ($trail) {
    $trail->push('Music', route('admin.music'));
});

Breadcrumbs::for('admin.music.create', function ($trail) {
    $trail->push('Music Create', route('admin.music.create'));
});


Breadcrumbs::for('admin.license.create', function ($trail) {
    $trail->push('License Create', route('admin.license.create'));
});

Breadcrumbs::for('admin.license', function ($trail) {
    $trail->push('License Create', route('admin.license'));
});

Breadcrumbs::for('admin.genres', function ($trail) {
    $trail->push('Genres', route('admin.genres'));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
