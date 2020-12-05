<template>
    <div class="vProfile">
        <vHeader/>
        <div class="container pt-5">
            <div class="row no-gutters d-flex justify-content-center">
                <div class="col-8">
                    <div class="row no-gutters">
                        <div class="col-5 p-3">
                            <img class="d-flex w-100" :src="require('../assets/img/imgProfile/people.jpg')" alt="">
                        </div>
                        <div class="col-7 p-3">
                            <form>
                                <div class="form-group">
                                    <label for="inputEmail1">Электронная почта</label>
                                    <input type="email" class="form-control" id="inputEmail1" value="alex@mail.ru">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Мои телефоны</label>
                                    <div class="row no-gutters">
                                        <div class="col-11">
                                            <input class="form-control" id="inputPhone" value="+7 111 111 1111">
                                        </div>
                                        <div class="col-1 d-flex align-items-center justify-content-center">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <h3>Личные данные</h3>  
                                <div class="form-group">
                                    <label for="inputNickName">Ник</label>
                                    <input type="text" class="form-control" id="inputNickName" value="alex">
                                </div>
                                <div class="form-group">
                                    <label for="inputNickName">Имя</label>
                                    <input type="text" class="form-control" id="inputNickName" value="Алексей">
                                </div>
                                <div class="form-group">
                                    <label for="inputCity">Город</label>
                                    <input type="text" class="form-control" id="inputCity" value="Белгород">
                                </div>
                                <div class="form-group">
                                    <label for="inputCity">Город</label>
                                    <input type="text" class="form-control" id="inputCity" value="Белгород">
                                </div>
                                <div class="form-group">
                                    <label for="inputCity">День рождения</label>
                                    <input type="text" class="form-control" id="inputCity" value="08.01.1960">
                                </div>
                                <div class="form-group">
                                    <label for="inputAbout">О себе</label>
                                    <textarea id="inputAbout" class="form-control" rows="4" ></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary d-flex w-100 justify-content-center">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <vFooter/>
    </div>

</template>

<script>
import vHeader from "../components/vHeader"
import vFooter from "../components/vFooter"


export default {
    name: 'vProfile',
    components: {
        vHeader,
        vFooter
    }
}
</script>