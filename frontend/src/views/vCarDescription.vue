<template>
    <div class="vCarDescription">
        <vHeader/>
        <div class="container px-0"> <!--Main container-->
            <div class="row no-gutters">
                <div class="col-9 pr-3"> <!--Левая часть (Основная часть)-->
                    <div class="row no-gutters"> <!--Блок краткого описания сверху-->
                        <div class="col-7">
                            <div class="row no-gutters "> <!--Название-->
                                <h2>Skoda Rapid I</h2>
                            </div>
                            <div class="row no-gutters"> <!--Дополнительная информация-->
                                <div class="row no-gutters d-inline mr-4"> <!--Дата размещения-->
                                    15 октября
                                </div>
                                <div class="row no-gutters d-inline mr-4"> <!--Количество просмотров-->
                                    <i class="fas fa-eye"></i> 99 (3 сегодня)
                                </div>
                                <div class="row no-gutters d-inline"> <!--Идентификатор объявления-->
                                    № 1101262214
                                </div>  
                            </div>
                        </div>
                        <div class="col-5 text-right"> <!--Блок цены-->
                            <div>
                                <h2>567 000 ₽</h2>
                            </div>
                            <div>
                                от 9 700 ₽ / мес
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters my-3"> <!--Карточка владельца-->
                        <div class="col-6">
                            <div class="row no-gutters">
                                <div class="col-3 text-center">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                                <div class="col-9">
                                    Тринити Моторс Эксперт Белгород
                                </div>
                            </div>
                        </div>
                        <div class="col-3 py-3 text-center">
                                <i class="fas fa-phone"></i> Обратный звонок
                        </div>
                        <div class="col-3 py-1 text-center bg-success text-white rounded-right">
                            <div>Показать телефон</div>
                            <div>+7 *** *** ** **</div>
                        </div>
                    </div>
                    <div class="row no-gutters"> <!--Тело объявления-->
                        <div class="col-4 pr-3"> <!--Левая часть тела объявления-->
                            <div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Год выпуска</div>
                                    <div class="col-7">2015</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Пробег</div>
                                    <div class="col-7">136 470 км</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Кузов</div>
                                    <div class="col-7">Лифтбек</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Цвет</div>
                                    <div class="col-7">Белый</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Двигатель</div>
                                    <div class="col-7">1.2 л / 75 л.с. / Бензин</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Налог</div>
                                    <div class="col-7">1 125 ₽ / год</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Привод</div>
                                    <div class="col-7">Передний</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Руль</div>
                                    <div class="col-7">Левый</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Состояние</div>
                                    <div class="col-7">Не требует ремонта</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Владельцы</div>
                                    <div class="col-7">1 владелец</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">ПТС</div>
                                    <div class="col-7">Оригинал</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Таможня</div>
                                    <div class="col-7">Растаможен</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Обмен</div>
                                    <div class="col-7">Рассмотрю варианты</div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 text-muted">Цвет</div>
                                    <div class="col-7">XW8**************</div>
                                </div>
                            </div>
                            <div class="bg-success text-white text-center rounded py-2 my-2">
                                Показать VIN
                            </div>
                            <hr>
                            <a href="#">Характеристики модели в каталоге</a>
                        </div> <!--/Левая часть тела объявления-->
                        <div class="col-8"> <!--Правая часть тела объявления-->
                            <vPicturesCarousel/>

                            <div> <!--Комментарий продавца-->
                                <div class="pt-5">
                                    <h3>Комментарий продавца</h3>
                                </div>
                                <div class="cut pt-2">
                                    {{comment}}
                                </div>
                            </div>
                            <div> <!--Комплектация-->

                                <h3 class="pt-3">Комплектация</h3>

                                <div> <!--Раздел комплектации-->
                                    <div class="container px-0">
                                            <div class="row no-gutters justify-content-between" v-b-toggle.collapse-1>
                                                <div class="col-6">Безопасность</div>
                                                <div class="col-6 text-right">2</div>
                                            </div>
                                            <hr>
                                            <b-collapse id="collapse-1" class="mt-3">
                                                <div class="row no-gutters">
                                                    <div class="col-6 text-muted">
                                                        Подушка безопасности водителя
                                                    </div>
                                                    <div class="col-6 text-muted">          
                                                        Антиблокировочная система (ABS)
                                                    </div>
                                                </div>
                                            </b-collapse>
                                    </div>
                                </div>
                            </div> <!--Комплектация-->
                        </div>
                    </div> <!--/Тело объявления-->
                </div>
                <div class="col-3"> <!--Правая часть (колонка для рекламы)-->
                    Тут должна быть реклама
                </div>
            </div>
        </div><!--Main container-->
        <vFooter/>
    </div>
</template>

<script>
import vHeader from "../components/vHeader"
import vFooter from "../components/vFooter"
import vPicturesCarousel from "../components/vPicturesCarousel"

export default {
    name: 'vCarDescription',
    components: {
        vHeader,
        vFooter,
        vPicturesCarousel
    },
    data() {
        return {
            comment: "Автомобиль в идеальном состоянии"
        }
    }
}
</script>