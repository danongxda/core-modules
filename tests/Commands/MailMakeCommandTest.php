<?php

namespace Omt\Modules\Tests\Commands;

use Omt\Modules\Contracts\RepositoryInterface;
use Omt\Modules\Tests\BaseTestCase;
use Spatie\Snapshots\MatchesSnapshots;

class MailMakeCommandTest extends BaseTestCase
{
    use MatchesSnapshots;
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $finder;
    /**
     * @var string
     */
    private $modulePath;

    public function setUp(): void
    {
        parent::setUp();
        $this->modulePath = base_path('modules/Blog');
        $this->finder = $this->app['files'];
        $this->artisan('module:make', ['name' => ['Blog']]);
    }

    public function tearDown(): void
    {
        $this->app[RepositoryInterface::class]->delete('Blog');
        parent::tearDown();
    }

    /** @test */
    public function it_generates_the_mail_class()
    {
        $this->artisan('module:make-mail', ['name' => 'SomeMail', 'module' => 'Blog']);

        $this->assertTrue(is_file($this->modulePath . '/Emails/SomeMail.php'));
    }

    /** @test */
    public function it_generated_correct_file_with_content()
    {
        $this->artisan('module:make-mail', ['name' => 'SomeMail', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/Emails/SomeMail.php');

        $this->assertMatchesSnapshot($file);
    }

    /** @test */
    public function it_can_change_the_default_namespace()
    {
        $this->app['config']->set('modules.paths.generator.emails.path', 'SuperEmails');

        $this->artisan('module:make-mail', ['name' => 'SomeMail', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/SuperEmails/SomeMail.php');

        $this->assertMatchesSnapshot($file);
    }

    /** @test */
    public function it_can_change_the_default_namespace_specific()
    {
        $this->app['config']->set('modules.paths.generator.emails.namespace', 'SuperEmails');

        $this->artisan('module:make-mail', ['name' => 'SomeMail', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/Emails/SomeMail.php');

        $this->assertMatchesSnapshot($file);
    }
}
