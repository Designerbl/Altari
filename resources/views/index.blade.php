@extends('layouts.app')
@section('title')Altari - главная страница@endsection


@section('content')
<div class="container">
    

    <section class="preview pt-4 pt-md-5">

        <h3 class="heading pb-4 pb-md-5 d-block d-sm-none text-center"><span class="heading-inner red">Выберите</span> то, что <span class="red">Вам</span> нужно</h3>

        <div class="d-none d-sm-block pb-4 pb-md-5">
            <div class="row ">
                <div class="col col-lg-7 col-xl-6 offset-xl-2">
                    <h3 class="heading text-center text-lg-start"><span class="heading-inner red">Выберите</span> то,</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-7 col-xl-6 offset-lg-4 offset-xl-4 offset-xxl-5">
                    <h3 class="heading text-center text-lg-start">что <span class="red">Вам</span> нужно</h3>
                </div>
            </div>            
        </div>

        <div class="card carder p-5">
            <div class="card-inner">
                    <h2 class="card-title">1С:Предприятие 8 <br> через Интернет</h2>
                    <p class="card-text mb-5">
                        Ведите бухгалтерский и&nbsp;налоговый учет, контролируйте бизнес и&nbsp;управляйте&nbsp;им, сдавайте отчетность через Интернет
                        с&nbsp;помощью популярных программ &laquo;1С&raquo;
                    </p>
                                                
                    <a class="btn-reg btn-altari" href="{{ route('register') }}">Зарегистрироваться</a>
            </div>
        </div>

    </section>
    
    <section class="benefits d-block d-xl-flex justify-content-lg-between align-items-lg-center pt-4 pt-md-5">
        <p class="benefits-text text-center text-lg-start">Почему <span class="red">выбирают</span> именно <span class="red">нас</span>?</p>
        <div class="cards g-3 g-xl-2 g-xxl-4 row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 justify-content-center">

            <div class="col d-flex justify-content-center">
                <div class="card-benefits">
                    <img src="/user/img/like.png" alt="like">
                    <p class="card-benefits-text">Надежность системы</p>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card-benefits">
                    <img src="/user/img/bug.png" alt="bug">
                    <p class="card-benefits-text">Работа через интернет</p>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card-benefits">
                    <img src="/user/img/rocket.png" alt="rocket">
                    <p class="card-benefits-text">Быстрая скорость обработки</p>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card-benefits">
                    <img src="/user/img/bell.png" alt="bell">
                    <p class="card-benefits-text">Уведомление о готовности</p>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card-benefits">
                    <img src="/user/img/phone.png" alt="phone">
                    <p class="card-benefits-text">Доступность на&nbsp;мобильных устройствах</p>
                </div>
            </div>

        </div>
    </section>

    <section class="services py-4 py-md-5">

        <div class="row g-4">

            <div class="col">
                <div class="card-services">
                    <h3 class="card-services-title pb-4">Разделение базы</h3>
                    <p class="card-services-text pb-4">Возможность разделить базу по&nbsp;организациям на&nbsp;отдельные приложения.</p>
                    <ul class="card-services-inner-text">Доступно для конфигураций: 
                        <li>Бухгалтерия ПРОФ</li>
                        <li>Бухгалтерия КОРП</li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card-services">
                    <h3 class="card-services-title pb-4">Объединение базы</h3>
                    <p class="card-services-text pb-4">Возможность объединить нескольких баз со&nbsp;всеми организациями в&nbsp;единое приложение.</p>
                    <ul class="card-services-inner-text">Доступно для конфигураций: 
                        <li>Бухгалтерия ПРОФ</li>
                        <li>Бухгалтерия КОРП</li>
                    </ul>
                </div>

            </div>

            <div class="col">
                <div class="card-services">
                    <h3 class="card-services-title pb-4">Смешанное объединение </h3>
                    <p class="card-services-text pb-4">Возможность из&nbsp;нескольких приложений получить новый набор приложений с&nbsp;нужным составом организаций.</p>
                    <ul class="card-services-inner-text">Доступно для конфигураций: 
                        <li>Бухгалтерия ПРОФ</li>
                        <li>Бухгалтерия КОРП</li>
                    </ul>
                </div>

            </div>
        </div>

    </section>
    
</div>
@endsection