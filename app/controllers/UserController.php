<?php

class UserController extends BaseController 
{

	/******************************
         * ÜYELİK FORMUNU  GÖSTERİR
         ******************************/
	public function signUpForm()
	{
		return View::make('user.signUp');
	}
    
        /**************************************
         * OTURUM AÇMA FORMUNU  GÖSTERİR
         **************************************/
	public function signInForm()
	{
		return View::make('user.signIn');
	}
    
        /**********************************
         * ÜYELİK KAYDINI GERÇEKLEŞTİRİR
         **********************************/
	public function signUp()
	{
		// POST İLE GÖNDERİLEN DEĞERLERİ ALALIM.
                $postData = Input::all();
                
                // FORM KONTROLLERİNİ BELİRLEYELİM
                $rules = array(
                'username' => 'required|min:3|alpha_dash|not_in:İ,Ş|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4|confirmed',
                'password_confirmation' => 'required'
                );
                
                // HATA MESAJLARINI OLUŞTURALIM
                $messages = array(
                'username.required' => 'Lütfen kullanıcı adınızı yazın',
                'username.min' => 'Kullanıcını adınız en az 3 karakterden oluşmalıdır',
                'username.unique' => 'Bu kullanıcı adı zaten kullanılıyor. Lütfen başka bir kullanıcı adı yazın',
                'username.alpha_dash' => 'Lütfen özel karakter ve boşluk içermeyen kullanıcı adı yazın',
                'email.required' => 'Lütfen mail adresinizi yazın',
                'email.email' => 'Lütfen geçerli bir mail adresi yazın',
                'email.unique' => 'Bu mail adresi zaten kullanılıyor. Lütfen başka bir mail adresi yazın',
                'password.required' => 'Lütfen şifrenizi yazın',
                'password.min' => 'Şifreniz minumum 4 karakterden oluşmalıdır',
                'password.confirmed' => 'Girdiğiniz şifreler birbiriyle eşleşmiyor',
                'password_confirmation.required' => 'Lütfen şifrenizi doğrulayın'
                );
                
                // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
                $validator = Validator::make($postData, $rules, $messages);

                // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
                if ($validator->fails()) {
                    
                    // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
                    return Redirect::route('signUp')
                            ->withInput()
                            ->withErrors($validator->messages());
                    
                } else {
                    
                    // ÜYEYİ KAYIT EDELİM
                    $user = User::create(array(
                    'username' => $postData['username'],
                    'email' => $postData['email'],
                    'password' => Hash::make($postData['password']),
                    'created_ip' => Request::getClientIp()
                    ));
                    
                    // OTURUMU OLUŞTURALIM
                    Auth::login($user);
                    
                    // SORULAR SAYFASINA YÖNLENDİRELİM
                    return Redirect::route('allQuestions');
                    
                }
	}
    
        /****************************
         * ÜYENİN OTURUMUNU AÇAR
         ****************************/
	public function signIn()
        {
                // POST İLE GÖNDERİLEN DEĞERLERİ ALALIM.
                $postData = Input::all();

                // FORM KONTROLLERİNİ BELİRLEYELİM
                $rules = array(
                'email' => 'required|email',
                'password' => 'required'
                );

                // HATA MESAJLARINI OLUŞTURALIM
                $messages = array(
                'email.required' => 'Lütfen mail adresinizi yazın',
                'email.email' => 'Lütfen geçerli bir mail adresi yazın',
                'password.required' => 'Lütfen şifrenizi yazın'
                );

                // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
                $validator = Validator::make($postData, $rules, $messages);

                // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
                if ($validator->fails()) {

                    // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
                    return Redirect::route('signInForm')
                            ->withInput()
                            ->withErrors($validator->messages());

                } else {
                    
                    // BÖYLE BİR ÜYE OLUP OLMADIĞINI KONTROL EDELİM
                    if (Auth::attempt(array('email' => $postData['email'], 'password' => $postData['password']))) {
                        
                        // OTURUM AÇILDIĞINA GÖRE KULLANICIYI YÖNLENDİRELİM
                        return Redirect::route('allQuestions');
                        
                    } else {
                        
                        // GİRİLEN BİLGİLER HATALI MESAJINI VERELİM
                        return Redirect::route('signInForm')
                            ->withInput()
                            ->withErrors(array('Girdiğiniz mail adresi veya şifre hatalı!'));
                        
                    }
                    
                }
        }
    
        /*******************************
         * ÜYENİN ÇIKIŞ İŞLEMİNİ YAPAR
         *******************************/
	public function logout()
        {
            // OTURUMU SONLANDIRALIM
            Auth::logout();
            
            // KULLANICIYI SORULAR SAYFASINA YÖNLENDİRELİM
            return Redirect::route('allQuestions');
        }
    
}