<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'my_app');

// Project repository
set('repository', 'git@github.com:username/repository.git');

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', ['storage']);

// Writable dirs by web server
add('writable_dirs', ['storage', 'bootstrap/cache']);

// Hosts
host('example.com')
  ->set('deploy_path', '/var/www/my_app')
  ->set('branch', 'main');

// Tasks
task('build', function () {
  run('cd {{release_path}} && composer install --no-dev');
});

task('deploy', [
  'deploy:prepare',
  'deploy:release',
  'deploy:vendors',
  'deploy:build',
  'deploy:symlink',
  'deploy:cleanup',
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
