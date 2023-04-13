<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="preconnect" href="{{ asset("https://fonts.googleapis.com")}}">
    <link rel="preconnect" href="{{ asset("https://fonts.gstatic.com")}}" crossorigin>
    <link
        href="{{ asset("https://fonts.googleapis.com/css2?family=Montez&family=Montserrat:wght@600;700&family=Poppins:wght@400;500&display=swap")}}"
        rel="stylesheet">
</head>
<body>
  @include('lespagesprinciple.navbar')
    <div>
        <link href="{{ asset("./homestyle/home.css")}}" rel="stylesheet" />
        <div class="home-container">
          <div class="home-slideshow">
            <div class="home-details">
              <span class="home-text">SPECIAL COLLECTION</span>
              <h1 class="home-text01">Savana Brown</h1>
              <span class="home-text02">
                Le Lorem Ipsum est simplement du faux texte employé dans la
                composition et la mise en page avant impression. Le Lorem Ipsum est le
                faux texte standard
              </span>
              <button class="home-btn button">ORDER NOW</button>
            </div>
          </div>
          <div class="home-offer1">
            <div class="home-bg-offer1">
              <div class="home-details1">
                <h1 class="home-h1">Coffee Rimless</h1>
                <span class="home-desc">
                  Le Lorem Ipsum est simplement du faux texte employé dans la
                  composition et la mise en page avant impression. Le Lorem Ipsum est
                  le faux texte standard
                </span>
                <button class="home-btn button">ORDER NOW</button>
              </div>
            </div>
            <img
              alt="image"
              src="./images/cofferilms.png"
              class="home-image"
            />
          </div>
          <div class="home-offer2">
            <div class="home-img-offer2">
              <img
                alt="image"
                src="./images/italian%20girl.png"
                class="home-image1"
              />
            </div>
            <div class="home-bg-offer2">
              <div class="home-details2">
                <h1 class="home-h1">Italian Made</h1>
                <span class="home-desc">
                  Le Lorem Ipsum est simplement du faux texte employé dans la
                  composition et la mise en page avant impression. Le Lorem Ipsum est
                  le faux texte standard
                </span>
                <button class="home-btn button">ORDER NOW</button>
              </div>
              <img
                alt="image"
                src="./images/italian%20mode.png"
                class="home-image2"
              />
            </div>
          </div>
          <div class="home-collection">
            <div class="home-bg-collection">
              <div class="home-details3">
                <h1 class="home-h1">Spring Collaction </h1>
                <span class="home-desc">
                  Le Lorem Ipsum est simplement du faux texte employé dans la
                  composition et la mise en page avant impression. Le Lorem Ipsum est
                  le faux texte standard
                </span>
                <button class="home-btn button">ORDER NOW</button>
              </div>
            </div>
            <img
              alt="image"
              src="./images/spring%20col.png"
              class="home-image3"
            />
          </div>
        </div>
      </div>
      <div>
      @include('lespagesprinciple.footer')
    </div>
</body>
</html>
