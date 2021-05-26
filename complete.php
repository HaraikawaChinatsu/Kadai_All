<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>送信完了 | サンプル株式会社</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a href="#" class="navbar-brand">サンプル株式会社</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
        <p>ありがとうございました。送信を受け付けました。</p>
        <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
        

         <form action="complete.php" method="POST">
                    <div class="form-group">
                     <div class="row">
                        <div class="col-sm-3">
                            <label class="col-form-label">会社名：</label>
                        </div>
                        <div class="col-sm-9">
                            <p> <?php 
                              if (array_key_exists('company', $_POST)) {
                                  $company = $_POST['company'];
                              } ?>
                               <?php echo htmlspecialchars($company, ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                     <div class="row">
                       <div class="col-sm-3">
                        <label class="col-form-label">氏名：</label>
                       </div>
                      
                      <div class="col-sm-9">
                          <p> <?php 
                              if (array_key_exists('name', $_POST)) {
                                  $name = $_POST['name'];
                              } ?>
                              <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></p>
                      </div>
                     </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                       <div class="col-sm-3">                      
                        <label class="col-form-label">メール：</label>
                       </div>
                        <div class="col-sm-9">
                             <p> <?php 
                              if (array_key_exists('mail', $_POST)) {
                                  $mail = $_POST['mail'];
                              } ?>
                                <?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                       </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                       <div class="col-sm-3">   
                        <label class="col-form-label">電話番号：</label>
                       </div>
                       <div class="col-sm-9">
                          <p> <?php 
                              if (array_key_exists('tel', $_POST)) {
                                  $tel = $_POST['tel'];
                              } ?>
                             <?php echo htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?></p>
                       </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                       <div class="col-sm-3"> 
                        <label class="col-form-label">内容：</label>
                       </div>
                       <div class="col-sm-9">
                          <p> <?php 
                              if (array_key_exists('content', $_POST)) {
                                  $content = $_POST['content'];
                              } ?>
                                <?php echo nl2br(htmlspecialchars($content)); ?></p>
                       </div>
                      </div>
                    </div>

                </form>
        
        
        
        
        <div class="text-center mb-4">
            <a href="contact.php" class="btn btn-success">戻る</a>
        </div>
    </div>
    <footer class="text-center pt-3 border-top">
        &copy; 2018 SAMPLE Inc.
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>

</html>