<?php

class CommentsController extends BaseController 
{
    /***********************************
     * YORUMU VERİTABANINA KAYDEDER
     ***********************************/
    public function newComment()
    {
            // POST İLE GÖNDERİLEN DEĞERLERİ ALALIM.
            $postData = Input::all();

            // FORM KONTROLLERİNİ BELİRLEYELİM
            $rules = array(
            'question_id' => 'required|integer',
            'comment' => 'required'
            );

            // HATA MESAJLARINI OLUŞTURALIM
            $messages = array(
            'question_id.required' => 'İşleminiz yapılırken teknik bir sorun oluştu',
            'question_id.integer' => 'İşleminiz yapılırken teknik bir sorun oluştu',
            'comment.required' => 'Lütfen yanıtınızı yazın'
            );

            // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
            $validator = Validator::make($postData, $rules, $messages);

            // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
            if ($validator->fails()) {

                // KULLANICIYI SORU SAYFASINA GERİ GÖNDERELİM
                return Redirect::to(URL::previous())->withErrors($validator->messages());

            } else {

                // SORUYU VERİTABANINA EKLEYELİM
                $comment = new Comments();
                $comment->user_id = Auth::user()->id;
                $comment->question_id = $postData['question_id'];
                $comment->comment = e(trim($postData['comment']));
                $comment->created_at = date('Y-m-d H:i:s');
                $comment->created_ip = Request::getClientIp();
                $comment->save();

                // KULLANICIYI YENİDEN SORUYA YÖNLENDİRELİM
                return Redirect::to(URL::previous());

            }
    }
}