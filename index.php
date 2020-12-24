<?php include 'sendemail.php'; ?>

<!DOCTYPE html> 
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Open+Sans:wght@700&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DAB Academy</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>

  <!-- Sprite -->
  <svg style="display: none;">

    <symbol id="facebook" viewBox="0 0 430.113 430.114">
      <g>
          <path d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
              c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
              c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
      </g>
    </symbol>

    <symbol id="twitter" viewBox="0 -47 512.00004 512">
      <g>
          <path d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
      </g>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 512 512">
      <g>
          <path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/>
      </g>
    </symbol>

  </svg>
  
  <header class="header" id="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">
          <img src="img/Group 1.svg" alt="">
          <span class="logo">Academy</span>
        </div>
        <nav class="nav" id="nav">
          <a href="#" class="nav__link" data-scroll="#features">Главная</a>
          <a href="#" class="nav__link" data-scroll="#works">Наши работы</a>
          <a href="#" class="nav__link" data-scroll="#team">Наша команда</a>
          <a href="#" class="nav__link" data-scroll="#reviews">отзывы</a>
        </nav>

        <button class="burger" type="button" id="navToggle">
          <span class="burger__item">Menu</span>
        </button>

      </div>
    </div>
  </header>

  <div class="intro" id="intro">
    <div class="container">
      <div class="intro__inner">
        <h1 class="intro__title">Создание сайтов под ключ</h1>
        <h2 class="intro__subtitle">Главное направление нашей деятельности - разработка сайтов в Казахстане.</h2>
        <a class="open-button" onclick="openForm()">Заказать сайт</a>
      </div>
    </div>
  </div>

  <div class="container" id="features">
    <div class="features">
      <div class="features__item">
        <img src="img/features/feature-1.png" alt="" class="features__icon">
        <h4 class="features__title">По договору</h4>
        <div class="features__text">Предоставим все документы для бухгалтерии: договоры, счета и акты. Работаем как ИП без НДС.</div>
      </div>

      <div class="features__item">
        <img src="img/features/feature-2.png" alt="" class="features__icon">
        <h4 class="features__title">Точно в срок</h4>
        <div class="features__text">В договоре прописана наша  ответственность за срок проекта. Если просрочим — платим неустойку. 
        </div>
      </div>

      <div class="features__item">
        <img src="img/features/feature-3.png" alt="" class="features__icon">
        <h4 class="features__title">Промежуточные итоги</h4>
        <div class="features__text">Показываем работу поэтапно, а не в последий момент перед крайним сроком.</div>
      </div>

      <div class="features__item">
        <img src="img/features/feature-4.png" alt="" class="features__icon">
        <h4 class="features__title">Ценник под вас</h4>
        <div class="features__text">Если у вас нетиповой проект, сделаем рассчет цены за работу и объясним, как складывается цена.</div>
      </div>

      <div class="features__item">
        <img src="img/features/feature-5.png" alt="" class="features__icon">
        <h4 class="features__title">Не бросим после сдачи</h4>
        <div class="features__text">Научим вас или вашего сотрудника пользоваться сайтом, запишем видео-инструкции.</div>
      </div>

      <div class="features__item">
        <img src="img/features/feature-6.png" alt="" class="features__icon">
        <h4 class="features__title">Хостинг и домен </h4>
        <div class="features__text">Если мы договорились о цене проекта, в неё входит всё: домен и хостинг на год </div>
      </div>
    </div> <!-- /.features -->
  </div><!-- /.container -->

  <!-- Works -->
  <div class="works" id="works">
    <div class="works__item">
      <img src="img/works/work-1.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-2.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-3.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-4.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-5.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-6.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-7.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

    <div class="works__item">
      <img src="img/works/work-8.jpg" alt="" class="works__icon">
      <div class="works__content">
        <div class="works__title">Project name</div>
        <div class="works__text">User Interface Design</div>
      </div>
    </div>

  </div><!-- /.works -->
  
  <!-- Team -->
  <div class="team" id="team">
    <div class="container">
      <div class="team__inner">

        <div class="team__item">
          <img class="team__photo" src="img/team/dos.png" alt="">
          <div class="team__name">Маханбет Досжан</div>
          <div class="team__prof">Frontend-разработчик</div>
          <div class="social">
            <a href="#" class="social__item" target="_blank">
              <svg class="social__icon">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#twitter"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#linkedin"></use>
              </svg>
            </a> 
          </div>
        </div>

        <div class="team__item">
          <img class="team__photo" src="img/team/bair.jpg" alt="">
          <div class="team__name">Оразов Байрам</div>
          <div class="team__prof">Backend-разработчик</div>
          <div class="social">
            <a href="#" class="social__item" target="_blank">
              <svg class="social__icon">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#twitter"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#linkedin"></use>
              </svg>
            </a> 
          </div>
        </div>

        <div class="team__item">
          <img class="team__photo" src="img/team/abat.png" alt="">
          <div class="team__name">Сагинтаев Абат</div>
          <div class="team__prof">Дизайнер</div>
          <div class="social">
            <a href="#" class="social__item" target="_blank">
              <svg class="social__icon">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#twitter"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#linkedin"></use>
              </svg>
            </a> 
          </div>
        </div>

        

      </div><!-- team__inner -->
    </div><!-- container -->
  </div><!-- team -->

  <!-- reviews -->
  <div class="reviews" id="reviews">
    <div class="container">
      
      <div class="reviews__slider" id="reviewsSlider">

        <div class="slick-item">
          <div class="reviews__item">
            <div class="reviews__photo">
              <img class="reviews__img" src="img/reviews/review-1.jpg" alt="">
            </div>
            <div class="reviews__content">
              <div class="reviews__text">Здравствуйте! Я занимаюсь развитием собственного бизнеса с компанией EDELSTAR и являюсь руководителем СПО EDELSTAR в Новгородской области. Уже очень давно я думала о развитии своего бизнеса в Интернете. Заказать свой сайт я решила на www.activebox.kz, меня устроили сроки выполнения работы и стоимость.</div>
              <div class="reviews__author">Наталья Осьмова</div>
            </div>
          </div>
        </div>
        
        <div class="slick-item">
          <div class="reviews__item">
            <div class="reviews__photo">
              <img class="reviews__img" src="img/reviews/review-1.jpg" alt="">
            </div>
            <div class="reviews__content">
              <div class="reviews__text">Уважаемый ActiveBox! Большое Вам спасибо за изготовление сайта школы. Мне очень понравились как дизайн, так и логика сайта. Я очень рада, что обратилась именно в вашу организацию.</div>
              <div class="reviews__author">Аксельрод Галина Ханьевна</div>
            </div>
          </div>
        </div>

      </div>

    </div><!-- container -->
  </div><!-- reviews -->

  <!-- Download -->
  
  <div class="download" id="download">
    <div class="container">
      <h3 class="download__title">Хотите заказать сайт? Оставьте свой номер, мы вам перезвоним!</h3>
      <a class="open-button" onclick="openForm()">Оставить номер</a>
      <?php echo $alert; ?>
        <div class="form-popup">
        <form class="form-container" action="" method="post">
          <label for="name"><b>Имя</b></label>
          <input type="text" name="name" class="text-box" placeholder="Ваше Имя" required>
          <label for="email"><b>Номер</b></label>
          <input type="text" name="number" class="text-box" placeholder="Ваш Номер" required>
          <input type="submit" name="submit" class="btn" value="Отправить">
          <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      
      <div class="footer__inner">

        <div class="footer__block">
          <h4 class="footer__title">Адрес</h4>
          <address class="footer__address">
            
            <div>Казахстан,Алматы</div>
          </address>
        </div>

        <div class="footer__block">
          <h4 class="footer__title">Поделиться</h4>
          <div class="social social--footer">
            <a href="#" class="social__item" target="_blank">
              <svg class="social__icon">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#twitter"></use>
              </svg>
            </a>
            <a href="#" class="social__item">
              <svg class="social__icon">
                <use xlink:href="#linkedin"></use>
              </svg>
            </a> 
          </div>
        </div>

        <div class="footer__block">
          <h4 class="footer__title">О DAB Academy</h4>
          <div class="footer__text">
            <p>Создаем сайты под ключ.</p>
          </div>
        </div>

      </div><!-- Footer__inner -->

    </div><!-- container -->

    <div class="copyright">
      <div class="container">
        <div class="copyright__text">
          <div>Copyright 2020 DAB Academy. All Rights Reserved</div>
          <div>Made <span>by Abat and Doszhan</span></div>
        </div>
      </div>
    </div>

  </footer><!-- Footer -->
  
      




  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="app.js"></script>
  <script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function($) {
  $('.open-button').click(function() {
    $('.form-popup').fadeIn();
    return false;
  }); 
  
  $('.cancel').click(function() {
    $(this).parents('.form-popup').fadeOut();
    return false;
  });   
 
  $(document).keydown(function(e) {
    if (e.keyCode === 27) {
      e.stopPropagation();
      $('.form-popup').fadeOut();
    }
  });
  
  $('.form-popup').click(function(e) {
    if ($(e.target).closest('.form-container').length == 0) {
      $(this).fadeOut();          
    }
  });
});
    </script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>