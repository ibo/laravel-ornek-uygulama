<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Laravel Örneği</title>

        <!-- < BOOTSTRAP > -->
        {{ HTML::style('assets/bootstrap/css/bootstrap.css'); }}
        {{ HTML::style('assets/bootstrap/js/bootstrap.js'); }}
        <!-- </ BOOTSTRAP >  -->
        
        <!-- < CSS > -->
        {{ HTML::style('assets/css/default.css'); }}
        <!-- </ CSS >  -->
        
    </head>
    
    <body>
        
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{ HTML::link(URL::route('homePage'), 'Örnek Laravel Projesi', array('class' => 'navbar-brand')) }}
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>{{ HTML::link(URL::route('allQuestions'), 'Soruları Listele') }}</li>
              <li>{{ HTML::link(URL::route('newQuestionForm'), 'Soru Sor') }}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li class="active">{{ HTML::link(URL::route('logout'), 'Çıkış (' . Auth::user()->username . ')') }}</li>
                @else 
                <li>{{ HTML::link(URL::route('signInForm'), 'Giriş Yap') }}</li>
                <li>{{ HTML::link(URL::route('signUpForm'), 'Üye Ol') }}</li>
                @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
        
        <div class="container">
            @yield('content')
        </div>
        
        <hr>
            
        <footer class='container'>
            <p class='text-center'>  
                Sorularınızı {{ HTML::link('http://www.facebook.com/groups/laravelturkiye', 'Laravel Türkiye ', array('target' => '_blank')) }} Facebook Grubuna gönderebilirsiniz.
                Projeye {{ HTML::link('http://www.github.com/', 'GitHub ', array('target' => '_blank')) }} üzerinden katkıda bulunabilirsiniz. 
            </p>
        </footer>
        
    </body>
</html>