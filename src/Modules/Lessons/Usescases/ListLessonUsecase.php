<?php


namespace LMS\Modules\Lessons\Usescases;


use App\Repositories\Contracts\LessonRepositoryInterface;
use LMS\Modules\Lessons\Usescases\Contracts\ListLessonUsecaseInterface;

class ListLessonUsecase implements ListLessonUsecaseInterface
{
    /**
     * @var LessonRepositoryInterface
     */
    private $lessonRepository;

    public function __construct(LessonRepositoryInterface $lessonRepository)
    {

        $this->lessonRepository = $lessonRepository;
    }

    public function handle()
    {
        return $this->lessonRepository->allAvailable();
    }
}
