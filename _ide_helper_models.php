<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $class_id
 * @property int $teacher_id
 * @property string $date
 * @property string $status
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendance whereUpdatedAt($value)
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $level
 * @property int $capacity
 * @property string $academic_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Classe whereUpdatedAt($value)
 */
	class Classe extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property numeric $amount
 * @property string $academic_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FeeType whereUpdatedAt($value)
 */
	class FeeType extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $subject_id
 * @property int $class_id
 * @property numeric $score
 * @property numeric $max_score
 * @property string $type
 * @property int $period 1=T1 2=T2 3=T3
 * @property string $academic_year
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereMaxScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Grade whereUpdatedAt($value)
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParentUser query()
 */
	class ParentUser extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $fee_type_id
 * @property int $created_by
 * @property numeric $amount_paid
 * @property string $receipt_number
 * @property string $status
 * @property string|null $paid_at
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereFeeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaidAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereReceiptNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereUpdatedAt($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $student_id
 * @property int $class_id
 * @property int $period 1=T1 2=T2 3=T3
 * @property string $academic_year
 * @property numeric $average
 * @property int|null $rank
 * @property string|null $appreciation
 * @property string|null $pdf_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereAppreciation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereAverage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard wherePdfPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCard whereUpdatedAt($value)
 */
	class ReportCard extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $class_id
 * @property int $subject_id
 * @property int $teacher_id
 * @property int $day_of_week 0=Lun 1=Mar 2=Mer 3=Jeu 4=Ven
 * @property string $start_time
 * @property string $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereDayOfWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Schedule whereUpdatedAt($value)
 */
	class Schedule extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $class_id
 * @property string $matricule
 * @property string $birth_date
 * @property string $gender
 * @property string|null $photo_path
 * @property string|null $guardian_name
 * @property string|null $guardian_phone
 * @property string $academic_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereGuardianName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereGuardianPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student wherePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Student whereUserId($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property numeric $coefficient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SubjectTeacher query()
 */
	class SubjectTeacher extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string|null $specialty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSpecialty($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUserId($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $phone
 * @property string $role
 * @property int $is_active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

