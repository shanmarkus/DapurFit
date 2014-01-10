<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>jQuery Super Easy Text Rotator by Pete R. | The Pete Design</title>
  <meta name="title" content="jQuery Super Easy Text Rotator by Pete R. | The Pete Design" />
  <meta name="description" content="Add a fully customizable Path-like wheel menu button to your website. Created by Pete R., Founder of BucketListly" />
  <meta name="author" content="Pete R.">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="./resources/js/jquery.simple-text-rotator.js"></script>
  
  <link rel="stylesheet" type="text/css" href="./resources/css/simpletextrotator.css" />

</head>
<body>
  <div class="wrapper">
    <h1>jQuery Super Simple Text Rotator by Pete R.</h1>
    <h2>Add a super simple rotating text to your website with little to no markup</h2>
    <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>
    <p class="pointer">Turn this:</p>
    <pre><code>Super &lt;span class="rotate"&gt;Simple, Customizable, Light Weight, Easy&lt;/span&gt; Text Rotator with Style</code></pre>
    <p class="pointer">into these..</p>
    <div class="main">
      <h1 class="demo1">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</h1>
      <h1 class="demo2">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</h1>
      <h1 class="demo3">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</h1>
      <h1 class="demo4">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</h1>
      <h1 class="demo5">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</h1>
    </div>
  </div>

    <script>
  $(document).ready(function(){
    $(".demo1 .rotate").textrotator({
      animation: "fade",
      speed: 1000
    });
    $(".demo2 .rotate").textrotator({
      animation: "flip",
      speed: 1250
    });
    $(".demo3 .rotate").textrotator({
      animation: "flipCube",
      speed: 1500
    });
    $(".demo4 .rotate").textrotator({
      animation: "flipUp",
      speed: 1750
    });
    $(".demo5 .rotate").textrotator({
      animation: "spin",
      speed: 2000
    });
  });

  </script>
</body>
</html>