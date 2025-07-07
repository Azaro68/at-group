<template>
    <div class="footerPage">
        <div class="footerContent">
            <h2>Свяжитесь с нами!</h2>
            <div id="contact" class="container">
                <div class="feedback">
                    <Consultations/>
                    <FormCommun/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Consultations from './element/Consultations.vue'
import FormCommun from './element/FormCommun.vue'
export default{
    name: 'FooterPage',
    components: {
        Consultations,
        FormCommun,
    }
}
</script>

<style scoped>
.footerPage{
    position: relative;
    width: 100vw;
    left: 49%;
    transform: translateX(-50%);
    height: 60vw;
    margin-top: 30px;
    display: flex;
    background-color: #F7F7F7;
}
.footerContent {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url(../assets/img/image_21.png) no-repeat center center;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.feedback {
    display: flex;
    justify-content: space-around;
    position: absolute;
    left: 0;
    bottom: 20px;
    width: 100%;
}

.footerContent h2 {
    font-size: 55px;
    font-weight: 400;
}

/* Добавленные медиазапросы */
@media (max-width: 1200px) {
    .footerPage {
        height: 70vw;
    }
    
    .footerContent h2 {
        font-size: 48px;
    }
}

@media (max-width: 992px) {
    .footerPage {
        height: 80vw;
    }
    
    .footerContent h2 {
        font-size: 42px;
        margin-bottom: 20px;
    }
    
    .feedback {
        position: relative;
        bottom: auto;
        margin-top: 30px;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .footerPage {
        height: auto;
        padding-bottom: 50px;
    }
    
    .footerContent {
        position: relative;
        padding: 40px 0;
    }
    
    .footerContent h2 {
        font-size: 36px;
    }
}

@media (max-width: 576px) {
    .footerContent h2 {
        font-size: 32px;
        text-align: center;
    }
    
    .feedback {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media (max-width: 400px) {
    .footerContent h2 {
        font-size: 28px;
    }
    
    .footerPage {
        margin-top: 20px;
    }
}
</style>