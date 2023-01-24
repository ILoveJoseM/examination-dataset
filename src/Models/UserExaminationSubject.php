<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:56 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use App\AdminUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserExaminationSubjects
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $examination_subject_id
 * @property string $score
 * @property string $status
 * @property string $answers
 * @property string $created_at
 * @property string $updated_at
 * @property string $uid
 * @property ExaminationSubject $examinationSubject
 * @property AdminUser $adminUser
 */
class UserExaminationSubject extends Model
{
    protected $fillable = [
        "id",
        "examination_subject_id",
        "score",
        "status",
        "answers",
        "created_at",
        "updated_at",
        "uid",
    ];

    public function examinationSubject()
    {
        return $this->belongsTo(ExaminationSubject::class, "examination_subject_id", "id");
    }

    public function getAnswersAttribute()
    {
        return json_decode($this->getOriginal("answers"), true);
    }

    public function adminUser()
    {
        $userModel = config('admin.database.users_model');
        return $this->belongsTo($userModel, "uid", "id");
    }

}
