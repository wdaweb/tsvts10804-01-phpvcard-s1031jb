<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
<style>
  .main {
    margin: 5% auto;
    text-align: center;
    width: 400px;
  }
  .data {
    text-align: left;
    padding: 0 20px;
    border: #000 2px solid;
    margin-bottom: 20px;
  }
  .data p{
    min-width:300px;
  }
</style>

<div class="main">
  <h1>vCard產生器</h1>
  <form action="api.php" method="post" enctype="multipart/form-data">
    <div class="data">
      <p>你的名字 | <input type="text" name="user" value="張育琦"></p>
      <p>職位名稱 | <input type="text" name="title" value="網頁設計師"></p>
      <p>
        <span style="vertical-align:top">技能說明 | </span>
        <textarea name="skill" cols=30 rows=10>HTML/CSS網頁概念基礎,PHP/MySQL資料處理,JS/JQ前端網頁設計,AI/PS平片影像處理,UI/UX設計規劃</textarea>
      </p>
      <p>email | <input type="text" name="mail" value="s1031jb@gmail.com"></p>
      <p>手機號碼 | <input type="text" name="phone" value="0987-654-321"></p>
      <hr>
      <p>人像照 | <input type="file" name="who"></p>
      <p>版型選擇 |
        <select name="layout">
          <option value="green" selected>寶石綠</option>
          <option value="pink">大地褐</option>
          <option value="black">星空黑</option>
          <option value="white">雲彩白</option>
        </select>
      </p>
    </div>
    <input type="submit" value="送出預覽">
  </form>
</div>