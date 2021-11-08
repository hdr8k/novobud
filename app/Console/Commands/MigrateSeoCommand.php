<?php

namespace App\Console\Commands;

use App\Services\Pages\CreatePagesCommand;
use App\Services\Pages\PagesDto;
use Illuminate\Console\Command;

class MigrateSeoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  CreatePagesCommand  $command
     *
     * @return int
     * @throws \JsonException
     */
    public function handle(CreatePagesCommand $command): int
    {
        $pages = file_get_contents(resource_path('/migrate/page-index.json'));
        $pages = json_decode($pages, true, 512, JSON_THROW_ON_ERROR);

        foreach ($pages as $page) {
            $dto       = new PagesDto(
                $page['path'],
                $page['content'],
                $page['meta_title'],
                $page['meta_description'],
                $page['meta_keywords']
            );

            $pageModel = $command->execute($dto);
            $this->line("Create page id: {$pageModel->id}, path: {$pageModel->path}");
        }

        return 0;
    }
}
