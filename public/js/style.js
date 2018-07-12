$('.masa').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  autoplay: true,
  // 自動再生で切り替えをする時間
  autoplaySpeed: 1000,
  // 自動再生や左右の矢印でスライドするスピード
  speed: 400,
  // 自動再生時にスライドのエリアにマウスオンで一時停止するかどうか
  pauseOnHover: true,
  // 自動再生時にドットにマウスオンで一時停止するかどうか
  pauseOnDotsHover: true,
  
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});