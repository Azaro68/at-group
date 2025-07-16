<template>
    <div class="formCommun">
        <p class="labelForm">Заполните форму обратной связи, и мы свяжемся с Вами в кратчайшие сроки</p>
        <form action="https://formsubmit.co/mikhailrozhkoval@gmail.com" method="POST" target="_blank">
            <input type="hidden" name="_captcha" value="false" />
      <input
        type="hidden"
        name="_subject"
        value="Новая заявка с консультацией"
      />
            <div class="form-group">
                <input
                type="text"
                id="name"
                name="name"
                placeholder="Ваше имя"
                required
                />
            </div>
            
            <div class="form-group">
                <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Ваш телефон"
                required
                />
            </div>
            
            <button type="submit" class="submit-btn">Отправить</button>
        </form>
        <p class="approval">Нажимая кнопку «Отправить», вы соглашаетесь <span>на обработку ваших персональных данных</span>.</p>
    </div>
</template>

<script>
    export default {
        name: 'FormCommun'
    }
</script>

<style scoped>
.formCommun{
    width: 600px;
    background: #F6F7F9;
    padding: 25px 40px 40px;
    border-radius: 20px;
    box-shadow: 0px 4px 4px 0px rgb(0 0 0 / 28%);
}

.formCommun .labelForm{
    font-size: 20px;
    font-weight: 600;
    max-width: 400px;
    margin: 0 auto;
    margin-bottom: 20px;
    text-align: center;
}

.contact-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background: #f5f5f5;
  border-radius: 8px;
  font-family: Arial, sans-serif;
}

.contact-form h3 {
  text-align: center;
  color: #1D3F78;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group input {
  width: 100%;
  height: 53px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 10px;
  font-size: 16px;
}

.submit-btn {
  width: 100%;
  padding: 12px;
  background-color: #1D3F78;
  color: white;
  border: none;
  border-radius: 10px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
  margin-bottom: 10px;
}

.submit-btn:hover {
  background-color: #0d2a5a;
}

.status-message {
  margin-top: 15px;
  padding: 10px;
  background-color: #dff0d8;
  color: #3c763d;
  border-radius: 4px;
  text-align: center;
}

.approval{
    font-size: 10px !important;
    text-align: center;
    color: #BDBDBD;
}

.approval span {
    color: #225A7D;
}

@media (max-width: 1200px) {
    .formCommun {
        width: 500px;
        padding: 20px 30px 30px;
    }
    
    .formCommun .labelForm {
        font-size: 18px;
    }
    
    .form-group input {
        height: 48px;
    }
}

@media (max-width: 992px) {
    .formCommun {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .formCommun {
        padding: 20px;
    }
    
    .formCommun .labelForm {
        font-size: 16px;
    }
    
    .form-group input {
        height: 44px;
        font-size: 14px;
    }
    
    .submit-btn {
        padding: 10px;
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .formCommun {
        border-radius: 15px;
    }
    
    .formCommun .labelForm {
        margin-bottom: 15px;
    }
}
</style>