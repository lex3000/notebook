@include('includes.header')

<div class="slider">
    <div>
        <div class="slider-img"><img src="{{ URL::to('./images/slider-1.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="slider-captions">
                    <h1 class="slider-title">Проблемы с комьютером?</h1>
                    <p class="slider-text">Ремонт ноутбуков, планшетов, мобильных телефонов, смартфонов и прочей техники.</p>
                    <a href="#" class="btn btn-default">View Service</a> </div>
            </div>
        </div>
    </div>
    <div>
        <div class="slider-img"><img src="{{ URL::to('./images/slider-2.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="slider-captions">
                    <h1 class="slider-title">Быстрый ремонт</h1>
                    <p class="slider-text">Оперативно и качественно мы поможем Вам решить любые проблемы, связанные с работой компьютерной техники, мобильных устройств, планшетов, смартфонов и т.д.</p>
                    <a href="#" class="btn btn-default">Найти нас</a> </div>
            </div>
        </div>
    </div>
    <div>
        <div class="slider-img"><img src="{{ URL::to('./images/slider-3.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="slider-captions">
                    <h1 class="slider-title">Диагностика компьютера</h1>
                    <p class="slider-text"> обратитесь к нам и мы поставим точный диагноз и вернём к жизни вашего "железного друга"...</p>
                    <a href="#" class="btn btn-default">Meet The Team</a> </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space section-color">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 section-title"><!-- section title -->
                <h1>Ремонт и обслуживание компьютеров</h1>
                <p>От рабочего состояния компьютера сегодня зависит очень многое. Если Ваш верный помощник неожиданно вышел из строя, это может повлечь за собой самые неприятные последствия. Порой бывает сложно устранить самостоятельно вредоносный вирус или наладить подключение к сети интернет. Иногда на это просто нет времени! Именно в такой ситуации стоит обратиться в Атом!

                    Мы предлагаем весь спектр услуг компьютерной помощи, наиболее востребованных на сегодняшний день. Все сотрудники нашей компании являются специалистами в своей области и любят свою работу.</p>
            </div>
            <!-- /.section title -->
        </div>
        <div class="row">
            <div class="col-md-4 service-image-block"> <!-- service-block -->
                <div class="service-image-inner">
                    <div class="service-img"><a href="#"><img src="{{ URL::to('images/service-pc-mac.jpg') }}" alt="" class="img-responsive"></a></div>
                    <h2>Ремонт компьютеров</h2>
                    <a href="service-listing-image.html" class="btn-link">Узнать больше</a> </div>
            </div>
            <!-- /.service-block -->
            <div class="col-md-4 service-image-block"> <!-- service-block -->
                <div class="service-image-inner">
                    <div class="service-img"><a href="#"><img src="{{ URL::to('images/service-laptop.jpg') }}" alt="" class="img-responsive"></a></div>
                    <h2>Ремонт ноутбуков</h2>
                    <a href="service-listing-image.html" class="btn-link">Узнать больше</a> </div>
            </div>
            <!-- /.service-block -->
            <div class="col-md-4 service-image-block"> <!-- service-block -->
                <div class="service-image-inner">
                    <div class="service-img"><a href="#"><img src="{{ URL::to('images/service-phone.jpg') }}" alt="" class="img-responsive"></a></div>
                    <h2>Ремонт телефонов</h2>
                    <a href="service-listing-image.html" class="btn-link">Узнать больше</a> </div>
            </div>
            <!-- /.service-block -->

        </div>
        <div class="space-top-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-5">
                        <h2 class="mb0">Узнайте весь спектор услуг</h2>
                        <p>Мы здесь, чтобы починить ваши устройства в кратчайший срок</p>
                    </div>
                    <div class="col-md-3"><a href="service-listing-icon.html" class="btn btn-default">весь спектор услуг</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Услуги компьютерного сервиса</h1>
                <p class="lead">Ваш компьютер или ноутбук перестал работать? Не беда! Компьютерные услуги в Москве и Подмосковье от специалистов компании «Атом» — это лучший выход из положения!</p>
                <p>Большим плюсом нашей компании является то, что мы специализируемся на выезде к заказчикам. В удобное для вас время к вам по месту вызова прибудет наш специалист, который быстро определит проблему и выполнит ее решение. Дополнительно стоит отметить, что на все наши услуги действует довольно длительная гарантия.</p>
                <p>Мы заботимся о своих клиентах и о собственном добром имени, поэтому все работы выполняем максимально качественно!</p>
            </div>
            <div class="col-md-offset-1 col-md-5"> <img src="{{ URL::to('images/about-image.png') }}" alt="iPhone Repair Store" class="img-responsive"> </div>
        </div>
        <div class="row space-top-80">
            <div class="col-md-4 feature">
                <div class="feature-inner feature-bg">
                    <h2>Что мы делаем?</h2>
                    <p>Мы обслуживаем все самые новые и популярные мобильные телефоны, планшеты и компьютеры.<br><br></p>
                </div>
            </div>
            <div class="col-md-4 feature">
                <div class="feature-inner feature-bg">
                    <h2>Кто мы?</h2>
                    <p>Мы команда специалистов, обладающих большим проктическим опытом в области обслуживания и ремонта техники.</p>
                </div>
            </div>
            <div class="col-md-4 feature">
                <div class="feature-inner feature-bg">
                    <h2>Как мы это делаем?</h2>
                    <p>Мы постоянно следим за появлением инновационных методик и используем только передовые разработки.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 section-title">
                <h1>Что говорят о нас клиенты</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-v2"><!-- testimonial -->
                    <div>
                        <div class="col-md-offset-2 col-md-8">
                            <div class="testimonial-v2-caption">
                                <p>"Большое спасибо ребятам за оперативность и качество ремонта. Менял в сервисном центре батарейку и дисплей на iPhone 6 все отлично работает теперь только к вам!!!!"</p>
                            </div>
                            <div class="testimonial-v2-author">
                                <div class="testimonial-v2-img"><img src="{{ URL::to('images/testimonial-pic.jpg') }}" alt=""></div>
                                <h3 class="testimonial-v2-name">Денис Мазус</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-offset-2 col-md-8">
                            <div class="testimonial-v2-caption">
                                <p>"Недавно уронила телефон, экран вдребезги. Живу недалеко от этого сервиса, частенько прохожу мимо, а теперь был повод зайти. Ну что сказать, ребята сделали всё быстро, качественно, а главное совсем недорого! Надеюсь, конечно, что больше не будет у меня таких поломок, но если вдруг будут, теперь знаю к кому обращаться :) Спасибо!"</p>
                            </div>
                            <div class="testimonial-v2-author">
                                <div class="testimonial-v2-img"><img src="{{ URL::to('images/testimonial-pic.jpg') }}" alt=""></div>
                                <h3 class="testimonial-v2-name">Евгения Маркас</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-offset-2 col-md-8">
                            <div class="testimonial-v2-caption">
                                <p>"Ребята молодцы! Берутся, наверное, за все и делают качественно и не дорого! В моем случае был сложный ремонт дорогого ноутбука. Сделали в короткие сроки и качественно, хотя большинство сервисов не бралось даже за ремонт. Спасибо!)"</p>
                            </div>
                            <div class="testimonial-v2-author">
                                <div class="testimonial-v2-img"><img src="{{ URL::to('images/testimonial-pic.jpg') }}" alt=""></div>
                                <h3 class="testimonial-v2-name">Алексей Пригорский</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-space section-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title">
                <h1>Мы работаем с любимы брендами</h1>
                <p>Мы <strong class="text-highlight"># 1 ремонт устройств</strong> в стране </p>
            </div>
        </div>
        <div class="row client-logo">
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-1.png') }}" alt=""></a></div>
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-2.png') }}" alt=""></a></div>
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-3.png') }}" alt=""></a></div>
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-4.png') }}" alt=""></a></div>
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-5.png') }}" alt=""></a></div>
            <div class="col-md-2"><a href="#"><img src="{{ URL::to('images/logo-2.png') }}" alt=""></a></div>
        </div>
    </div>
</div>
<div class="section-default-bg section-space-40">
    <div class="container">
        <div class="row">
            <div class="call-to-action-default"><!--call-to-action-default -->
                <div class="col-md-8">
                    <h1 class="mb0 call-to-action-title">Вы хотите починить ваш комьютер?</h1>
                    <p class="call-action-desc">Оперативно и качественно мы поможем Вам решить любые проблемы</p>
                </div>
                <div class="col-md-3 call-to-action-btn"><a href="appointment.html" class="btn btn-default btn-block">Свяжитесь с нами</a></div>
            </div>
            <!-- /.call-to-action-default -->
        </div>
    </div>
</div>
@include('includes.footer')