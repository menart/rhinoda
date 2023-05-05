<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UploadFilmInfoCommand extends Command
{

    protected function configure(): void
    {
        $this->setName('films:info:update')
            ->setDescription('Обновление информации о фильмах');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "ok" . PHP_EOL;
        return self::SUCCESS;
    }
}