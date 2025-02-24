<?php
  mb_language("ja");
  mb_internal_encording("UTF-8");
  mb_send_mail("nailriver0724@outlook.jp", "表題subject", "本文の内容\r\n次の行");
?>

<!doctype html>
<html lang="Jp">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>北大ボカロ同好会</title>
    <meta name="description" content="ページの説明" />
    <meta name="format-detection" content="telephone=no" />
    <script src="huvocalo.js"></script>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <link rel="stylesheet" type="text/css" href="contact.css" />
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="header-icon">
          <img class="icon" src="img/icon.png" alt="アイコン">
        </div>
        <nav>
          <ul>
            <li><a href="index.html">ホーム</a></li>
            <li><a href="activity.html">活動内容</a></li>
            <li><a href="event.html">イベント</a></li>
            <li><a href="news.html">ニュース</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="burger"><span></span><span></span><span></span></div>
        <div class="clear"></div>
      </div>
    </header>
    <main>
      <div class="main-container">
        <div class="contact">
          <div class="contact-head">お問い合わせ</div>
          <p>以下のTwitterアカウント、またはメールフォームからご連絡下さい。</p>
          <div class="contact-container">
            <div class="contact-subhead">Twitter</div>
            <div class="contact-twitter">
              <p>入会希望、入会に関するご質問やその他のお問い合わせはこちらにお願いします。</p>
              <a href="https://twitter.com/HU_VOCALO">北海道大学ボーカロイド同好会ツイッター</a>
            </div>
            <div class="contact-subhead">メールフォーム</div>
            <div class="mail-form">
              <p>このホームページに関するお問い合わせはこちらへお願いします。</p>
              <form action="akiraayumu_confirm.php" method="post">
                <div class="input-container">
                  <div class="form-title">お名前</div>
                  <input type="text" name="name" required>
                  <div class="form-title">メールアドレス</div>
                  <input type="email" name="mail" required>
                  <div class="form-title">お問い合わせ内容</div>
                  <textarea name="message" required></textarea>
                </div>
                <div class="btn-container">
                  <input type="submit" name="submit" value="送信" class="submit-btn">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="page-top" class="DownMove">
      <a href="#">PAGE<div>TOP</div></a>
    </div>
    <footer>
      <div class="copy">&copy; 2023 北海道大学ボーカロイド同好会</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="huvocalo.js"></script>
  </body>
</html>
