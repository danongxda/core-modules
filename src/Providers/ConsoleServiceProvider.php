<?php

namespace Omt\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Omt\Modules\Commands\CommandMakeCommand;
use Omt\Modules\Commands\ControllerMakeCommand;
use Omt\Modules\Commands\DisableCommand;
use Omt\Modules\Commands\DumpCommand;
use Omt\Modules\Commands\EnableCommand;
use Omt\Modules\Commands\EventMakeCommand;
use Omt\Modules\Commands\FactoryMakeCommand;
use Omt\Modules\Commands\InstallCommand;
use Omt\Modules\Commands\JobMakeCommand;
use Omt\Modules\Commands\LaravelModulesV6Migrator;
use Omt\Modules\Commands\ListCommand;
use Omt\Modules\Commands\ListenerMakeCommand;
use Omt\Modules\Commands\MailMakeCommand;
use Omt\Modules\Commands\MiddlewareMakeCommand;
use Omt\Modules\Commands\MigrateCommand;
use Omt\Modules\Commands\MigrateRefreshCommand;
use Omt\Modules\Commands\MigrateResetCommand;
use Omt\Modules\Commands\MigrateRollbackCommand;
use Omt\Modules\Commands\MigrateStatusCommand;
use Omt\Modules\Commands\MigrationMakeCommand;
use Omt\Modules\Commands\ModelMakeCommand;
use Omt\Modules\Commands\ModuleDeleteCommand;
use Omt\Modules\Commands\ModuleMakeCommand;
use Omt\Modules\Commands\NotificationMakeCommand;
use Omt\Modules\Commands\PolicyMakeCommand;
use Omt\Modules\Commands\ProviderMakeCommand;
use Omt\Modules\Commands\PublishCommand;
use Omt\Modules\Commands\PublishConfigurationCommand;
use Omt\Modules\Commands\PublishMigrationCommand;
use Omt\Modules\Commands\PublishTranslationCommand;
use Omt\Modules\Commands\RequestMakeCommand;
use Omt\Modules\Commands\ResourceMakeCommand;
use Omt\Modules\Commands\RouteProviderMakeCommand;
use Omt\Modules\Commands\RuleMakeCommand;
use Omt\Modules\Commands\SeedCommand;
use Omt\Modules\Commands\SeedMakeCommand;
use Omt\Modules\Commands\SetupCommand;
use Omt\Modules\Commands\TestMakeCommand;
use Omt\Modules\Commands\UnUseCommand;
use Omt\Modules\Commands\UpdateCommand;
use Omt\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleDeleteCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
        LaravelModulesV6Migrator::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
