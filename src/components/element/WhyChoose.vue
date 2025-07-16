<template>
    <div class="choose">
        <div class="container whyChoose">
            <div class="content">
            <h2>Почему выбирают AT-GROUP</h2>
            <p class="descript">Мы знаем: надёжные компоненты - ключ к бесперебойной работе и стабильному росту.</p>
            <div class="reasons">
                <div class="card">
                    <img src="../../assets/img/WhyChoose/image 23.png" alt="">
                    <p>Отлаженные логистические цепочки, широкие складские запасы.</p>
                </div>
                <div class="card">
                    <img src="../../assets/img/WhyChoose/image 24.png" alt="">
                    <p>Гарантия качества и оригинальности поставляемой продукции</p>
                </div>
                <div class="card">
                    <img src="../../assets/img/WhyChoose/image 25.png" alt="">
                    <p>Ориентированность на долгосрочное партнёрство</p>
                </div>
            </div>
        </div>
        <div class="imgPage">
            <img src="../../assets/img/WhyChoose/Remove-bg.png" alt="">
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'WhyChoose'
    }
</script>

<style scoped>
.choose {
    background: linear-gradient(
        to bottom, 
        rgb(255 255 255) 10%,
        rgba(47, 89, 149, 0.78) 76%
    )
}

.whyChoose {
    display: flex;
    justify-content: space-between;
    padding: 20px; 
}

.container {
    width: 90%;
    margin: 0 auto;
}

.content h2 {
    font-size: 40px;
    margin-bottom: 15px;
}

.content .descript{
    font-size: 24px;
    color: #787878;
    max-width: 620px;
    margin-bottom: 80px;
}

.card {
    background-color: #fff;
    max-width: 570px;
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    padding: 20px;
    height: 84px;
    border-radius: 15px;
}

.card p{
    font-size: 24px;
    line-height: 35px;
}

.card img{
    margin-right: 30px;
}

.imgPage {
    margin-top: 50px;
    max-width: 525px;
}

.imgPage img{
    opacity: 0.5;
    width:100%;
}

@media (max-width: 1200px) {
    .whyChoose {
        flex-direction: column;
        align-items: center;
    }
    
    .imgPage {
        margin-top: 50px;
        width: 100%;
        text-align: center;
    }
    
    .imgPage img {
        width: 70%;
        max-width: 500px;
    }
    
    .content {
        width: 100%;
    }
    
    .card {
        max-width: 100%;
    }
}

@media (max-width: 992px) {
    .content h2 {
        font-size: 32px;
    }
    
    .content .descript {
        font-size: 20px;
        margin-bottom: 50px;
    }
    
    .card p {
        font-size: 20px;
        line-height: 30px;
    }
    
    .card {
        height: auto;
        padding: 15px;
    }
}

@media (max-width: 768px) {
    .content h2 {
        font-size: 28px;
    }
    
    .content .descript {
        font-size: 18px;
        margin-bottom: 30px;
    }
    
    .card {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    
    .card img {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .card p {
        font-size: 18px;
        line-height: 26px;
    }
    
    .imgPage {
        margin-top: 30px;
    }
}

@media (max-width: 576px) {
    .content h2 {
        font-size: 24px;
    }
    
    .content .descript {
        font-size: 16px;
    }
    
    .card p {
        font-size: 16px;
        line-height: 22px;
    }
    
    .card {
        padding: 15px 10px;
        margin-bottom: 20px;
    }
    
    .imgPage img {
        width: 100%;
    }
}
</style>