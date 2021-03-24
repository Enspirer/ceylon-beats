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

Breadcrumbs::for('admin.music.edit', function ($trail) {
    $trail->push('Music Update', route('admin.music.edit',1));
});


Breadcrumbs::for('admin.license.create', function ($trail) {
    $trail->push('License Create', route('admin.license.create'));
});

Breadcrumbs::for('admin.license', function ($trail) {
    $trail->push('License Create', route('admin.license'));
});

Breadcrumbs::for('admin.license.edit', function ($trail) {
    $trail->push('License Update', route('admin.license.edit',1));
});

Breadcrumbs::for('admin.genres', function ($trail) {
    $trail->push('Genres', route('admin.genres'));
});


Breadcrumbs::for('admin.genres.create', function ($trail) {
    $trail->push('Genres Create', route('admin.genres.create'));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
