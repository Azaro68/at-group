<template>
    <div class="consultations">
        <h3>Получите бесплатную консультацию</h3>
        <p class="descript">Для оперативной связи свяжитесь с нами удобным для вас способом и начните сотрудничество уже сегодня.</p>
        <div class="contact-wrapper">
            <div class="contact">
                <p class="phone">+7 (812) 388-15-88</p>
                <p class="email">info@at-grupp.ru</p>
                <p class="schedule">пн. — пт. 9:00-17:00</p>
            </div>
            <img src="../../assets/img/group_7.png" alt="Контакты" class="contact-image">
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Consultations'
    }
</script>

<style scoped>
.consultations {
    width: 680px;
    background: #F6F7F9;
    padding: 25px 17px 40px;
    border-radius: 20px;
    position: relative;
    box-shadow: 0px 4px 4px 0px rgb(0 0 0 / 28%);
}

.consultations h3 {
    font-size: 30px;
    margin-bottom: 20px;
}

.descript {
    font-size: 15px;
    color: #616161;
    max-width: 480px;
    margin-bottom: 60px;
    font-weight: 500;
}

.contact-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.contact {
    flex: 1;
}

.contact p {
    color: #000000;
    font-weight: 600;
    margin-bottom: 5px;
}

.schedule {
    width: 100px;
    line-height: 1.3;
}

.contact-image {
    position: absolute;
    right: -12px;
    width: 265px;
    height: 80%;
    bottom: 0;
    margin-left: 20px;
    align-self: center;
}

@media (max-width: 1200px) {
    .consultations {
        width: 580px;
    }
    
    .consultations h3 {
        font-size: 26px;
    }
    
    .contact-image {
        width: 210px;
        height: 80%;
        right: -10px;
    }
}

@media (max-width: 992px) {
    .consultations {
        width: 100%;
        max-width: 580px;
        margin: 0 auto 30px;
    }
    
    .descript {
        margin-bottom: 40px;
    }
}

@media (max-width: 768px) {
    .consultations {
        padding: 20px;
    }
    
    .consultations h3 {
        font-size: 24px;
    }
    
    .descript {
        font-size: 14px;
    }
    
    .contact p {
        font-size: 14px;
    }
    
    .contact-image {
        width: 150px;
        height: 200px;
        right: -5px;
    }
}

@media (max-width: 576px) {
    .consultations {
        border-radius: 15px;
    }
    
    .contact-wrapper {
        flex-direction: column;
    }
    
    .contact-image {
        position: relative;
        right: auto;
        margin: 20px auto 0;
        width: 180px;
        height: auto;
    }
    
    .contact {
        margin-bottom: 15px;
    }
}

@media (max-width: 400px) {
    .consultations h3 {
        font-size: 22px;
    }
    
    .formCommun .labelForm {
        font-size: 15px;
    }
}
</style>