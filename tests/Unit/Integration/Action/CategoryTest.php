<?php

use App\Models\User;

test('example', function () {
    User::factory()->create();

    expect(User::count())->toBe(1);
});
