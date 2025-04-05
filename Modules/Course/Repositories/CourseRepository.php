<?php namespace Modules\Course\Repositories;

use App\BaseRepository;
use Modules\Course\Entities\Course;

class CourseRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }


}