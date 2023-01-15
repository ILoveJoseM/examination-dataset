<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:54 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class ExaminationSubject
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $type
 * @property string $examination_id
 * @property string $subject_id
 * @property string $created_at
 * @property string $updated_at
 * @property Paper $paper
 * @property Examination $examination
 * @property Subject $subject
 */
class ExaminationSubject extends Model
{
    protected $fillable = [
        "id",
        "type",
        "examination_id",
        "subject_id",
        "created_at",
        "updated_at",
    ];

    public function paper()
    {
        return $this->hasOne(Paper::class, "examination_subject_id", "id");
    }

    public function examination()
    {
        return $this->belongsTo(Examination::class, "examination_id", "id");
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, "subject_id", "id");
    }
}
