<template>
    <div id="aboutСompany" class="aboutCompany">
        <div class="description">
            <div class="container">
                <h2>О Компании</h2>
                <div class="aboutText">
                    <div class="textLeft">
                        <p class="mainDescript"><span class="name">AT-GROUP</span>— это команда высококвалифицированных <span class="specialist">ИНЖЕНЕРОВ И СПЕЦИАЛИСТОВ</span>,
                        глубоко разбирающихсяв специфике электронных компонентов. </p>
                        <p class="descript">Мы гордимся нашей репутацией ответственного и надежного партнера, построенной на принципах <span class="specialist">ПРОЗРАЧНОСТИ</span>, безусловного  <span class="specialist">КАЧЕСТВА</span> и глубокого <span class="specialist">ПОНИМАНИЯ</span> отраслевых стандартов.</p>
                    </div>
                    <div class="textRight">
                        <p class="mainDescript">Наша цель — обеспечить доступ к широчайшему ассортименту продукции: от стандартных решений до специализированных и снятых с производства позиций.</p>
                        <p class="descript">Мы понимаем уникальные потребности каждого производства. Разрабатываем индивидуальные условия сотрудничества, предлагаем гибкие графики поставок и стремимся к построению долгосрочных партнерских отношений, основанных на взаимном доверии.</p>
                    </div>
                    <div class="statistics">
                        <div class="ball">
                            <h3>10+</h3>
                            <p>лет на рынке</p>
                        </div>
                        <div style="background: #225A7D;" class="ball">
                            <h3>50+</h3>
                            <p>постоянных клиентов</p>
                        </div>
                        <div class="ball">
                            <h3>5000+</h3>
                            <p>выполненных поставок</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="helpDiv"></div>
    </div>
</template>

<script>
    export default {
        name: 'AboutCompany'
    }
</script>

<style scoped>
.aboutCompany {
    margin-top: 100px;
    position: relative;
    height: 90vw;
    width: 100%;
    overflow: hidden;
    margin-bottom: -45%;
}

.description {
    background: url('../../assets/img/AboutCompany/Vector_10.png') no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%; 
    height: 50%;
    background-position: left center;
    background-size: cover;
    z-index: 1; 
}

.helpDiv {
    background: url('../../assets/img/AboutCompany/Vector_11.png') no-repeat;
    position: absolute;
    top: 0;
    right: 0;
    width: 80%;
    height: 48%;
    background-position: right center;
    background-size: cover;
    z-index: 2; 
}

.container {
    width: 90%;
    margin: 0 auto;
}

.description h2{
    font-size: 48px;
    color: #1D3F78;
    margin-bottom: 120px;
}

.aboutText {
    display: flex;
    align-items: center;
    justify-content: space-around;
}

@media screen and (max-width: 1540) {
    .aboutText p{
        font-size: 20px;
    }
}

.textLeft, .textRight {
    max-width: 655px;
    font-size: 25px;
    line-height: 1.2;
}

.aboutText .mainDescript{
    color: #000000;
    font-weight: 700;
    margin-bottom: 30px;
}

.aboutText .mainDescript .name {
    font-size: 32px;
}

.aboutText .specialist {
    color: #1D3F78;
}

.aboutText .descript {
    color: #585858;
    font-weight: 500;
}

.statistics {
    position: absolute;
    width: 90%;
    bottom: -22%;
    /* left: 0; */
    display: flex;
    justify-content: space-around;
    opacity: 0.7;
}

.ball {
    width: 200px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background: #1D3F78;
    text-align: center;
    color: #fff;
}

.ball h3 {
    font-size: 64px;
}

.ball p{
    font-size: 16px;
    width: 120px;
}

@media (max-width: 1440px) {
    .description h2 {
        margin-bottom: 80px;
    }
    
    .textLeft, .textRight {
        font-size: 22px;
        max-width: 550px;
    }
    
    .aboutText .mainDescript .name {
        font-size: 28px;
    }
    
    .ball {
        width: 180px;
        height: 180px;
    }
    
    .ball h3 {
        font-size: 56px;
    }
}

@media (max-width: 1200px) {
    .aboutCompany {
        height: 100vw;
        margin-bottom: -50%;
    }
    
    .aboutText {
        flex-wrap: wrap;
        gap: 40px;
    }
    
    .textLeft, .textRight {
        max-width: 100%;
    }
    
    .statistics {
        position: relative;
        bottom: auto;
        margin-top: 60px;
        opacity: 1;
    }
}

@media (max-width: 992px) {
    .aboutCompany {
        margin-top: 80px;
        height: auto;
        margin-bottom: 0;
        padding-bottom: 300px;
    }
    
    .description h2 {
        font-size: 36px;
        margin-bottom: 60px;
    }
    
    .textLeft, .textRight {
        font-size: 20px;
    }
    
    .aboutText .mainDescript .name {
        font-size: 24px;
    }
    
    .ball {
        width: 150px;
        height: 150px;
    }
    
    .ball h3 {
        font-size: 48px;
    }
    
    .ball p {
        font-size: 14px;
        width: 100px;
    }
}

@media (max-width: 768px) {
    .description h2 {
        font-size: 32px;
        margin-bottom: 40px;
    }
    
    .textLeft, .textRight {
        font-size: 18px;
    }
    
    .aboutText .mainDescript {
        margin-bottom: 20px;
    }
    
    .statistics {
        flex-direction: column;
        align-items: center;
        gap: 20px;
        margin-top: 40px;
    }
    
    .ball {
        width: 180px;
        height: 180px;
    }
    
    .helpDiv {
        width: 100%;
        height: 30%;
    }
}

@media (max-width: 576px) {
    .description h2 {
        font-size: 28px;
        text-align: center;
    }
    
    .textLeft, .textRight {
        font-size: 16px;
    }
    
    .aboutText .mainDescript .name {
        font-size: 20px;
    }
    
    .ball {
        width: 140px;
        height: 140px;
    }
    
    .ball h3 {
        font-size: 40px;
    }
    
    .aboutCompany {
        padding-bottom: 250px;
    }
}

@media (max-width: 400px) {
    .description h2 {
        font-size: 24px;
    }
    
    .ball {
        width: 120px;
        height: 120px;
    }
    
    .ball h3 {
        font-size: 36px;
    }
    
    .ball p {
        font-size: 12px;
        width: 80px;
    }
}
</style>