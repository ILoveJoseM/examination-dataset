<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:52 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionBank
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $name
 * @property string $subject_id
 * @property string $created_at
 * @property string $updated_at
 * @property Subject $subject 科目
 */
class QuestionBank extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    /**
     * 根据科目获取题库
     * @param $subjectId
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getSubjectBankOptions($subjectId)
    {
        return self::query()->where("subject_id", "=", $subjectId)->get(["id", 'name as text']);
    }
}
