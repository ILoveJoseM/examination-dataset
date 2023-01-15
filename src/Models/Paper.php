<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:55 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paper
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $examination_subject_id
 * @property string $created_at
 * @property string $updated_at
 * @property Collection|PaperQuestion[] $question
 */
class Paper extends Model
{

    protected $fillable = [
        "id",
        "examination_subject_id",
        "created_at",
        "updated_at",
    ];

    public function question()
    {
        return $this->hasMany(PaperQuestion::class, "paper_id", "id");
    }
}
