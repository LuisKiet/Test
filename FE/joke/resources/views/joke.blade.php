<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>A Joke</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <img src="https://logos.textgiraffe.com/logos/logo-name/Joke-designstyle-friday-m.png" alt="" width="100" height="50">
        <div class="info">
          <div style="float: left; text-align: end; padding-top:0.5rem">
            <p style="padding-top: 0; margin-bottom: 0; color: grey; font-style: italic;">Handicrafted by</p>
            <h7 style="padding-top: 0;">Jim HLS</h7>
          </div>
          <img src="https://truyencotich.vn/wp-content/uploads/2012/12/sunflower.jpg" alt="" style="margin-left: 1rem; border-radius: 50%;height: 65px; width: 70px;">
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container-fluid" style="background-color: #26a641; max-width: 100%; height: 250px ;">
      <div class="container" style="text-align: center; color:aliceblue; height: 100%;">
        <ul style="list-style-type: none; padding-top: 80px">
          <li>
            <h1>A joke a day keeps the doctor away</h1>
          </li>
          <li>
            <h7>If you joke wrong way, your teeth have to pay. (Serious)</h7>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid" style="max-width: 100%; height: 450px ;">
      @foreach($joke as $key => $joke)
      <div class="container" style="text-align: center;; height: 100%;">
        <ul style="list-style-type: none; padding-top: 60px; text-align: left;font-size: large;">
          <li>
            <!-- <p>
              A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their babies became adults and made babies, and so on."

              The child then went to his mother, asked her the same question and she told him, "We were monkeys then we evolved to become like we are now."

              The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of the family."

              Teacher: "Kids,what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what does the pig give you?" Student: "Bacon!" Teacher: "Great! And what does the fat cow give you?" Student: "Homework!"

              The teacher asked Jimmy, "Why is your cat at school today Jimmy?" Jimmy replied crying, "Because I heard my daddy tell my mommy, 'I am going to eat that pussy once Jimmy leaves for school today!'"

              A housewife, an accountant and a lawyer were asked "How much is 2+2?" The housewife replies: "Four!". The accountant says: "I think it's either 3 or 4. Let me run those figures through my spreadsheet one more time." The lawyer pulls the drapes, dims the lights and asks in a hushed voice, "How much do you want it to be?"
            </p> -->
            <p>
              {{$joke->title}}
            </p>
          </li>
        </ul>
        <ul style="margin-top: 3rem">
          <a class="btn btn-primary" href="/s" role="button" style="width: 300px; margin-right: 2rem;">This is Funny!</a>
          <a class="btn btn-success" href="/s" role="button" style="width: 300px;">This is not Funny!</a>
        </ul>
      </div>
      @endforeach
    </div>
  </main>

  <footer>
    <div class="container-fluid">
      <hr>
      <div class="container">
        <ul style="list-style-type: none; text-align: center;color: grey; font-style: normal;">
          <li>
            <p>
              This website is created as part of Hlsolutions program.
              The materials contained on this website are provided for general information only and do not constitute any form of advice.
              HLS assumes no responsibility for the accuracy of any particular statement and accepts no liability for any loss or damage
              which may arise from reliance on the information contained on this site.
            </p>
          </li>
        </ul>

        <div class="text-center text-dark p-3">
          Copyright 2021 HLS
        </div>
      </div>
    </div>
  </footer>
</body>

</html>