<?php namespace Modules\Course\Repositories;

use App\BaseRepository;
use Modules\Course\Entities\Comment;

class CommentRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Comment::class;
    }


}