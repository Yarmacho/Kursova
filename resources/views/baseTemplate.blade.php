<!DOCTYPE html>

<html lang="ru">
<head>
    <title>PizzaBoom</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">

    <script type=text/javascript>
        function setScreenWidthCookie() {
            document.cookie = 'sw = '+ screen.width;
            return true;
        }
    </script>
</head>
<div class="wrapper">
    <div class="container header">
        <div class="logo_title">
            <div class="logo">

            </div>
            <div class="title">
                <h2>PIZZAboom</h2>
            </div>
        </div>

        <div class="nav">
            <ul>
                <li>
                    @if($page === 'main')
                        <strong>Головна</strong>
                    @else
                        <a href="main">Головна</a>
                    @endif
                </li>
                <li>
                    @if($page === 'menu')
                        <strong>Меню</strong>
                    @else
                        <a href="menu">Меню</a>
                    @endif
                </li>
                <li>
                    @if($page === 'ctor')
                        <strong>Конструктор піци</strong>
                    @else
                        <a href="constructor">Конструктор піци</a>
                    @endif
                </li>
                <li>
                    @if($page === 'about')
                        <strong>Про нас</strong>
                    @else
                        <a href="about_us">Про нас</a>
                    @endif
                </li>
                <li>
                    @if($page === 'delivery')
                        <strong>Доставка та оплата</strong>
                    @else
                        <a href="delivery">Доставка та оплата</a>
                    @endif
                </li>
                <li>
                    <img src="../resources/img/phone.svg" alt="phone">
                </li>
                <li>
                    @if($page === 'cart')
                        <img src="../resources/img/cart.svg" alt="cart">
                    @else
                        <a href="cart"><img src="../resources/img/cart.svg" alt="cart"></a>
                    @endif
                </li>
            </ul>
        </div>
    </div>

    @yield('content')

    <div class="container footer">
        <div class="footer_columns">
            <div class="first_footer_column">
                <div class="footer_title">
                    <div class="logo"></div>

                    <h4>Смачна піца у нас!</h4>
                </div>
                <div class="credit_cards">
                    <img src="../resources/img/masterCard.svg" alt="">
                    <img src="../resources/img/creaditBack.svg" alt="">
                </div>
            </div>

            <div class="second_footer_column">
                <ul>
                    <div class="footer_nav_first_col">
                        <li>Головна</li>
                        <li>Меню</li>
                        <li>Конструктор піци</li>
                    </div>
                    <div class="footer_nav_second_col">
                        <li>Про нас</li>
                        <li>Доставка та оплата</li>
                    </div>
                    <div class="footer_nav_third_col">
                        <li>Київ</li>
                    </div>
                </ul>
            </div>

            <div class="third_footer_column">
                <img src="../resources/img/telegram.svg" alt="telegram">
                <img src="../resources/img/inst.svg" alt="instagram">
                <img src="../resources/img/facebook.svg" alt="facebook">
            </div>
        </div>

        <div class="copyright">
            <h5>УСІ ПРАВА ЗАХИЩЕНІ<img src="../resources/img/copyright.svg" alt="">2021</h5>
        </div>
    </div>
</div>
</html>
