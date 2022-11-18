<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="stylesheet" href="./sass/common.css" />
</head>

<body>
  <?php include(dirname(__FILE__) . '/components/header.php') ?>
  <main class="l-main">
    <div class="p-hero"></div>
    <article class="l-container">
      <section class="p-about" id="about">
        <div class="p-about__container">
          <h2>About</h2>
          <div class="p-about__content">
            <img src="./img/about.jpg" alt="" />
            <div class="p-about__content__detail">
              <span>KAKERU MIYAICHI</span>
              <p>
                テキストテキストテキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキストテキストテキスト<br />テキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="p-bicycle" id="bicycle">
        <div class="p-bicycle__container">
          <h2>Bicycle</h2>
          <ul class="p-bicycle__content">
            <li class="p-bicycle__content__item">
              <a href="./bicycle1.php">
                <img src="./img/bicycle1.jpg" alt="" />
                <h3>タイトルタイトル</h3>
                <p>テキストテキストテキスト</p>
              </a>
            </li>
            <li class="p-bicycle__content__item">
              <a href="./bicycle2.php">
                <img src="./img/bicycle2.jpg" alt="" />
                <h3>タイトルタイトル</h3>
                <p>テキストテキストテキスト</p>
              </a>
            </li>
            <li class="p-bicycle__content__item">
              <a href="./bicycle3.php">
                <img src="./img/bicycle3.jpg" alt="" />
                <h3>タイトルタイトル</h3>
                <p>テキストテキストテキスト</p>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>
  <?php include(dirname(__FILE__) . '/components/footer.php') ?>
</body>
</html>