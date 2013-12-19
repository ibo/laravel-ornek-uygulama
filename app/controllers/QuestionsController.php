<?php

class QuestionsController extends BaseController 
{

	/************************
         * TÜM SORULARI LİSTELER
         ************************/
	public function index()
	{
                // SORULARI TABLODAN ÇEKELİM
                $questions = Question::with('user')->orderBy('id','DESC')->paginate(5);
                
                // SORULARI VIEW'E AKTARALIM VE VIEW'İ ÇALIŞTIRALIM
		return View::make('questions/index', compact('questions'));
	}

        /****************************************
         * SEÇİLEN SORUNUN DETAYINI GÖSTERİR
         ****************************************/
	public function detail($id)
	{
                // SORUYU TABLODAN ÇEKELİM
                $question = Question::with('user')->where('id', '=', $id)->orderBy('id','DESC')->first();
                
                // EĞER SORU BULUNAMADIYSA YÖNLENDİRELİM
                if (!$question) {
                    return Redirect::route('homePage');
                }
                
                // SAĞ BÖLÜM İÇİN RASTGELE SORULAR ÇEKELİM
                $randomQuestions = Question::take(3)->orderBy(DB::raw('RAND()'))->get();
                
                // GÖNDERİLEN YANITLARI ÇEKELİM
                $comments = Comment::with('user')->where('question_id', '=', $id)->get();
                
                // VIEW'İ ÇALIŞTIRALIM
		return View::make('questions.detail', compact('question', 'randomQuestions', 'comments'));
	}
    
        /***************************************
         * SORU GÖNDERİM FORMUNU GÖSTERİR
         ***************************************/
	public function newQuestionForm()
	{
                return View::make('questions.newQuestion');
	}
    
        /***********************************
         * SORUYU VERİTABANINA KAYDEDER
         ***********************************/
	public function newQuestion()
	{
                // POST İLE GÖNDERİLEN DEĞERLERİ ALALIM.
                $postData = Input::all();
                
                // FORM KONTROLLERİNİ BELİRLEYELİM
                $rules = array(
                'title' => 'required|between:3,256',
                'content' => 'required'
                );
                
                // HATA MESAJLARINI OLUŞTURALIM
                $messages = array(
                'title.required' => 'Lütfen sorunuzun başlığını yazın',
                'title.between' => 'Soru başlığı minumum 3 maksimum 256 karakterden oluşabilir',
                'content.required' => 'Lütfen sorunuza ait detayları yazın'
                );
                
                // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
                $validator = Validator::make($postData, $rules, $messages);

                // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
                if ($validator->fails()) {
                    
                    // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
                    return Redirect::route('newQuestionForm')
                            ->withInput()
                            ->withErrors($validator->messages());
                    
                } else {
                    
                    // SORUYU VERİTABANINA EKLEYELİM
                    $question = new Question();
                    $question->user_id = Auth::user()->id;
                    $question->title = e(trim($postData['title']));
                    $question->content = e(trim($postData['content']));
                    $question->created_at = date('Y-m-d H:i:s');
                    $question->created_ip = Request::getClientIp();
                    $question->save();
                    
                    // KULLANICIYI SORULARIN LİSTELENDİĞİ SAYFAYA YÖNLENDİRELİM
                    return Redirect::route('allQuestions');
                    
                }
	}
}
