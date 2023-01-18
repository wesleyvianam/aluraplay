<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;

class VideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $videoList = $this->videoRepository->all();
        // print_r($videoList);die;
        require_once __DIR__ . '/../../views/video-list.php';
    }
}
