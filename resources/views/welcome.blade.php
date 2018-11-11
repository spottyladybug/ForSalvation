@extends('layouts.app')

@section('content')
<div class="welcome container">
    <section id="registration" class="row">
        <div class="col-12">
            <h1>Запись на сдачу крови</h1>
            <p>Убедитесь, что на вас не действуют временные ограничения. Врач имеет право отказать вам в сдаче.</p>
        </div>
    </section>
    <form class="row" action="">
        <div class="col-12 city">
            <label>Ваш город</label>
            <div class="city-input">
                <input type="text"><button type="button">Изменить</button>
            </div>
        </div>
        <div class="col-12 bloods">
            <h3>Готов сдавать:</h3>
            <ul class="blood-elements row col-12">
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-blood"></i>
                        Цельная кровь                        
                    </div>
                </li>
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-plazma"></i>
                        Плазма
                    </div>
                </li>
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-platelets"></i>
                        Тромбоциты
                    </div>
                </li>
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-erythrocyte"></i>
                        Эритроциты
                    </div>
                </li>
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-granulocytes"></i>
                        Гранулоциты
                    </div>
                </li>
                <li class="col-lg-2 col-md-4 col-6">
                    <div>
                        <i class="svg-leukocyte"></i>
                        Лейкоциты
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-12 hospital-choose">
            <h3>Выберите пункт</h3>
            <div>
                <input type="text" placeholder="Поиск по названию"><button>Поиск</button>
            </div>
        </div>
        <div class="col-12 map">
            <ya-map></ya-map>
        </div>
        <div class="col-12 calendar">
            <h3>Запись на сдачу крови в ГКУЗ "Центр крови Ленинградской области", филиал №1</h3>
        </div>
    </form>
</div>
@endsection
