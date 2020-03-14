<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    static $is_initialized = false;

    public function setUp(): void
    {
        parent::setUp();
        // phpunit実行のタイミングで一度だけテスト用DBに対してマイグレーションを実行する
        if (! self::$is_initialized) {
            \Artisan::call('migrate:refresh');
            \Artisan::call('db:seed');
            self::$is_initialized = true;
        }
    }
}
