<?php

namespace App\Helpers;
use App\Models\Answer;
use App\Models\FinalTestStudentAttempt;
use App\Models\NewTestAnswer;
use App\Models\NewTestLesson;
use App\Models\NewTestQuestion;
use App\Models\Question;

class FinalTestHelperFunctions
{
    public static function count_correct_and_incorrect_answers($attempt)
    {
        $history = json_decode($attempt->history, true);
        $corrects = 0;
        $incorrects = 0;
        $no_checkeds = 0;
        foreach ($history as $item) {
            if ($item['result'] == '1') {
                $corrects++;
            } elseif ($item['result'] == '0') {
                $incorrects++;
            } else {
                $no_checkeds++;
            }
        }
        $result['correct_answers'] = $corrects;
        $result['incorrect_answers'] = $incorrects;
        $result['no_checkeds'] = $no_checkeds;
        return $result;
    }

    public static function exam_start($final_test_access,$request)
    {
        $user = auth()->user();
        if (FinalTestStudentAttempt::where('final_access_student_id', $final_test_access->id)->exists()) {
            $final_test_attempt = FinalTestStudentAttempt::where('final_access_student_id', $final_test_access->id)->with('final_access_student:id,student_fio')->first();
            $now = date('Y-m-d H:i:s');
            if ($now > $final_test_attempt->end_time) {

            }
            $history = json_decode($final_test_attempt->history);
        } else {
            if (!$request->lang_id) {
                $result['status'] = 'lang';
                return $result;
            }
            $final_test_attempt = new FinalTestStudentAttempt();
            $final_test_attempt->created_by = $user->id;
            $final_test_attempt->updated_by = $user->id;
            $final_test_attempt->student_id = $final_test_access->student_id;
            $final_test_attempt->examination_area_id = $final_test_access->examination_area_id;
            $final_test_attempt->organization_id = $final_test_access->organization_id;
            $final_test_attempt->group_id = $final_test_access->group_id;
            $final_test_attempt->final_access_student_id = $final_test_access->id;
            $final_test_attempt->status = 0;
            $final_test_attempt->student_passport = $final_test_access->student_passport;
            $final_test_attempt->student_phone = $final_test_access->student_phone;
            $final_test_attempt->student_fio = $final_test_access->student_fio;
            $final_test_attempt->lang_id = $request->lang_id;
            $final_test_attempt->save();
//            $temp_array = Question::groupBy('temp_id')->pluck('temp_id', 'temp_id')->toArray();
//            foreach ($temp_array as $id) {
//                $q = \App\Models\Question::where('temp_id', $id)->count();
//                if ($q < 40) {
//                    unset($temp_array[$id]);
//                }
//            }
//            $random = rand(1, 10);
//            $rand_temps = array_rand($temp_array, 2);
//            $questions = Question::select(['id', 'lang_id', 'temp_id', 'body', 'category_id'])
//                ->whereIn('temp_id', $rand_temps)->where('lang_id', $request->lang_id)
////                    ->where('category_id', $student->edu_type_id)
//                ->with('answers:id,question_id,body')
//                ->pluck('id')->shuffle();
            $lessonIds = NewTestLesson::notDeleted()->pluck('id');
            $indexQ = 0;
            $questions = [];
            foreach ($lessonIds as $lessonId) {
                $questions[$indexQ] = NewTestQuestion::where('newtest_lesson_id' , $lessonId)->where('lang_id' , $request->lang_id)->inRandomOrder()->first()->id;
                $indexQ++;
            }
            $history = [];
//                return $questions;
            $jj = [];
            $i = 1;
            $j = 0;
//                return $questions;
            foreach ($questions as $question) {
                $history[$j]['question_id'] = $question;
                $history[$j]['selected_answer_id'] = '';
                $history[$j]['status'] = 0;
                $history[$j]['result'] = '';
                $history[$j]['order'] = $i;
                $answers_q = NewTestAnswer::where('newtest_question_id', $question)->pluck('id')->shuffle();
                $history[$j]['answers'] = $answers_q;
                $j++;
                $i++;
            }
            $final_test_attempt->history = json_encode($history);
            $final_test_attempt->update();
        }
        $now = date('Y-m-d H:i:s');
        $left_time = strtotime($final_test_attempt->end_time) - strtotime($now);
        if ($now < $final_test_access->start_time || $now > $final_test_access->end_time) {
            $general_status = 0;
            $description = 'Ruxsat vaqtidan oldin yoki muddat tugagan';
        }
        if ($final_test_access->status == 2) {
            $general_status = 0;
            $description = 'Ruxsat faol emas';
        }
        if ($final_test_attempt->status == 1 && $now > $final_test_attempt->start_time && $now < $final_test_attempt->end_time) {
            $general_status = 1;
            $description = 'Ruxsat';
        }
        $attempt_result = FinalTestHelperFunctions::count_correct_and_incorrect_answers($final_test_attempt);
        $result['status'] = 'ok';
        $result['data'] = array(
            'status' => 1,
            'final_test_attempt' => $final_test_attempt,
            'access_status' => $final_test_attempt->status,
            'general_status' => $general_status,
            'description' => $description,
            'history' => $history,
            'lang_status' => 1,
            'lang_id' => $final_test_attempt->lang_id,
            'left_time' => $left_time,
            'attempt_result' => $attempt_result,
        );
        $final_test_access->test_submission_date = date('Y-m-d');
        $final_test_access->update();
        return $result;
    }
}
