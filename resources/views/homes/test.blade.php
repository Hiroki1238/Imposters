<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>6-1-6 複数画像を並列に見せる</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
<link rel="stylesheet" href="{{ asset('/views/homes/test.css') }}">
</head>

<body>
<div class="container">
  <div class="box">
    <h1>wavify Demo</h1>
    <p><a href="https://github.com/peacepostman/wavify">Website</a></p>
  </div>
</div>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg"><path id="wave" d=""/></svg>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
</body>
</html>