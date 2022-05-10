<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('domain', 'jetstream-boilerplate.test');
set('repository', 'git@github.com:PaoloCentomani/Jetstream-Boilerplate.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('123.123.123.123')
    ->set('branch', 'main')
    ->set('deploy_path', '/var/www/{{domain}}')
    ->set('remote_user', 'paolo');

// Tasks

after('deploy:failed', 'deploy:unlock');

task('deploy:assets', function () {
    runLocally('npm run prod');
    upload('public/css', '{{release_path}}/public');
    upload('public/img', '{{release_path}}/public');
    upload('public/js', '{{release_path}}/public');
    upload('public/mix-manifest.json', '{{release_path}}/public');
});
after('deploy:vendors', 'deploy:assets');
