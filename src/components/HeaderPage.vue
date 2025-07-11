<template>
  <div class="header container">
    <div class="companiHeader">
      <img src="../assets/img/logo_fin.png" alt="logotip">
      <p class="titleHead">НАДЕЖНОСТЬ КАЧЕСТВО ГАРАНТИИ</p>
    </div>
    <div class="menuHeader">
      <input
        v-model="searchQuery"
        @keyup.enter="searchExcel"
        placeholder="Поиск"
        type="text"
        id="name"
      />
      <nav>
        <ul>
          <li style="margin-left: 20px;"><a href="#aboutСompany">О КОМПАНИИ</a></li>
          <li>КАТАЛОГ</li>
          <li><a href="#contact">СВЯЗАТЬСЯ С НАМИ</a></li>
        </ul>
      </nav>
    </div>
    <div class="infoHeader">
      <p>+7 (812) 388-15-88</p>
      <p>info@at-grupp.ru</p>
    </div>
  </div>
</template>

<script>
import * as XLSX from 'xlsx';

export default {
  name: 'HeaderPage',
  data() {
    return {
      searchQuery: ''
    };
  },
  methods: {
    async searchExcel() {
      if (!this.searchQuery) {
        alert('Введите название детали');
        return;
      }

      try {
        const res = await fetch(import.meta.env.BASE_URL + 'data/details.csv');
        const text = await res.text();
        const workbook = XLSX.read(text, { type: 'string' });
        const sheet = workbook.Sheets[workbook.SheetNames[0]];
        const jsonData = XLSX.utils.sheet_to_json(sheet, { header: 1 });


        const searchLower = this.searchQuery.toLowerCase();
        const foundIndex = jsonData.findIndex((row) => {
          if (!Array.isArray(row)) return false;
          const firstCell = row[0];
          return String(firstCell || '').toLowerCase().includes(searchLower);
        });

        if (foundIndex === -1) {
          alert('Деталь не найдена');
          return;
        }

        const rowData = jsonData[foundIndex];

        const rowHtml = `
          <html>
            <head>
              <title>Найдена деталь</title>
              <style>
                table {
                  border-collapse: collapse;
                  width: 80%;
                  margin: 40px auto;
                }
                td {
                  border: 1px solid #999;
                  padding: 12px 16px;
                  font-size: 18px;
                  background-color: #ffff99;
                }
                h2 {
                  text-align: center;
                  font-family: sans-serif;
                  margin-top: 30px;
                }
              </style>
            </head>
            <body>
              <h2>Найдена строка:</h2>
              <table>
                <tr>${rowData.map(cell => `<td>${cell || ''}</td>`).join('')}</tr>
              </table>
            </body>
          </html>
        `;

        const blob = new Blob([rowHtml], { type: 'text/html' });
        const url = URL.createObjectURL(blob);
        window.open(url, '_blank');
      } catch (error) {
        console.error('Ошибка поиска:', error);
        alert('Не удалось обработать Excel-файл');
      }
    }
  }
};
</script>

<style scoped>
/* Твои стили остаются без изменений */
.container {
  width: 90%;
  margin: 0 auto;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 30px 0;
}

.header::before {
  content: '';
  position: absolute;
  margin-top: 5px;
  top: 164px;
  right: 0;
  width: 100%;
  border-top: 2px solid #828282;
}

.companiHeader {
  width: 425px;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}

.titleHead {
  margin-bottom: 5px;
  color: #225A7D;
  font-weight: 500;
  position: relative;
}

.titleHead::before {
  content: '';
  position: absolute;
  margin-top: 5px;
  bottom: 0;
  right: 0;
  width: 100%;
  border-top: 2px solid #A1D8E7;
}

.titleHead::after {
  content: '';
  position: absolute;
  margin-top: 5px;
  bottom: -5px;
  right: 70px;
  width: 260px;
  border-top: 2px solid #225A7D;
}

.menuHeader {
  width: 640px;
}

.menuHeader input {
  width: 100%;
  height: 55px;
  padding: 0 20px;
  border-radius: 10px;
  font-size: 18px;
  box-shadow: 2px 2px 4px rgb(0 0 0 / 50%);
}

input::placeholder {
  color: #828282;
  font-weight: 500;
}

.menuHeader nav {
  margin-top: 20px;
  width: 80%;
  font-size: 20px;
  font-weight: 400;
}

.menuHeader nav ul {
  display: flex;
  align-items: center;
  gap: 30px;
  padding: 0;
  list-style: none;
}

.menuHeader nav li {
  cursor: pointer;
  transition: color 0.3s;
}

.menuHeader nav li:hover {
  color: #225A7D;
}

.infoHeader p {
  font-weight: 500;
}

@media (max-width: 1200px) {
  .companiHeader {
    width: 350px;
  }
  .menuHeader {
    width: 500px;
  }
  .menuHeader nav ul {
    gap: 20px;
  }
  .menuHeader nav {
    font-size: 18px;
  }
}

@media (max-width: 992px) {
  .header {
    flex-wrap: wrap;
    padding-bottom: 60px;
  }
  .companiHeader {
    width: 100%;
    margin-bottom: 20px;
    justify-content: flex-start;
  }
  .menuHeader {
    width: 70%;
  }
  .infoHeader {
    width: 30%;
    text-align: right;
  }
  .header::before {
    top: 260px;
  }
}

@media (max-width: 768px) {
  .header {
    align-items: center;
  }
  .companiHeader {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .companiHeader img {
    margin-bottom: 10px;
  }
  .titleHead::after {
    right: 50%;
    transform: translateX(50%);
    width: 200px;
  }
  .menuHeader {
    width: 100%;
    margin-top: 20px;
  }
  .menuHeader nav {
    width: 100%;
  }
  .infoHeader {
    width: 100%;
    text-align: center;
    margin-top: 20px;
  }
  .header::before {
    top: 390px;
    bottom: 20px;
  }
}

@media (max-width: 576px) {
  .menuHeader input {
    height: 45px;
    font-size: 16px;
  }
  .menuHeader nav ul {
    flex-direction: column;
    gap: 10px;
    align-items: center;
  }
  .menuHeader nav li {
    margin-left: 0 !important;
  }
  .titleHead {
    font-size: 16px;
  }
  .titleHead::after {
    width: 150px;
  }
}
</style>
